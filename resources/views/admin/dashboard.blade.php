@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-cart-plus fs-14 text-muted"></i>
                            </div>
                            <h4 class="card-title mb-0">Overall Sales</h4>
                            <div class="dropdown card-addon">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-sidebar"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Total sales</p>
                                            <h5 class="mb-0">$12,253</h5>
                                        </div>
                                        <div class="text-success float-end">
                                            <i class="mdi mdi-menu-up"> </i>2.2%
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Latest sales</p>
                                            <h5 class="mb-0">$34,254</h5>
                                        </div>
                                        <div class="text-success float-end">
                                            <i class="mdi mdi-menu-up"> </i>2.1%
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Last sales</p>
                                            <h5 class="mb-0">$32,695</h5>
                                        </div>
                                        <div class="text-success float-end">
                                            <i class="mdi mdi-menu-up"> </i>1.8%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_figures" data-colors='["--bs-info", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end container-fluid -->
    </div>
@endsection