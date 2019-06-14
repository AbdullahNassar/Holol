@extends('admin.layouts.master')
@section('content')
@foreach($portfolios as $portfolio)
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form action="{{route('admin.portfolio.addImages')}}" style="border: solid 1px; border-color:#000; width: 900px; height: 300px; margin: 30px; " class="dropzone" id="my-dropzone" method="post">
                    {{ csrf_field() }}
                    <p style="text-align: center; font-size: large;">
                        اضافة صور جديدة
                    </p>
                    <input type="hidden" name="p_id" value="{{ $portfolio->id }}">
                </form>
                <div class="col-md-12">
                        <p style="text-align: center; font-size: large;">
                            صور المشاريع
                        </p><br>
                        @foreach($images as $image)
                            <div class="col-md-2">
                                <ul style="margin-left: 25px; padding: 0;">
                                    <li style="list-style-type: none; list-style-position: inside;">
                                        <img style="max-width: 120px; max-height: 70px; margin-bottom: 20px;" src="{{asset($image->pimage)}}"/>
                                    </li>
                                    <li style="list-style-type: none; list-style-position: inside;">
                                        <a class="btn white btn-sm btn-outline sbold uppercase" href="{{ route('admin.portfolio.deleteImg' , ['id' => $image->id]) }}">
                                            احذف الصورة
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    <div class="col-md-12" style="width: 100%; margin-bottom: 20px; margin-top: 20px;">
                    </div>
                </div>
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
    
    
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action="{{ route('admin.portfolio.edit' , ['id' => $portfolio->id]) }}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $portfolio->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="portfolio" id="storage" value="{{$portfolio->image}}">
                                        <input type="hidden" name="image"  id="img" value="{{$portfolio->image}}">
                                        <input type="file" name="image" id="image" value="{{$portfolio->image}}">
                                        @if($portfolio->image)
                                        <img src="{{asset('storage/uploads/portfolio').'/'.$portfolio->image}}"/>
                                        @else
                                        <p style="font-size: large;">
                                            اضغط لتحميل صورة
                                        </p>
                                        @endif
                                    </div><!-- End Choose-Img -->
                                    <div class="upload-action">
                                        <button class="upload-btn" type="button" id="upload-btn">
                                            تحميل صورة
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
                                        <input type="hidden" value="portfolio" id="storage2" value = "{{$portfolio->icon}}">
                                        <input type="hidden" name="image2" id="img2" value = "{{$portfolio->icon}}">
                                        <input type="file" name="image2" id="image2" value = "{{$portfolio->icon}}">
                                        @if($portfolio->icon)
                                        <img src="{{asset('storage/uploads/portfolio').'/'.$portfolio->icon}}"/>
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
                                        <p id="loaded_n_total2"></p><br>

                                        <h5>التفعيل</h5><br>
                                        <select class="form-control" required name="active">
                                            <option value="{{ $portfolio->active }}">
                                                @if($portfolio->active == 1)
                                                    نعم
                                                @elseif($portfolio->active == 0)
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
                                    <label>اسم الخدمة باللغة العربية</label>
                                    <input type="text" class="form-control" name="name_ar" value="{{ $portfolio->name_ar }}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Name in English</label>
                                    <input type="text" class="form-control" name="name_en" value="{{ $portfolio->name_en }}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>محتوى الخدمة باللغة العربية</label>
                                    <textarea class="form-control" rows="10" name="content_ar">{{ $portfolio->content_ar }}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content in English</label>
                                    <textarea class="form-control" rows="10" name="content_en">{{ $portfolio->content_en }}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Portfolio URL</label>
                                    <input class="form-control" type="text" value="{{ $portfolio->url }}" name="url">
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الفئة الرئيسية</label>
                                    <div class="tg-item">
                                        <select class="form-control" name="cat_id">
                                            <option value="{{ $portfolio->cat_id }}">{{ $portfolio->cat_name_ar }}</option>
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
                                    <a href="{{route('admin.portfolios')}}" class="custom-btn" style="margin-right: 20px;">أغلق</a>
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