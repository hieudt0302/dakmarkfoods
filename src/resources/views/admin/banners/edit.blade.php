@extends('layouts.admin')
@section('title','Banner - Admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
      Banner
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Banner</a></li>
        <li class="active">Cập nhật</li>
      </ol>
      <div class="row">
        <div class="col-xs-12">
        @include('notifications.status_message') 
        @include('notifications.errors_message') 
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="form-horizontal">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#info" data-toggle="tab">Thay đổi ảnh banner</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- INFO TAB -->
                        <div class="active tab-pane" id="info">
                            <form action="{{url('/admin/banners/update')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">


                                       
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="slug" title="">Banner 1</label>
                                                <div class="col-md-4">
                                                    <input class="single-line valid" type="file" name="banner-1"/>
                                                    <span class="text-danger">{{ $errors->first('banner-1') }}</span>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="slug" title="">Banner 2</label>
                                                <div class="col-md-4">
                                                    <input class="single-line valid" type="file" name="banner-2"/>
                                                    <span class="text-danger">{{ $errors->first('banner-2') }}</span>                                                        
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="slug" title="">Banner 3</label>
                                                <div class="col-md-4">
                                                    <input class="single-line valid" type="file" name="banner-3"/>
                                                    <span class="text-danger">{{ $errors->first('banner-3') }}</span>                                                        
                                                </div>
                                            </div>                                                                                                                                      
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
