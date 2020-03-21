<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <form id="validationform" data-parsley-validate="" novalidate="" method="GET" action="/product/seach" >
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-12">
                                    <select class="form-control" id="exampleFormControlSelect1" name="cate_id" >
                                    <?php if(!isset($cate_id1)){?> 
                                    <option value="0">Chọn danh mục sản phẩm </option>
                                    <?php }?>
                                    <?php if(isset($cate_id1)){?>
                                        <?php foreach($categoryInfos as $category){ ?>
                                         <?php if($cate_id1==$category['id_cate']){?>   
                                        <option value="<?php echo $category['id_cate'] ?>"> <?php echo $category['name_cate']; ?> </option>
                                    <?php }}} ?>
                                        <?php foreach($categoryInfos as $category){ ?>
                                         <?php if(isset($cate_id1)){ if($cate_id1!=$category['id_cate']){?>   
                                        <option value="<?php echo $category['id_cate'] ?>"> <?php echo $category['name_cate']; ?> </option>
                                    <?php }} else {?>
                                        <option value="<?php echo $category['id_cate'] ?>"> <?php echo $category['name_cate']; ?> </option>
                                    <?php }} ?>
                                    <?php if(isset($cate_id1)){?> 
                                    <option value="0">Chọn danh mục sản phẩm </option>
                                    <?php }?>
                                    </select>
                                </div>  
                                <div class="form-group col-md-5 col-sm-12">
                                    <select class="form-control" id="exampleFormControlSelect12" name="comp_id">
                                    <?php if(!isset($comp_id1)){?>
                                    <option value="0">Chọn hãng sản phẩm</option>
                                    <?php }?>
                                     <?php if(isset($comp_id1)){?>
                                        <?php foreach($companyInfos as $company){ ?>
                                         <?php if($comp_id1==$company['id_comp']){?>   
                                        <option value="<?php echo $company['id_comp'] ?>"> <?php echo $company['name_comp']; ?> </option>
                                    <?php }}} ?>
                                    <?php foreach($companyInfos as $company){ ?>
                                    <?php if(isset($comp_id1)){ if($comp_id1!=$company['id_comp']){?> 
                                   
                                        <option value="<?php echo $company['id_comp'] ?>"> <?php echo $company['name_comp']; ?> </option>
                                    <?php  }} else {?>
                                         <option value="<?php echo $company['id_comp'] ?>"> <?php echo $company['name_comp']; ?> </option>
                                     <?php }} ?>
                                     <?php if(isset($comp_id1)){?>
                                    <option value="0">Chọn hãng sản phẩm</option>
                                    <?php }?>   
                                    </select>
                                </div>
                                 
                                <div class='col-md-5'>
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker6" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker6" name="datetimepicker6" <?php if(isset($str3)) echo "value=$str3"?>/>
                                            <div class="input-group-append" data-target="#datetimepicker6" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-5'>
                                    <div class="form-group">
                                    <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker8" name="datetimepicker8" <?php if(isset($str4)) echo "value=$str4"?>/>
                                            <div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" id="filterBtnTime">
                                        <button type="submit" class="btn btn-primary"> Lọc </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                  </form>
                        
        </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- data table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Danh sách sản phẩm - Print, Excel, CSV, PDF </h5>
                        <!-- <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Giá</th>
                                        <th style="text-align: center;">HSX</th>
                                        <th style="text-align: center;">Ảnh</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody id="list-product">
                                    <?php 
                                        foreach($productInfos as $product){
                                    
                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $product['id_prod']; ?></td>
                                            <td ><?php echo $product['name_prod']; ?></td>
                                            <td align="center"><?php echo $product['price']; ?> VNĐ</td>

                                            <?php  foreach($companyInfos as $company){ if( $company['id_comp']== $product['comp_id']){ ?>
                                            <td align="center"><?php echo $company['name_comp']; ?></td>
                                            <?php } } ?>

                                            <td align="center"><img class="rounded" height="45" width="45" class="" src="<?php echo isset($product['image'])?'/uploads/products/'.$product['image']:'/uploads/noimage.jpg'; ?>"> </td>
                                            <td align="center"><?php echo $product['created']; ?></td>
                                            <td align="center"><?php echo ($product['user_created']!=0)?$product['user_created']:'admin'; ?></td>
                                            <td align="center"><?php echo ($product['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                            <td align="center"><a href="/product/edit/<?php echo $product['id_prod']; ?>"><img src="/lib/admin/images/edit.png" width="25"></a></td>
                                            <td align="center"><a href="/product/delete/<?php echo $product['id_prod']; ?>" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><img src="/lib/admin/images/delete.png" width="25"></a></td>
                                        </tr>
                                    <?php        
                                        }
                                       
                                    ?>
                                       
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Giá</th>
                                        <th style="text-align: center;">HSX</th>
                                        <th style="text-align: center;">Ảnh</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table  -->
            <!-- ============================================================== -->
        </div>

    </div>
    <style type="text/css">
        .bootstrap-datetimepicker-widget.dropdown-menu{
             width: max-content;
        }
    </style>
