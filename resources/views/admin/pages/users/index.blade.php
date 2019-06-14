@extends('admin.layouts.master')
@section('title')
الأطباء
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول المستخدمين</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.user.add')}}" class="box-btn ">
                                اضافة مستخدم جديد
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
                                    <th> الترتيب </th>
                                    <th> الصورة </th>
                                    <th> الاسم </th>
                                    <th> البريد الالكترونى </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$user->id}} </td>
                                    <td style="max-width: 200px;">
                                        <img src="{{asset('storage/uploads/users/'. $user->image)}}">
                                    </td>
                                    <td>
                                        {{$user->name}}
                                        
                                    </td>
                                    <td>
                                        {{$user->email}}
                                        
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.user.edit' , ['id' => $user->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.user.delete' , ['id' => $user->id]) }}"> حذف </a>
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