<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Category;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use Session;

use Stripe;

use App\Models\Comment;

use App\Models\Reply;

use Exception;

use RealRashid\SweetAlert\Facades\Alert;

use Newsletter;

use Psy\Command\WhereamiCommand;



class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()) //checking if any user logged in
        {
        $product = product::orderby('id', 'desc')->paginate(6);
        $comment = comment::orderby('id', 'desc')->get(); //Getting the comments according to orderby
        $reply = reply::all();

        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.userpage', compact('product','comment','reply','cart_count')); 

        }else{

            $product = product::orderby('id', 'desc')->paginate(6); 
            $comment = comment::orderby('id', 'desc')->get(); //Getting the comments according to orderby
            $reply = reply::all();
        return view('home.userpage', compact('product','comment','reply')); 
        }
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            $total_product = product::all()->count(); //calculating the total products 

            $total_order = order::all()->count(); //calculating the total orders

            $total_user = user::all()->count(); //calculating the total customers

            $order = order::all(); //getting all the orders 

            $total_revenue = 0; //We declare the beginning value as 0

            foreach($order as $order)
            {
                $total_revenue = $total_revenue + $order->price; //we calculate the total revenue
            }

            $total_delivered = order::where('delivery_status','=','delivered')->get()->count(); //writing the delivery status of products

            $total_processing = order::where('delivery_status','=','processing')->get()->count(); //writing the delivery status of products

            return view('admin.home', compact('total_product', 'total_order', 'total_user', 'total_revenue','total_delivered','total_processing'));

        }else{
            
            $product = product::paginate(6); //limiting the product number

            $comment = comment::orderby('id', 'desc')->get(); //Getting the comments according to orderby

            $reply = reply::all(); //Getting all the comments

            $user_id = auth()->user()->id;
            
            $cart_count = cart::where('user_id','=', $user_id)->count();

            return view('home.userpage', compact('product','comment','reply','cart_count')); //Showing the products and comments
        }
    }

    public function product_details(Request $request, $id)
    {
        if(Auth::id()) //checking if any user logged in
        {

        $product = product::find($id);

        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.product_details', compact('product','cart_count')); //calling the product details
        }
        else{
            $product = product::find($id);
            return view('home.product_details', compact('product')); //calling the product details
        }

    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id()) //checking if any user logged in
        {
            $user = Auth::user(); //Gets the logged in user data

            $userid = $user->id;

            $product = product::find($id);

            $product_exist_id = cart::where('Product_id', '=', $id)->where('user_id', '=',  $userid )->get('id')->first(); //Checking if there's a similar id belongs to the similar user, if there's then we get the id

            if($product_exist_id)
            {

                $cart = cart::find($product_exist_id)->first();
                
                $quantity = $cart->quantity;

                $cart->quantity = $quantity + $request->quantity;

                if($product->discount_price != null)
                {
    
                    $cart->price = $product->discount_price * $cart->quantity; //if the product has discount price it will come here and will multiply the quantity with cart
                }
    
                else{
                    $cart->price = $product->price * $cart->quantity; //if the product hasn't discount price it will come here and will multiply the quantity with cart
                }
    
                $cart->save();

                return redirect()->back()->with('message', 'Product Added Successfully');
            }else{
                
                $cart = new cart; 

                $cart->name = $user->name;
                
                $cart->email = $user->email;
                
                $cart->phone = $user->phone;
                
                $cart->address = $user->address;
    
                $cart->user_id = $user->id;
       
                $cart->Product_title = $product->title;
    
                if($product->discount_price != null)
                {
    
                    $cart->price = $product->discount_price * $request->quantity; //if the product has discount price it will come here and will multiply the quantity with discount price
                }
    
                else{

                    $cart->price = $product->price * $request->quantity; //if the product hasn't discount price it will come here and will multiply the quantity with price
                }
    
                $cart->image = $product->image;
                
                $cart->Product_id = $product->id;
    
                $cart->quantity = $request->quantity;
    
                $cart->save();

                Alert::success('Product Added Successfully', 'We have added the product to the cart');
    
                return redirect()->back()->with('message', 'Product Added Successfully');
            }

           
            
        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {
            $id = Auth::user()->id; //Getting specific user id

            $cart = cart::where('user_id','=',$id)->get(); //Searching the id cart table

            $user_id = auth()->user()->id;
            
            $cart_count = cart::where('user_id','=', $user_id)->count();

            return view('home.showcart',  compact('cart','cart_count')); //
        }
        else{
            $id = Auth::user()->id; //Getting specific user id

            $cart = cart::where('user_id','=',$id)->get(); //Searching the id cart table

            return view('home.showcart',  compact('cart')); //
        }
    }

    public function remove_cart($id)
    {
        $cart = cart::find($id);  //Finding the cart according to the id

        $cart->delete(); //Deleting the cart

        Alert::success('Product Removed Successfully', 'We have removed the product from the cart');

        return redirect()->back()->with('message', 'Product Removed Successfully');
    }


    public function cash_order()
    {
        $user = Auth::user(); //creating logged in user data
        $userid = $user->id;  

        $data = cart::where('user_id','=',$userid)->get(); //getting all the data and storing it in $data

        foreach($data as $data) //getting the data one by one using foreach
        {
            $order = new order; //order table name

            $order->name = $data->name; 
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';

            $order->save();

            $cart_id = $data->id; //getting the specific id which is 'id' from data and storing it in cart_id

            $cart = cart::find($cart_id); //searching the id in cart table

            $cart->delete(); //deleting the data

        }
        return redirect()->back()->with('message', 'We have received your order
        . We will connect with you as soon as possible. ');
    }

    public function stripe($totalprice)
    {

        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();
        
        return view('home.stripe', compact('totalprice','cart_count')); //address of the stripe 

    }

    public function stripePost(Request $request,$totalprice)
    {
       
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET')); //Getting STRIPE SECRET key from the env file
    
        Stripe\Charge::create ([    //charging the customer
                "amount" => $totalprice * 100, //Calculating the amount 
                "currency" => "usd", //Calculating the currency 
                "source" => $request->stripeToken,
                "description" => "Thanks for payment." 
        ]);

        $user = Auth::user(); //creating logged in user data
        $userid = $user->id;  

        $data = cart::where('user_id','=',$userid)->get(); //getting all the data and storing it in $data

        foreach($data as $data) //getting the data one by one using foreach
        {
            $order = new order; //order table name

            $order->name = $data->name; 
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;
            $order->payment_status = 'Paid';
            $order->delivery_status = 'processing';

            $order->save();

            $cart_id = $data->id; //getting the specific id which is 'id' from data and storing it in cart_id

            $cart = cart::find($cart_id); //searching the id in cart table

            $cart->delete(); //deleting the data

        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }

    public function show_order()
    {

        if(Auth::id()) 
        {
            $user = Auth::user(); //Getting logged in user details and store it in $user variable

            $userid = $user->id; //From logged in user, we're getting user id 

            $order = order::where('user_id','=',$userid)->get(); //Checking how many user id matched with the logged in user id 

            $user_id = auth()->user()->id;
            
            $cart_count = cart::where('user_id','=', $user_id)->count();


            return view('home.order', compact('order','cart_count'));

        }else{
            return redirect('login');
        }
    }

    public function cancel_order($id) //Function to cancel the order
    {
        $order = Order::find($id);

        $order->delivery_status = 'You Canceled The Order';

        $order->save();

        return redirect()->back();
    }

    public function add_comment(Request $request)
    {
        if(Auth::id()) 
        {
            $comment = new Comment();

            $comment->name = Auth::user()->name; //Getting the user name

            $comment->user_id= Auth::user()->id; //Getting the user id

            $comment->comment = $request->comment; //Calling the comment that users write

            $comment->save();

            return redirect()->back();

        }else{
            return redirect('login');
        }
        
    }

    public function add_reply(Request $request)
    {
        if(Auth::id())
        {

            $reply = new reply;

            $reply->name = Auth::user()->name;

            $reply->user_id = Auth::user()->id;

            $reply->comment_id = $request->commentId;

            $reply->reply = $request->reply;

            $reply->save();

            return redirect()->back();

        }else{
            return redirect('login');
        }
    }

    public function product_search(Request $request)
    {
        $search_text = $request->search; //Getting the search text
        
        $product = product::where('title', 'LIKE', "%$search_text%")->orWhere('category', 'LIKE', "$search_text")->paginate(10); //Searching the product type according to its title


        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.userpage', compact('product','cart_count'));
    }

    public function product(Request $request)
    {
        if(Auth::id())
        {
        $product = product::paginate(6); //limiting the product number

        $comment = comment::orderby('id', 'desc')->get(); //Getting the comments according to orderby

        $reply = reply::all(); //Getting all the comments

        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.all_product', compact('product', 'comment', 'reply','cart_count'));
        }else{
            return redirect('login');
        }
    } 

    public function search_product(Request $request)
    {
        $comment = comment::orderby('id','desc')->get(); 

        $reply = reply::all(); //calling all the replies

        $search_text = $request->search; //Getting the search text
        
        $product = product::where('title', 'LIKE', "%$search_text%")->orWhere('category', 'LIKE', "$search_text")->paginate(10); //Searching the product type according to its title

        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.all_product', compact('product','comment','reply','cart_count'));
        
    }

    public function about()
    {
        if(Auth::id())
        {
        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.about', compact('cart_count'));
        }else{
            return redirect('login');
        }

    }

    public function privacy()
    {
        if(Auth::id())
        {
        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.privacy', compact('cart_count'));

         }else{
            return redirect('login');
        }
    }

    public function contact()
    {
        if(Auth::id())
        {
        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.contact', compact('cart_count'));

         }else{
            return redirect('login');
        }
    }

    public function terms()
    {
        if(Auth::id())
        {
        $user_id = auth()->user()->id;
            
        $cart_count = cart::where('user_id','=', $user_id)->count();

        return view('home.terms', compact('cart_count'));

         }else{
            return redirect('login');
        }
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'subscriber_email'=> 'required|email'
        ]);

        try{

            if(Newsletter::isSubscribed($request->subscriber_email)){ //returns a boolean) and checking if the mail is subscribed
                
                return redirect()->back()->with('error', 'Email already subscribed'); //Returning an error message that is email already subscribed
                
            }else{

                Newsletter::subscribe($request->subscriber_email); //This will subscribe the users' mail addresses to the mailchimp

                return redirect()->back()->with('success', 'Email subscribed'); //Returning an error message that is email already subscribed

            }

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage()); //Returning an error message that is email already subscribed

        }
    }

}
