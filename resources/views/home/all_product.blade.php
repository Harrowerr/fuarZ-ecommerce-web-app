<!DOCTYPE html>
<html> 
   <head>
   <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/fuarz.png" type="">
      <title>fuarZ</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <style>
         .comments-container {
          margin: 40px auto 15px;
          width: 1468px;
          padding: 15px;
          background-image: linear-gradient(to right, white, orange);
          box-shadow: 10px 10px;
          
          }
         
         .comment-container{
          margin: 40px auto 15px;
          width: 1368px;
          padding: 15px;
          background-image: linear-gradient(to right, white, orange);
          box-shadow: 10px 10px;
         }

         img{
         border-radius: 50%;
         }
         
         p.ex1{
            
            margin-top: -40px;
            margin-left: 60px ;
         }

         p.ex2{
            
            margin-left: 60px ;
         }


      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

      <!-- product section -->
      @include('home.product_view')
      <!-- end product section -->

    <!--Comment and reply system starts here-->
   <div style="text-align: center; padding-bottom: 30px;">
         <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px; ">Comments</h1>
      <form action="{{url('add_comment')}}" method="POST">
         @csrf
         <textarea style="height: 150px; width: 600px;" placeholder="Comment Something here" name="comment"></textarea>
         <br>
         <input type="submit" class="btn btn-primary" value="Comment">   
      </form>
   </div>
      <div style="padding-left: 20%;">
      <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>

      @foreach($comment as $comment)
         <div class="comments-container">
            <img src="/home/assets/imgs/page/avatarr.jpg" alt="" width="50px">
            <p class="ex1"><b>{{$comment->name}}</b></p>
            <p class="ex2">{{$comment->comment}}</p>
            <p class="ex2"><a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid = "{{$comment->id}}">Reply</a></p>
         </div> 
            @foreach($reply as $rep)
         
         
            @if($rep->comment_id == $comment->id)
            <div class="comment-container" style="padding-left: 3%; padding-bottom: 10px; padding-bottom: 10px;">
            <img src="/home/assets/imgs/page/avatarr.jpg" alt="" width="50px"><p class="ex1"><b>{{$rep->name}}</b></p>
               <p class="ex2">{{$rep->reply}} </p>
               <p class="ex2"><a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid = "{{$comment->id}}">Reply</a></p>
            </div>
            @endif

            @endforeach

         </div>

      @endforeach

      <!-- Reply Textbox -->
      
      <div style="display: none;" class="replyDiv">
         <form action="{{url('add_reply')}}" method="POST">
            @csrf
            <input type="text" id="commentId" name="commentId" hidden = "">
            <textarea style="height: 100px; width: 500px;" name="reply" placeholder="Write Something Here" ></textarea><br>
            <button type="submit" class="btn btn-warning" >Reply</button>
            <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">Close</a>

         </form>
      </div>
   </div>
      <!--Comment and reply system ends here -->

      
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->

      <script type="text/javascript"> 
        
        function reply(caller)
        {
            document.getElementById('commentId').value = $(caller).attr('data-Commentid');

            $('.replyDiv').insertAfter($(caller)); //Interting whichever button is clicked

            $('.replyDiv').show(); //showing the reply button
        }

        function reply_close(caller)
        {
            $('.replyDiv').hide(); //Closing the reply button
        }

      </script> 

      <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
               var scrollpos = localStorage.getItem('scrollpos');
               if (scrollpos) window.scrollTo(0, scrollpos);
         });

         window.onbeforeunload = function(e) {
               localStorage.setItem('scrollpos', window.scrollY);
         };
      </script>
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>


