
<!---Top Menu--->
    <div id="cssmenu">       
        <ul>       
           {{--<li class="has-sub"><a href="#"><span>Category</span></a>
              <ul style="display:none">
                 <li class="has-sub"><a href="#"><span>Item 1</span></a>
                    <ul>
                       <li><a href="#"><span>Sub Item</span></a></li>
                       <li class="last"><a href="#"><span>Sub Item</span></a></li>
                    </ul>
                 </li>
                 <li class="has-sub"><a href="#"><span>Item 2</span></a>
                    <ul>
                       <li><a href="#"><span>Sub Item</span></a></li>
                       <li class="last"><a href="#"><span>Sub Item</span></a></li>
                    </ul>
                 </li>
              </ul>
           </li>--}}
           
           <li><a href="{{route('career.index')}}" style="font-size:13px;"><span>Career</span></a></li>
           <!-- <li><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" style="width:200px; height:100px;margin-bottom:30px;background:transparent"></a></li> -->
           <li class="last"><a href="{{route('contact')}}" style="font-size:13px;"><span>Contact</span></a></li>
           <li><a href="{{route('vision')}}"  style="font-size:13px;"><span>Vision</span></a></li>
           <!-- <li><a href="#services" style="font-size:15px;"><span>Services</span></a></li> -->
           <li><a href="{{route('our team')}}" style="font-size:13px;"><span>Our Team</span></a></li>
           <li class="active"><a href="{{url('/')}}" style="font-size:13px;"><span>Home</span></a></li>
           <!-- @if (Route::has('login'))
               @auth
                    <li><a href="{{ url('/home') }}"><span>{{Auth::user()->name}}</span></a></li>
               @else
                   <li><a href="{{ route('login') }}"><span>Login</span></a></li>

                   @if (Route::has('register'))
                       <li><a href="{{ route('register') }}">Register</a></li>
                   @endif
               @endif

           @endif -->
        </ul>
    </div>

