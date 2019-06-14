@extends('admin.layouts.master')
@section('title')
المشتركين
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول المشتركين</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.subscriber.sendAll')}}" class="box-btn ">
                                ارسال الى الجميع
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
                                    <th> البريد الالكترونى </th>
                                    <th> ارسال </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($subscribers as $subscriber)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$subscriber->id}} </td>
                                    <td>
                                        {{$subscriber->email}}
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.subscriber.send' , ['id' => $subscriber->id]) }}"> ارسال </a>
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