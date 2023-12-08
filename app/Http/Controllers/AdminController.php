<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

use PDF;

use Notification;

use App\Notifications\SendEmailNotification;



class AdminController extends Controller
{
    public function view_category() //Viewing all the categories of products in webpage
    {
        if(Auth::id()) 
        {
            $data = category::all(); //Calling all the categories from the database

            return view('admin.category', compact('data')); //Showing all the categories in the admin panel
        }else{

            return redirect('login');  //if the user doesn't login then the system will take the user automatically to login page 
        }
       
    }

    public function add_category(Request $request)  //Adding new categories for the products to the webpage
    {

        if(Auth::id()) 
        {
            $data = new category; //Creating a new data from type of category
        
            $data->category_name = $request->category; //Calling the category_name value in the category table from database
    
            $data->save();
    
            return redirect()->back()->with('message', 'Category Added Successfully'); //Returning a message after adding the category successfully

        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
     
    }


    public function delete_category($id) //Function to delete the category that is added to the webpage
    {
        if(Auth::id())
        {
            $data = category::find($id); //Finding the category according to its id 

            $data->delete(); //Deleting the finded data
            
            return redirect()->back()->with('message', 'Category Deleted Successfully'); //Message after deleting the category successfully

        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
       
    }

    public function view_product() 
    {

        if(Auth::id())
        {
            $category = category::all(); 
            return view('admin.product', compact('category')); 

        }else{
            return redirect('login');
        }
    }

    public function add_product(Request $request) //Function to add new products from the admin panel to webpage
    {
        if(Auth::id())
        {
            $product = new product; //Creating a new variable named product

            $product->title = $request->title; //Defining product title with request variable. Request helps us to define these features of product into the database

            $product->description = $request->description; //Defining description of products

            $product->brands = $request->brands; //Defining brands of products

            $product->price = $request->price; //Defining price of products
            
            $product->quantity = $request->quantity ; //Defining quantity of products
            
            $product->discount_price = $request->dis_price; //Defining discount price of products
            
            $product->category = $request->category; //Defining category of products

            $image = $request->image; //Defining image of products

            $imagename = time().'.'.$image->getClientOriginalExtension(); //Generating a unique image file name by combining the current timestamp with the original file extension of an uploaded image

            $request->image->move('product', $imagename); //Moving an uploaded image file to a specific directory with a given filename

            $product->image = $imagename; //Defining imagename variable as image data

            $product->save();

            return redirect()->back()->with('message', 'Product Added Succesfully'); //Message after adding the products successfully

        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
    
    }

    public function show_product() //Showing the all the products in the admin panel
    {
        if(Auth::id())
        {
        $product = product::all(); //Calling all the products that are located in database
        return view('admin.show_product', compact('product'));
        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
    }

    public function delete_product($id) //Deleting the products from database
    {
        if(Auth::id())
        {
        $product = product::find($id); //Finding the products according to id to delete them

        $product->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully'); //Message after deleting the products successfully
        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function update_product($id) //Editing the products that are in the system
    {
        if(Auth::id())
        {
        $product = product::find($id); //Finding the products according to the id

        $category = category::all(); //Calling all the products to edit/update them
        return view('admin.update_product',compact('product', 'category')); 
        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
    }

    public function update_product_confirm(Request $request, $id) //Calling the features of the products from database to update them
    {
        if(Auth::id())
        {
        $product = product::find($id);

        $product->title = $request->title;

        $product->description = $request->description;

        $product->brands = $request->brands;

        $product->price = $request->price;

        $product->discount_price = $request->dis_price;

        $product->category = $request->category;

        $product->quantity = $request->quantity;

        $image = $request->image;

        if($image ) //if cycle will help us to update the current image of the product 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product', $imagename);
    
            $product->image = $imagename;
            
        }


        $product->save();
        
        return redirect()->back()->with('message', 'Product Updated Succesfully'); //Message after updating the products successfully
        }else{

            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function order() //Function to call and show all the orders in the webpage
    {
        if(Auth::id())
        {
        $order = order::all();

        return view('admin.order', compact('order'));

        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function delivered($id) 
    {
        if(Auth::id())
        {
        $order = order::find($id); //Using the id we're finding the specific id from the database

        $order->delivery_status = "delivered"; //Delivery status set as delivered

        $order->payment_status = 'Paid'; //Payment status set as paid

        $order->save(); //saves the data

        return redirect()->back();
        
        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    
    public function print_pdf($id) //Function to get a pdf to be able to get an information about the orders
    {

        if(Auth::id())
        {

        $order = Order::find($id); //Finding the orders from database according to their id

        $pdf =PDF::loadView('admin.pdf', compact('order')); //Loading the orders 

        return $pdf->download('order_details.pdf'); //Downloading the order details 

        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function send_email($id) //Function to sending mail to admin
    {
        if(Auth::id())
        {
        $order = order::find($id); //Finding the orders from database according to their id

        return view('admin.email_info', compact('order')); //Showing the informations about the orders in email_info page

        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function send_user_email(Request $request,$id)  //Function to send a mail
    {
        if(Auth::id())
        {
        $order = order::find($id); //Finding the orders from database according to their id

        $details = [ //Defining the details about mail
            'greeting' => $request->greeting,
            'firstline' => $request->firstline,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'lastline' => $request->lastline,
            

        ];

        Notification::send($order, new SendEmailNotification($details)); // Sending a notification using Laravel's built-in notification system

        return redirect()->back();

        return view('admin.email_info', compact('order'));
        
        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }

    }

    public function searchdata(Request $request)
    {
        if(Auth::id())
        {
        $searchText = $request->search; //Getting the search

        $order = order::where('name', 'LIKE', "%$searchText%")->orWhere('phone', 'LIKE', "%$searchText%")
        ->orWhere('product_title', 'LIKE', "%$searchText%")->get(); //Checking if the search matched with the name in the order table

        return view('admin.order',compact('order'));
        
        }else{
            return redirect('login'); //if the user doesn't login then the system will take the user automatically to login page 
        }
    }
}

