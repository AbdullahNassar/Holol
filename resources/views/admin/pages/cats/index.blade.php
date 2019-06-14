@extends('admin.layouts.master')
@section('title')
الفئات
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول  الفئات</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.category.add')}}" class="box-btn ">
                                اضافة فئة جديدة
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div><!-- End col -->
                </div><!--End Row-->
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="row">

                    </div>
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
                                @foreach($categories as $category)
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