@extends('admin.layouts.master')
@section('title')
الفئات الرئيسية
@endsection
@section('content')
<div class="page-content">
@foreach($categories as $categorie)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تعديل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" action="{{ route('admin.cat.edit' , ['id' => $categorie->id]) }}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>أسم الفئة</label>
                                    <input type="hidden" name="s_id" value="{{ $categorie->id }}">
                                    <input  value="{{$categorie->cat_name_ar}}" type="text" name="cat_name_ar"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name_en" value="{{$categorie->cat_name_en}}" class="form-control">
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <div class="tg-item">
                                        <select class="form-control" required name="active">
                                            <option value="{{ $categorie->active }}">@if($categorie->active == 1)
                                                                                  نعم
                                                                                  @elseif($categorie->active == 0)
                                                                                  لا
                                                                                  @endif 
                                            </option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>
                                    </div>
                                </div><!-- End Form-Group -->
                            </div>
                        </div>
                        <div class="form-action">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="custom-btn addBTN" type="submit">حفظ التغييرات</button>
                                </div><!--End Col-->
                            </div><!--End Row-->
                        </div><!--End Form-action-->
                    </div>
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
    @endforeach
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول  الفئات</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="table-scrollable">
                        <table class="table table-striped dataTable no-footer" role="grid">
                            <thead>
                                <tr role="row">
                                    <th> # </th>
                                    <th> اسم الفئة </th>
                                    <th> التفعيل  </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cats as $category)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$loop->index + 1}} </td>
                                    <td>
                                        {{$category->cat_name_ar}}
                                    </td>
                                    <td> 
                                        @if($category->active)
                                        نعم
                                        @else
                                        لا
                                        @endif
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.cat.edit' , ['id' => $category->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <button type="button" class="delete custom-btn small red btndelet" data-url="{{ route('admin.cat.delete' , ['id' => $category->id]) }}"> حذف </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- End Box-Item-Content -->
            </div><!-- End Box-Item -->
    </section>
</div><!--End page-content-->
@endsection