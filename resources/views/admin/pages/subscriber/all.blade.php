@extends('admin.layouts.master')
@section('title')
المشتركين
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">ارسال بريد الكترونى</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
            <div class="modal-body">
                
                <form class="form" action="{{route('sendMail')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <label style="float: left;">: To</label>
                            @php $count = 1; @endphp
                            @foreach($subscribers as $subscriber)
                            <div class="col-md-3" style="float: left;">
                                <div class="form-group en" style="float: left;">
                                    <input type="text" class="form-control" value="{{$subscriber->email}}" name="email{{$count}}" required style="float: left; width: 230px; text-align: left;">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            @php $count = $count+1; @endphp
                            @endforeach
                            <div class="col-md-12">
                                <div class="form-group en">
                                    <label style="float: left;">: E-mail</label>
                                    <textarea rows="20" class="form-control" name="content" required style="text-align: left;"></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div>
                        <div class="form-action">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="custom-btn addBTN" type="submit">ارسال</button>
                                </div><!--End Col-->
                            </div><!--End Row-->
                        </div><!--End Form-action-->
                    </div>
                </form><!-- End row -->
                
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
</div><!--End page-content-->
@endsection