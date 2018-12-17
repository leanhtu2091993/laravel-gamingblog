@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Quản lý chuyên mục</h2>
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
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Danh sách chuyên mục</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                <thead>
                                    <td>No.</td>
                                    <td>Tên chuyên mục</td>
                                <td>Hành động</td>
                                </thead>
                                @foreach($cats as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>
                                        <a href="{{route('admin.update_category_get', ['id' => $cat->id])}}">
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="{{route('admin.delete_category', ['id' => $cat->id])}}">
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Cập nhật chuyên mục</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" novalidate="" action="{{route('admin.update_category_post')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Tên chuyên mục</label>
                                    <input type="text" class="form-control" required="" name="cat-name" value="{{$updateCat->name}}">
                                    <input type="hidden" class="form-control" required="" name="cat-id" value="{{$updateCat->id}}">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>Cập nhật</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
