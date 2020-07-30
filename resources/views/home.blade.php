@extends('layouts.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Area Crime Statistics</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li class="active">stats</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Today</h3>
            <div class="text-right"> <span class="text-muted">Todays Crimes</span>
                <h1><sup><i class="ti-arrow-up text-success"></i></sup> 12,000</h1> </div> <span class="text-success">20%</span>
            <div class="progress m-b-0">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Weekly</h3>
            <div class="text-right"> <span class="text-muted">Weekly crimes</span>
                <h1><sup><i class="ti-arrow-down text-danger"></i></sup> 5,000</h1> </div> <span class="text-danger">30%</span>
            <div class="progress m-b-0">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Monthly</h3>
            <div class="text-right"> <span class="text-muted">Monthly Crimes</span>
                <h1><sup><i class="ti-arrow-up text-info"></i></sup> 10,000</h1> </div> <span class="text-info">60%</span>
            <div class="progress m-b-0">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Yearly Sales</h3>
            <div class="text-right"> <span class="text-muted">Yearly Income</span>
                <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> 9,000</h1> </div> <span class="text-inverse">80%</span>
            <div class="progress m-b-0">
                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Black Spots</h3>
            <div id="usa" style="height: 365px"></div>
        </div>
    </div>
</div>

@endsection
