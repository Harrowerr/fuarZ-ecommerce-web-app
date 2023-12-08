<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center{
            margin: auto;
            width: 90%;
            text-align: center;
            margin-top: 40px;
        }

        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        th {
            background-color: #505a85;
    }

    td {
        padding: 15px;
        background-color: rgba(255,255,255,0.2);
        color: #fff;
    }


    body {
        padding-top: 50px;
        background: linear-gradient(45deg, #49a09d, #5f2c82);
        font-family: sans-serif;
        font-weight: 100;
    }

    .title_deg{
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 50px;
      
    }
    
    .table_deg{
 
        width: 100%;
        margin: auto;
        text-align: center;

        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }


    .th_deg{
        background-color: #505a85;
    }

    .img_size{
        width: 200px;
        height: 100px;

    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
    <div class="main-panel">
  

        @if(session()->has('message'))

        <div class = "alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
        </div>

        @endif

        <h2 class="font_size">All Products</h2>
        <table class="center">
        <tr class="th_color">
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">Brands</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Category</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Discount Price</th>
            <th class="th_deg">Product Image</th>
            <th class="th_deg">Delete</th>
            <th class="th_deg">Edit</th>
        </tr>
        
        @foreach($product as $product)

        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->brands}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount_price}}</td>
            <td>
                <img class ="img_size" src = "/product/{{$product->image}}">
            </td>

            <td><a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Product?')" href="{{url('delete_product', $product->id)}}">Delete </td>
            <td><a class ="btn btn-success" href="{{url('update_product', $product->id)}}">Edit </td>
        </tr>

        @endforeach
        </table>
        
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>