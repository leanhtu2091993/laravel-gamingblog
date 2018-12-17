@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Trang chủ quản trị</h2>
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
                <div class="col-12">
                    <div class="card top_report">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-blue"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Quản Trị Danh Mục</h6>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="25"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Quản Trị Bài Viết</h6>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="50"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-red" style="color: #FF4402"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Quản Trị Bình Luận</h6>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="75"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-yellow"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Quản Trị Thành Viên</h6>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">





                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Quản trị danh mục</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-5">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{route('admin.list_category')}}"><i class="fa fa-list-ol fa-2x"></i></a>
                                        </td>
                                        <td>
                                            <p class="margin-0">Danh sách</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{route('admin.list_category')}}"><i class="fa fa-plus fa-2x"></i></a>
                                        </td>
                                        <td>
                                            <p class="margin-0">Thêm mới danh mục</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Quản trị bài viết</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-5">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{route('admin.list_product')}}" style="color: #86c541"><i class="fa fa-list-ol fa-2x"></i></a>
                                        </td>
                                        <td>
                                            <p class="margin-0">Danh sách bài viết</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{route('admin.add_product')}}" style="color: #86c541"><i class="fa fa-plus fa-2x"></i></a>
                                        </td>
                                        <td>
                                            <p class="margin-0">Thêm mới bài viết</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Quản trị bình luận</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-5">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" style="color: #FF4402"><i class="fa fa-list-ol fa-2x"></i></a>
                                        </td>
                                        <td>
                                            <p class="margin-0">Danh sách bình luận</p>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Quản trị thành viên</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-5">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" style="color: #F3BB23"><i class="fa fa-list-ol fa-2x"></i></a>
                                        </td>
                                        <td>
                                            Danh sách
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" style="color: #F3BB23"><i class="fa fa-plus fa-2x"></i></a>
                                        </td>
                                        <td>
                                            Thêm mới
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
