@extends('admin.layouts.master')
@section('content')
<div class="page-content">
@foreach($sliders as $slider)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تعديل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action="{{ route('admin.slider.edit' , ['id' => $slider->id]) }}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    <div class="form-body">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $slider->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="slider" id="storage" value="{{$slider->image}}">
                                        <input type="hidden" name="image" value="{{$slider->image}}" id="img">
                                        <input type="file" name="image" id="image" value="{{$slider->image}}">
                                        @if($slider->image)
                                        <img src="{{asset('storage/uploads/slider').'/'.$slider->image}}"/>
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
                                        <h5>التفعيل</h5><br>
                                        <select class="form-control" name="active">
                                            <option value="{{ $slider->active }}">@if($slider->active == 1)
                                                                                  نعم
                                                                                  @elseif($slider->active == 0)
                                                                                  لا
                                                                                  @endif 
                                            </option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>
                                    </div><!--End upload-action-->
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div><!--End Row-->
                    </div><!--End Form-body-->
                    <div class="form-action">
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="custom-btn addBTN" type="submit">حفظ التغييرات</button>
                                <a href="{{route('admin.slider')}}" class="custom-btn" style="margin-right: 20px;">أغلق</a>
                            </div><!--End Col-->
                        </div><!--End Row-->
                    </div><!--End Form-action-->
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
@endforeach
</div><!--End page-content-->
@endsection