<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->

<div class="dashboard-wrapper">
<div class="container-fluid  dashboard-content">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    
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
                                <th style="text-align: center;">Giá thật</th>
                                <th style="text-align: center;">Số lượng</th>
                                <th style="text-align: center;">Tổng cộng</th>
                                <th style="text-align: center;">HSX</th>
                                <th style="text-align: center;">Ảnh</th>
                                <th style="text-align: center;">Ngày tạo</th>
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
                                    <td align="center"><?php echo number_format( $product['realPrice'], 0 ,'','.' ) ?>đ </td>
                                    <td align="center"><?php echo number_format( $product['quality'], 0 ,'','.' ) ?></td>
                                    <td align="center"><?php echo number_format( $product['realPrice']*$product['quality'], 0 ,'','.' ) ?>đ </td>

                                    <?php  foreach($companyInfos as $company){ if( $company['id_comp']== $product['comp_id']){ ?>
                                    <td align="center"><?php echo $company['name_comp']; ?></td>
                                    <?php } } ?>

                                    <td align="center"><img class="rounded" height="45" width="45" class="" src="<?php echo isset($product['image'])?'/uploads/products/'.$product['image']:'/uploads/noimage.jpg'; ?>"> </td>
                                    <td align="center"><?php echo $product['created']; ?></td>
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
                                <th style="text-align: center;">Giá thật</th>
                                <th style="text-align: center;">Số lượng</th>
                                <th style="text-align: center;">Tổng cộng</th>
                                <th style="text-align: center;">HSX</th>
                                <th style="text-align: center;">Ảnh</th>
                                <th style="text-align: center;">Ngày tạo</th>
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
