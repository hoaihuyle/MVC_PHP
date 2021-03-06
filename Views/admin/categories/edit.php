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
                <div class="card"> <?php if(isset($error)) echo $error;  ?>
                    <h5 class="card-header">Validation Types</h5>
                    <div class="card-body">
                        <form id="validationform" data-parsley-validate="" novalidate="" method="POST">
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right"> Tên danh mục sản phẩm <span class="text-danger">*</span></label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input name="name_cate" type="text" required="" value="<?php echo $category[0]['name_cate'] ?>" class="form-control text-primary">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn Menu thuộc</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="menu_id" id="input-select">
                                    <option value="0">Chọn Menu</option>
                                    <?php  
                                        foreach($menuInfos as $menu){
                                    ?>
                                        <option value="<?php echo $menu['id_menu']; ?>" <?php echo ($category[0]['menu_id']==$menu['id_menu'])?'selected':'' ?> > <?php echo $menu['name_menu'] ?> </option> ;
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-sm-right">Trạng thái</label>
                            <div class="col-sm-6">
                                    <div class="custom-controls-stacked">
                                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="flag" value="1"  <?php echo ($category[0]['flag']==0)?'':'checked'; ?> class="custom-control-input"><span class="custom-control-label">Ẩn</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="flag" value="0"  <?php echo ($category[0]['flag']==1)?'':'checked'; ?> class="custom-control-input"><span class="custom-control-label">Hiện</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Lưu thay đổi</button>
                                    <button type="button" onclick="location.href='/category/index';" class="btn btn-space btn-secondary" >Quay về</button>
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
