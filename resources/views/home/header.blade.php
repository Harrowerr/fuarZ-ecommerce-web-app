<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="/home/assets/imgs/logo/fuarz_logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul style="margin-right: 65px;" class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{url('about')}}">About Us</a></li>
                              <li><a href="{{url('contact')}}">Contact</a></li>
                              <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                              <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Products</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">Order</a>
                        </li>

                        
                                              
                        @if (Route::has('login'))
                        
                        @auth

                        <li class="nav-item">
                        <a class="nav-link" href="{{url('show_cart')}}"><i class="fas fa-shopping-cart"></i> Cart [{{ $cart_count}}]</a>
                        </li>
                        
                        <li class="nav-item">
                           <x-app-layout>
  
                           </x-app-layout>
                        </li>

                        
                        @else
                        <li style="margin-left: 50px; margin-right: 10px"  class="nav-item">
                           <a class="btn btn-primary" id = "logincss"  href="{{ route('login') }}">Login</a>
                        </li>
                        
                        &nbsp;&nbsp;
                        <li  class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth


                        @endif
                      
                     </ul>
                  </div>
               </nav>
            </div>
         </header>