@extends('admin.layouts.master')
@section('title')
الرسائل
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول الرسائل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="row">

                    </div>
                    <div class="table-scrollable">
                        <table class="table table-striped dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 68.4667px;"  aria-label=" # : activate to sort column descending"> # </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 143.733px;" aria-label=" الإسم : activate to sort column ascending"> الإسم </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 162.667px;" aria-label=" البريد الالكتروني  : activate to sort column ascending"> البريد الالكتروني  </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 153.25px;" aria-label=" الرساله : activate to sort column ascending"> الرساله </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 177.717px;" aria-label=" العمليات : activate to sort column ascending"> العمليات </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($objects as $object)
                                <tr role="row" class="even">
                                    <td class="sorting_1"> {{$loop->index + 1}} </td>
                                    <td>
                                        {{$object->name}}
                                    </td>
                                    <td>
                                        {{$object->email}}
                                    </td>
                                    <td>
                                        {{$object->message}}
                                    </td>
                                    <td>
                                        <a class="custom-btn small red" href="{{ route('admin.message.send' , ['id' => $object->id]) }}"> ارسال </a>
                                        
                                        <a class="custom-btn small red" href="{{ route('admin.message.details' , ['id' => $object->id]) }}"> تفاصيل الرسالة </a>
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