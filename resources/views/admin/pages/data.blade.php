@extends('admin.layouts.master')
@section('title')
البيانات الثابتة
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">البيانات الثابتة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" action="{{route('admin.data.update')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    @foreach($statics as $static)
                    <div class="form-body">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $static->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="static" id="storage" value="{{$static->about_image}}">
                                        <input type="hidden" name="image" value="{{$static->about_image}}" id="img">
                                        <input type="file" name="image" id="image" value="{{$static->about_image}}">
                                        @if($static->about_image)
                                        <img src="{{asset('storage/uploads/static').'/'.$static->about_image}}"/>
                                        @else
                                        <p>اضغط لتحميل صورة</p>
                                        @endif
                                    </div><!-- End Choose-Img -->
                                    <div class="upload-action"><br>
                                        <button class="upload-btn" type="button" id="upload-btn">
                                            تحميل الصورة
                                        </button>
                                        <div class="progress">
                                            <div id="progressBar" value="0" max="100" class="progress-bar" role="progressbar" style="width: 0%;">0%
                                            </div>
                                        </div>

                                        <h3 id="status"></h3>
                                        <p id="loaded_n_total"></p><br>
                                    </div><!--End upload-action-->
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العنوان الثابت لصفحة من نحن</label>
                                    <textarea rows="5" name="about_head_ar" class="form-control">{{$static->about_head_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Header of About Page</label>
                                    <textarea rows="5" name="about_head_en" class="form-control">{{$static->about_head_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى الثابت لصفحة من نحن</label>
                                    <textarea rows="10" name="about_content_ar" class="form-control">{{$static->about_content_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content of About Page</label>
                                    <textarea rows="10" name="about_content_en" class="form-control">{{$static->about_content_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى الثابت الأول للاسلايدر</label>
                                    <textarea rows="5" name="slider_ar" class="form-control">{{$static->slider_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Slider First Header</label>
                                    <textarea rows="5" name="slider_en" class="form-control">{{$static->slider_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى الثابت الثانى للاسلايدر</label>
                                    <textarea rows="5" name="slider2_ar" class="form-control">{{$static->slider2_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Slider Second Header</label>
                                    <textarea rows="5" name="slider2_en" class="form-control">{{$static->slider2_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>قيمنا</label>
                                    <textarea rows="5" name="morals_ar" class="form-control">{{$static->morals_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Our Morals</label>
                                    <textarea rows="5" name="morals_en" class="form-control">{{$static->morals_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>رؤيتنا</label>
                                    <textarea rows="5" name="vision_ar" class="form-control">{{$static->vision_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Our Vision</label>
                                    <textarea rows="5" name="vision_en" class="form-control">{{$static->vision_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>رسالتنا</label>
                                    <textarea rows="5" name="message_ar" class="form-control">{{$static->message_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Our Message</label>
                                    <textarea rows="5" name="message_en" class="form-control">{{$static->message_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>أهدافنا</label>
                                    <textarea rows="5" name="goals_ar" class="form-control">{{$static->goals_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Our Goals</label>
                                    <textarea rows="5" name="goals_en" class="form-control">{{$static->goals_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>النص الثابت لصفحة اتصل بنا</label>
                                    <textarea rows="5" name="contact_ar" class="form-control">{{$static->contact_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Contact Us Header</label>
                                    <textarea rows="5" name="contact_en" class="form-control">{{$static->contact_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div><!--End Row-->
                    </div><!--End Form-body-->
                    <div class="form-action">
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="custom-btn addBTN" type="submit">حفظ التغييرات</button>
                            </div><!--End Col-->
                        </div><!--End Row-->
                    </div><!--End Form-action-->
                    @endforeach
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
</div><!--End page-content-->
@endsection