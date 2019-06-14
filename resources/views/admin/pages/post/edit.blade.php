@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    @foreach($posts as $post)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action="{{ route('admin.post.edit' , ['id' => $post->id]) }}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $post->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="blog" id="storage" value="{{$post->image}}">
                                        <input type="hidden" name="image"  id="img" value="{{$post->image}}">
                                        <input type="file" name="image" id="image" value="{{$post->image}}">
                                        @if($post->image)
                                        <img src="{{asset('storage/uploads/blog').'/'.$post->image}}"/>
                                        @else
                                        <p style="font-size: large;">اضغط لتحميل صورة</p>
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
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" value="{{route('admin.upload.icon')}}" id="url2" >
                                        <input type="hidden" value="blog" id="storage2" value="{{$post->icon}}">
                                        <input type="hidden" name="image2" id="img2" value="{{$post->icon}}">
                                        <input type="file" name="image2" id="image2" value="{{$post->icon}}">
                                        @if($post->icon)
                                        <img src="{{asset('storage/uploads/blog').'/'.$post->icon}}"/>
                                        @else
                                        <p style="font-size: large;">اضغط لتحميل أيكونة</p>
                                        @endif
                                    </div><!-- End Choose-Img -->
                                    <div class="upload-action">
                                        <button class="upload-btn" type="button" id="upload-btn2">
                                            تحميل أيكونة
                                        </button>
                                        <div class="progress">
                                            <div id="progressBar2" value="0" max="100" class="progress-bar" role="progressbar" style="width: 0%;">0%
                                            </div>
                                        </div>
                                        <h3 id="status2"></h3>
                                        <p id="loaded_n_total2"></p>

                                        <h5>التفعيل</h5><br>
                                        <select class="form-control" required name="active">
                                            <option value="{{ $post->active }}">
                                                @if($post->active == 1)
                                                    نعم
                                                @elseif($post->active == 0)
                                                    لا
                                                @endif 
                                            </option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>
                                        <br>
                                    </div><!--End upload-action-->
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>عنوان المنشور باللغة العربية</label>
                                    <input type="text" class="form-control" name="title_ar" value="{{ $post->title_ar }}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Post Title in English</label>
                                    <input type="text" class="form-control" name="title_en" value="{{ $post->title_en }}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>محتوى المنشور باللغة العربية</label>
                                    <textarea class="form-control" rows="10" name="content_ar">{{ $post->content_ar }}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Post Content in English</label>
                                    <textarea class="form-control" rows="10" name="content_en">{{ $post->content_en }}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الفئة الرئيسية</label>
                                    <div class="tg-item">
                                        <select class="form-control" name="cat_id">
                                            <option value="{{ $post->cat_id }}">{{ $post->cat_name_ar }}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->cat_name_ar}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- End Form-Group -->
                            </div>
                        </div>
                        <div class="form-action">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="custom-btn addBTN" type="submit">حفظ التغييرات</button>
                                    <a href="{{route('admin.posts')}}" class="custom-btn" style="margin-right: 20px;">أغلق</a>
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