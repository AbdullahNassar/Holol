@extends('admin.layouts.master')
@section('title')
المشتركين
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تفاصيل الرسالة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
            <div class="modal-body">
                @foreach($subscribers as $subscriber)
                <div class="row">
                    <div class="col-md-12">
                        {{$subscriber->message}}    
                    </div>
                </div>
                @endforeach
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
</div><!--End page-content-->
@endsection