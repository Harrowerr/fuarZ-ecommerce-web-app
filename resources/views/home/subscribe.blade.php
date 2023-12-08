<section class="subscribe_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>Subscribe To Get Discount Offers</h3>
                        </div>
                        <p>Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
                        <form action="{{url('subscribe')}}" method="post">
                           @csrf
                           <input type="email" name = "subscriber_email" placeholder="Enter your email">

                           @if($errors->any('subscriber_email'))
                           <span class ="text-danger">
                              {{$errors->first('subscriber_email')}}
                           </span>
                           @endif
                           <button>
                           subscribe
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>