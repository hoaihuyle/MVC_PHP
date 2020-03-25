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
            <div class="card"><?php if(isset($error)) echo $error;  ?>
                <h5 class="card-header">Validation Types</h5>
                <div class="card-body">
                    <form id="validationform" data-parsley-validate="" novalidate="" method="POST"> 
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Từ Khóa<span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="key_sett" type="text" required="" value="<?php echo $settingInfo[0]["key_sett"]; ?>" class="form-control text-primary" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nội dung Từ Khóa<span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="key_display" type="text" required="" value="<?php echo $settingInfo[0]["key_display"]; ?>" class="form-control text-primary">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn danh mục sản phẩm</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                
                            </div>
                        </div> -->
                       
                        <div class="form-group row text-right">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                <button type="submit" class="btn btn-space btn-primary">Lưu thay đổi</button>
                                <button type="button" onclick="location.href='/menu/index';" class="btn btn-space btn-secondary" >Quay về</button>
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
    <!-- Table list all Category with fields id - name - checkbox ; Action click on row to choice or checkbox-->
    
                        
</div>
