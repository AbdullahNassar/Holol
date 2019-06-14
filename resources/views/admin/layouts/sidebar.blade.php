<aside class="main-sidebar">
                <!-- Logo -->
                <a href="{{route('admin.home')}}" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                    <img class="logo-mini" src="{{asset('assets/admin/images/icon.png')}}">
                  <!-- logo for regular state and mobile devices -->
                    <img class="logo-lg" src="{{asset('assets/admin/images/icon.png')}}">
                </a>
                <ul class="sidebar-links">
                    @if (Auth::guard('admins')->user()->type == "admin"){
                    <li class="@if(Request::route()->getName() == 'admin.home') {{'active'}} @endif">
                        <a href="{{route('admin.home')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>الرئيسية</span>
                        </a>
                    </li>   
                    <li class="@if(Request::route()->getName() == 'admin.slider') {{'active'}} @endif">
                        <a href="{{route('admin.slider')}}">
                            <i class="fa fa-th-large"></i>
                            <span>الإسلايد شو</span>
                        </a>
                    </li> 
                    <li class="@if(Request::route()->getName() == 'admin.services') {{'active'}} @endif">
                        <a href="{{route('admin.services')}}">
                            <i class="fa fa-building"></i>
                            <span>الخدمات</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.portfolios') {{'active'}} @endif">
                        <a href="{{route('admin.portfolios')}}">
                            <i class="fa fa-briefcase"></i>
                            <span>المشاريع</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.category') {{'active'}} @endif">
                        <a href="{{route('admin.category')}}">
                            <i class="fa fa-bullseye"></i>
                            <span>فئات المشاريع</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.posts') {{'active'}} @endif">
                        <a href="{{route('admin.posts')}}">
                            <i class="fa fa-rss"></i>
                            <span>المدونة</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.cat') {{'active'}} @endif">
                        <a href="{{route('admin.cat')}}">
                            <i class="fa fa-bullseye"></i>
                            <span>فئات المدونة</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.messages') {{'active'}} @endif">
                        <a href="{{route('admin.messages')}}">
                            <i class="fa fa-envelope"></i>
                            <span>الرسائل</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.data') {{'active'}} @endif">
                        <a href="{{route('admin.data')}}">
                            <i class="fa fa-info"></i>
                            <span>البيانات الثابتة</span>
                        </a>
                    </li>      
                    <li class="@if(Request::route()->getName() == 'admin.contacts') {{'active'}} @endif">
                        <a href="{{ route('admin.contacts') }}">
                            <i class="fa fa-lock"></i>
                            <span>بيانات الموقع</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.users') {{'active'}} @endif">
                        <a href="{{ route('admin.users') }}">
                            <i class="fa fa-users"></i>
                            <span>المستخدمون</span>
                        </a>
                    </li>
                    @else
                    <li class="@if(Request::route()->getName() == 'admin.posts') {{'active'}} @endif">
                        <a href="{{route('admin.posts')}}">
                            <i class="fa fa-rss"></i>
                            <span>المدونة</span>
                        </a>
                    </li>
                    @endif
                </ul><!--End sidebar-->
            </aside><!--End Main-aside-->
