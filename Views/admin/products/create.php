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
                    <form  id="validationform" data-parsley-validate="" novalidate="" method="POST" enctype="multipart/form-data">

                    <h5 class="card-header">Thông tin sản phẩm</h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Tên sản phẩm <span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="name_prod" type="text" required="" placeholder="Nhập tên danh mục sản phẩm" class="form-control text-primary">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Danh mục sản phẩm <span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select class="form-control" name="cate_id" id="input-select-cate" require>
                                <option>Chọn danh mục</option>
                                <?php  
                                    foreach($categoryInfos as $category){
                                ?>
                                    <option value="<?php echo $category['id_cate']; ?>"> <?php echo $category['name_cate'] ?> </option> ;
                                <?php
                                }
                                ?>
                                </select>
                                <ul class="parsley-errors-list filled" style="display:none" id="erroCate"><li class="parsley-required">Xin hãy nhập danh mục sản phẩm</li></ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Hãng sản xuất <span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select class="form-control" name="comp_id" id="input-select-comp" require>
                                <option value="0">Chọn Hãng</option>
                                <?php  
                                    foreach($companyInfos as $company){
                                ?>
                                    <option value="<?php echo $company['id_comp']; ?>"> <?php echo $company['name_comp'] ?> </option> ;
                                <?php
                                }
                                ?>
                                </select>
                                <ul class="parsley-errors-list filled" style="display:none" id="erroComp"><li class="parsley-required">Xin hãy nhập hãng sản xuất.</li></ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Giá <span class="text-danger">*</span></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="price" type="number" required="" min="10000" step="1000" value="10000" class="form-control text-primary">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Công dụng</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <textarea name="uses_prod" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-sm-right">Giảm giá</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="discount" value="0" checked="" class="custom-control-input"><span class="custom-control-label">0%</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="discount" value="15" class="custom-control-input"><span class="custom-control-label">15%</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="discount" value="25" class="custom-control-input"><span class="custom-control-label">25%</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-sm-right">Trạng thái</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        <label class="be-checkbox custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked><span class="custom-control-label">Hiện</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Hình ảnh</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <div class="input-file-container d-inline-block" >
                                    <input type="file" name="image">
                                </div>
                                <p class="file-return"></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <h5 class="card-header">Cài đặt thông tin sản phẩm</h5>
                   
                    <div class="card-body">
                    <p> Windows: Nhấn phím ctrl và chọn các từ khóa
                        <br>Macbook: Giữ phím command để chọn các từ khóa </p>
                       
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Tên đại diện</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="name_setting" type="text" placeholder="Nhập tên hiển thị cho từ khóa" class="form-control text-primary">
                            </div>
                        </div> 
                    </div> -->

                    <h5 class="card-header">Thông tin thêm</h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn Từ khóa</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select class="form-control" name="menu_id[]" id="input-select"  multiple>
                                <option value="0"> Chọn từ khóa </option> 
                                <?php  
                                    for($x=0;$x<count($setting);$x++){
                                    
                                ?>
                                    <option value="<?php echo $setting1[$x]; ?>"><?php echo $setting[$setting1[$x]];?> </option>  
                                <?php
                                } 
                                ?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Giá nhà sản xuất</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="price_manu" type="number" min="10000" step="1000" placeholder="Nhập giá hãng cho sản phẩm" class="form-control text-primary">
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Mã vạch</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="barcode" type="text"placeholder="Nhập mã vạch" class="form-control text-primary">
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Bài viết cho sản phẩm</label>
                            <!-- <div id="editor"></div>  -->
                            <textarea cols="80" rows="10" name="description" class="form-control" id="editor"><?php echo isset($_POST['description'])?$_POST['description']:''; ?></textarea>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                <button type="submit" class="btn btn-space btn-primary">Tạo mới</button>
                                <button type="button" onclick="location.href='/products/index';" class="btn btn-space btn-secondary" >Quay về</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>

</div>

<script>
/**
 * CK-Editor version 5
 */
const textarea = document.querySelector( '#editor' );

ClassicEditor
    .create( textarea )
    .then( editor => { window.editor = editor } );

//     document.getElementById( 'submit' ).onclick = () => {
//     textarea.value = editor.getData();
// }
</script>