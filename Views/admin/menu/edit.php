<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Form Validations </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Validation Types</h5>
                    <div class="card-body">
                        <form id="validationform" data-parsley-validate="" novalidate="">
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Tên Menu</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="<?php echo $menuInfo[0]['name_menu'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Các danh mục sản phẩm</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" data-parsley-minlength="6" placeholder="Min 6 chars." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Thứ tự - Sorting</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" data-parsley-maxlength="6" placeholder="<?php echo ($menuInfo[0]['sorting']==0)?'Chưa thiết lập':$menuInfo[0]['sorting'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-sm-right">Trạng thái</label>
                                <div class="col-sm-6">
                                    <div class="custom-controls-stacked">
                                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            <label class="be-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" <?php echo ($menuInfo[0]['flag']==0)?'':'checked'; ?>><span class="custom-control-label">Ẩn</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>

</div>
