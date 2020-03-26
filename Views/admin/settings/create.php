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
                            <div id="close_select_input">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn Từ khóa<span class="text-danger">*</span></label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" name="menu_id" id="input-select">
                                        <option value="0"> Chọn từ khóa </option> 
                                         <option value="add_new">Thêm mới</option>
                                        <?php  
                                            foreach($settingInfos as $setting){ 
                                            
                                        ?>
                                            <option value="<?php echo $setting; ?>"> <?php echo $setting ?> </option> 
                                        <?php
                                       } 
                                        ?>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="add_input_New">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right ">Nhập Từ khóa<span class="text-danger">*</span></label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="key_sett" type="text" placeholder="Từ khóa" class="form-control text-primary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right ">Nhập tên đại diện cho từ khóa<span class="text-danger">*</span></label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="name_display" type="text" placeholder="Tên đại diện cho Từ khóa" class="form-control text-primary">
                                    </div>
                                </div>
                            </div>
                            <div id="group_Append">
                                <div class="form-group row input_containt_key">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right ">Nhập Nội dung cho từ khóa</label>
                                    <div class="col-10 col-sm-8 col-lg-6">
                                        <input name="key_display" type="text" required="" placeholder="Xin hãy nhập nội dung" class="form-control text-primary">
                                    </div>
                                    <div class="col-1 del_work">
                                        <a>
                                            <img src="/lib/imageBoth/close.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="btn_Action" class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="add_btn_New">Nhấn nút để thêm mới</label>
                                <div id="add_NewInput" class="col-10 col-sm-8 col-lg-6 float-right">
                                    <a class="d-inline float-right" id="add_btn_New">
                                        <img src="/lib/imageBoth/plus.svg" alt="add new input">
                                    </a>
                                </div>
                           </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Tạo mới</button>
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

</div>
