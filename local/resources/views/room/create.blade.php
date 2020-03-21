@extends('layouts.master')
@section('title')
จัดการข้อมูลห้อง - เพิ่มห้อง
@endsection
@section('css')

   <!-- Ion Range Slider Css -->
   <link href="{{asset('/assets/plugins/ionrangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" />
   <link href="{{asset('/assets/plugins/ionrangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset('/assets/plugins/nouislider/distribute/nouislider.css')}}" rel="stylesheet" />
@endsection
@section('content')
<!--  Heading -->
<div class="page-heading">
    <h1>จัดการข้อมูลห้อง</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('')}}">หน้าแรก</a></li>
        <li class="active"><a href="{{url('room')}}">รายชื่อห้อง</a></li>
    </ol>
</div>
<!-- #END#  Heading -->
<div class="page-body">
    <!-- Main Graph -->
    <div class="row clearfix">
        <!-- Last 5 Comments -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">รายชื่อห้อง</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <a href="{{url('room/create')}}" class="btn btn-success btn-outline"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มห้อง</a>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="number_room">หมายเลขห้อง</label>
                                    <input type="text" class="form-control" id="number_room" placeholder="หมายเลขห้อง">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="room_name">ชื่อห้อง</label>
                                    <input type="text" class="form-control" id="room_name" placeholder="ชื่อห้อง">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="room_name">ราคา</label>
                                    <input type="text" id="range_02" />
                                    {{-- <input type="text" class="form-control" id="room_name" placeholder="ชื่อห้อง"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="room_name">รายละเอียดห้อง</label>
                                    <textarea class="form-control" id="room_name" placeholder="ชื่อห้อง"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Last 5 Comments -->
<!-- #END# To-Do List -->
</div>
<!-- END Main Graph -->
</div>
@endsection
@section('js')
    <!-- noUISlider Js & Helper -->
    <script src="{{asset('/assets/plugins/wnumb/wNumb.js')}}"></script>
    <script src=".{{asset('/assets/plugins/nouislider/distribute/nouislider.js')}}"></script>


    <!-- Ion Range Slider Js -->
    <script src="{{asset('/assets/plugins/ionrangeslider/js/ion.rangeSlider.js')}}"></script>
@endsection
