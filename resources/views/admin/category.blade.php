<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type = "text/css">

    .div_center{
        text-align: center;
        padding-top: 40px;
    }

    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color{
        color: black;
    }

    .center{
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      
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
        background-color: red;
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
          
                <div class ="div_center">

                <h2 class ="h2_font">Add Category</h2>

                <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <input class = "input_color"type="text" name="category" placeholder="Write Category Name">
                    <input type="submit" class = "btn btn-primary"name="submit" value="Submit" placeholder="Write Category Name">

                </form>
                </div>
                <table class="center">
                <tr>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>

                @foreach($data as $data)

                <tr>
                  <td>{{$data->category_name}}</td>
                  <td>
                    <a onclick ="return confirm('Are You Sure To Delete This')" class = "btn btn-danger"href="{{url('delete_category', $data->id)}}">Delete</td>
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