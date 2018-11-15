@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Quản lý sản phẩm</h2>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Thêm sản phẩm</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" novalidate="">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Giá tiền</label>
                                    <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Giá giảm</label>
                                    <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value=""></option>
                                        @foreach($cats as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Thương hiệu</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kích cỡ</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <div class="body">
                                        <input type="file" class="dropify" name="feature-image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sơ lược</label>
                                    <textarea class="form-control" rows="5" cols="30" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Thông tin sản phẩm chi tiết</label>
                                    <textarea class="form-control" rows="5" cols="30" required="" id="ckeditor"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
