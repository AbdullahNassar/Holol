@extends('admin.auth.master')
@section('title')
تسجيل الدخول
@endsection
@section('content')
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="">

                    <form class="login-form" action="{{ route('admin.login') }}" method="post">
                        {{ csrf_field() }}

                        <div class="alert alert-success" style="display: none;" role="alert">
                            تم تسجيل الدخول بنجاح
                        </div>

                        <div class="alert alert-danger" style="display: none;" role="alert">
                           البيانات المدخله غير صحيحه
                        </div>


                        <div class="form-group">

                            <input class="form-control form-control-solid placeholder-no-fix" type="text"  placeholder="اسم المستخدم " name="email" />
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">

                            <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="الرقم السري" name="password" /> 
                            <i class="fa fa-unlock-alt"></i>
                        </div>


                        <div class="form-actions">

                            <button type="submit" class="custom-btn">تسجيل الدخول</button>


                        </div>
                    </form>
                </div><!-- End Login-Form -->
            </div><!-- End col -->
            <div class="col-sm-6 hidden-xs">
                <div class="section-img" style="max-width: 550px;">
                    <img src="{{asset('assets/admin/images/about-img.png')}}" alt="logo"  style="width: 350px;">
                </div><!-- End Section-Img -->
            </div><!-- End col -->
        </div><!-- End row -->
    </div><!-- End container -->
</section><!-- End Section -->

@endsection