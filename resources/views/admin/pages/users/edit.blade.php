@extends('admin.layouts.master')
@section('title')
المستخدمون
@endsection
@section('content')
<div class="page-content">
@foreach($users as $user)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تعديل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action=""  id="dropzone_image">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                        <div class="form-group">
                            <div class="choose-img">
                                <input type="hidden" name="s_id" value="{{ $user->id }}">
                                <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                <input type="hidden" value="users" id="storage" >
                                <input type="hidden" name="image" value="{{$user->image}}" id="img" >
                                <input type="file" name="image" id="image" required>
                                    @if($user->image)
                                    <img src="{{asset('storage/uploads/users').'/'.$user->image}}"/>
                                    @else
                                    <p>اضغط لتحميل صورة</p>
                                    @endif
                            </div><!-- End Choose-Img -->
                            <div class="upload-action">
                                <button class="upload-btn" type="button" id="upload-btn">
                                    تحميل الصورة
                                </button>
                                <div class="progress">
                                    <div id="progressBar" value="0" max="100" class="progress-bar" role="progressbar" style="width: 0%;">0%
                                    </div>
                                </div>
                                <h3 id="status"></h3>
                                <p id="loaded_n_total"></p>
                            </div><!--End upload-action-->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>أسم المستخدم</label>
                                    <input type="text" name="name"  class="form-control" value="{{$user->name}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>User Name </label>
                                    <input type="text" name="name_en"  class="form-control" value="{{$user->name_en}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>E-mail </label>
                                    <input type="email" class="form-control" rows="5" name="email" value="{{$user->email}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Password </label>
                                    <input type="password" class="form-control" rows="5" name="password" value="{{$user->password}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>username </label>
                                    <input type="text" class="form-control" rows="5" name="username" value="{{$user->username}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Type </label>
                                    <select class="form-control" name="type" required>
                                        <option value="{{$user->type}}">{{$user->type}}</option>
                                        <option value="admin">admin</option>
                                        <option value="editor">editor</option>
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-12">
                                <div class="form-group en">
                                    <label>About </label>
                                <textarea class="form-control" name="about" rows="6" required>{{$user->about}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Phone </label>
                                    <input type="text" class="form-control" rows="5" name="phone" value="{{$user->phone}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Facebook </label>
                                    <input type="text" class="form-control" rows="5" name="facebook" value="{{$user->facebook}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Twitter </label>
                                    <input type="text" class="form-control" rows="5" name="twitter" value="{{$user->twitter}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Linkedin </label>
                                    <input type="text" class="form-control" rows="5" name="linkedin" value="{{$user->linkedin}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            </div><!--End Row-->
                        </div><!--End Form-body-->
                        <div class="form-action">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="custom-btn" type="submit">حفظ التغييرات</button>
                                </div><!--End Col-->
                            </div><!--End Row-->
                        </div><!--End Form-action-->
                    </div>
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
 @endforeach
</div><!--End page-content-->
@endsection