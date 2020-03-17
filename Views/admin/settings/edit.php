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
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tên Menu<span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="name_menu" type="text" required="" value="<?php echo $menuInfo[0]['name_menu'] ?>" class="form-control text-primary">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn danh mục sản phẩm</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-sm-right">Trạng thái</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="flag" value="1"  <?php echo ($menuInfo[0]['flag']==0)?'':'checked'; ?> class="custom-control-input"><span class="custom-control-label">Ẩn</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="flag" value="0"  <?php echo ($menuInfo[0]['flag']==1)?'':'checked'; ?> class="custom-control-input"><span class="custom-control-label">Hiện</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    
    <div class="row">
        <!-- ============================================================== -->
        <!-- data table multiselects  -->
        <!-- ============================================================== -->
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 multiselects">
            <!-- <form id="validationform" data-parsley-validate="" novalidate="" method="POST">  -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Danh sách danh mục sản phẩm</h5>
                    <p>Danh sách các danh mục sản phẩm thuộc Menu này</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Tên</th>
                                <th style="text-align: center;">Trạng thái</th>
                                <!-- <th style="text-align: center;">Thêm vào Menu</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($categoryInfos as $category){
                            ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $category['id_cate']; ?></td>
                                    <td align="center"><?php echo $category['name_cate']; ?></td>
                                    <td align="center"><?php echo ($category['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                    <td align="center" class="checkboxCustom">  
                                        <!-- <label class="be-checkbox custom-control custom-checkbox d-inline"> -->
                                            <!-- <input type="checkbox" name="checkID<?php echo $category['id_cate'] ?>" value="<?php echo $category['id_cate'];?>" <?php echo ($category['menu_id']!=$menuInfo[0]['id_menu'])?'':'checked'; ?> > -->
                                            <!-- <span class="custom-control-label"></span> -->
                                        <!-- </label>  -->
                                    </td>
                                </tr>
                            <?php        
                                } 
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Tên</th>
                                <th style="text-align: center;">Trạng thái</th>
                                <!-- <th style="text-align: center;">Thêm vào Menu</th> -->
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Lưu thay đổi</button>
                        <button type="button" onclick="location.href='/menu/index';" class="btn btn-space btn-secondary" >Trở về</button>
                    </div>
                </div> -->
                
            </div>
            <!-- </form> -->
        </div>

        <!-- ============================================================== -->
        <!-- end data table multiselects  -->
        <!-- ============================================================== -->
    </div>                           
</div>
