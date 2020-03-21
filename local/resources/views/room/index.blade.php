@extends('layouts.master')
@section('title')
    จัดการข้อมูลห้อง - หน้าแรก
@endsection
@section('css')
    
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
    
@endsection