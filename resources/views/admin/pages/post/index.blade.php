@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول المدونة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.post.add')}}" class="box-btn ">
                                اضافة منشور جديد
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
                                    <th> الصورة </th>
                                    <th> عنوان المنشور </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($posts as $post)
                                <tr role="row" class="even">
                                    <td> {{$loop->index + 1}} </td>
                                    <td class="service-img"> 
                                        <img src="{{asset('storage/uploads/blog/'. $post->image)}}">
                                    </td>                                    
                                    <td>
                                        {{$post->title_ar}}
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.post.edit' , ['id' => $post->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <button type="button" class="delete custom-btn small red btndelet" data-url="{{ route('admin.post.delete' , ['id' => $post->id]) }}"> حذف </button>
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