<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
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
        background-color: red;
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
          
            <h1 class="title_deg">All Orders</h1>

            <div style="margin: auto; padding-bottom: 30px; ">

              <form action="{{url('search')}}" method="get">
                @csrf
                <input type="text" style="color: black;" name="search" placeholder="Search For Something">
                <input type="submit" name="Search" value="Search" class="btn btn-outline-primary" >
              </form>
            </div>
            <table class="table_deg"> 
              <thead>
                <tr class="th_deg">
                    <th style="padding: 10px">Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Product Title</th>
                    <th style="padding: 10px">Quantity</th>
                    <th style="padding: 10px">Price</th>
                    <th style="padding: 10px">Payment Status</th>
                    <th style="padding: 10px">Delivery Status</th>
                    <th style="padding: 10px">Image</th>
                    <th style="padding: 10px">Delivered</th>
                    <th style="padding: 10px">Print PDF</th>
                    <th style="padding: 10px">Send Email</th>
                </tr>
              </thead>
                @forelse($order as $order)

                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}">
                    </td>

                    <td>

                    @if($order->delivery_status =='processing')

                      <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are You Sure This Product Delivered?')" class="btn btn-primary">Delivered</a>
                    
                    @else

                      <p>Delivered</p>
                    
                    @endif
                    </td>

                    <td>
                      <a href="{{url('print_pdf', $order->id)}}" class="btn btn-secondary">Print PDF</a>
                    </td>

                    <td>
                      <a href="{{url('send_email', $order->id)}}" class="btn btn-info">Send Email</a>
                    </td>

                    
                </tr>

                @empty
               <tr>
                  <td colspan="16">No Data Found</td>
               </tr>

                @endforelse
            </table>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>