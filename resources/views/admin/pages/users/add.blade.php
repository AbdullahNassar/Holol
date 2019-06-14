@extends('admin.layouts.master')
@section('title')
المستخدمون
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action=""  id="dropzone_image">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                        <div class="form-group">
                            <div class="choose-img">
                                <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                <input type="hidden" value="users" id="storage" >
                                <input type="hidden" name="image" id="img" >
                                <input type="file" name="image" id="image" required>
                                <p>اضغط لتحميل صورة</p>
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
                                    <input type="text" name="name"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>User Name </label>
                                    <input type="text" name="name_en"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>E-mail </label>
                                    <input type="email" class="form-control" name="email" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Password </label>
                                    <input type="password" class="form-control" name="password" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>username </label>
                                    <input type="text" class="form-control" name="username" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Type </label>
                                    <select class="form-control" name="type" required>
                                        <option value="----------"></option>
                                        <option value="admin">admin</option>
                                        <option value="editor">editor</option>
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-12">
                                <div class="form-group en">
                                    <label>About </label>
                                    <textarea class="form-control" name="about" rows="6" required></textarea>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Phone </label>
                                    <input type="text" class="form-control" name="phone" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Facebook </label>
                                    <input type="text" class="form-control" rows="5" name="facebook" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Twitter </label>
                                    <input type="text" class="form-control" rows="5" name="twitter" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Linkedin </label>
                                    <input type="text" class="form-control" rows="5" name="linkedin" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div>
                        </div>
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
</div><!--End page-content-->
@endsection