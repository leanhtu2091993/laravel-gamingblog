@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Quản lý bài viết</h2>
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
                            <h2>Cập nhật bài viết</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" novalidate="" action="{{route('admin.update_product_post')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input type="hidden" class="form-control" required="" name="pro-id" value="{{$updatePro->id}}">
                                </div>

                                <div class="form-group">
                                    <label>Tên bài viết</label>
                                    <input type="text" class="form-control" required="" name="name" value="{{$updatePro->name}}">
                                </div>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="{{$updatePro->category}}"></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Ảnh đại diện bài viết</label>
                                    <div class="body">
                                        <input type="file" class="dropify" name="feature-image">
                                    </div>
                                    <span class="error">
                                        @if ($errors->get('feature-image'))
                                            @foreach($errors->get('feature-image') as $error)
                                                <div class="ui pointing red basic label">
                                                  {{ $error }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả sơ lược</label>
                                    <textarea class="form-control" rows="5" cols="30" required="" name="description">{{old('description')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Thông tin bài viết chi tiết</label>
                                    <textarea class="form-control" rows="5" cols="30" required="" id="ckeditor" name="properties">{{old('properties')}}</textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function preview_images()
        {
            var total_file=document.getElementById("product-image").files.length;

            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-3'><img width='300px' height='300px' class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        }
    </script>
@endsection
