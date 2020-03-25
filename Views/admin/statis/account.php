<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">

        <div class="row">
            <!-- ============================================================== -->
            <!-- data table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                        <!-- <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Người đặt hàng</th>
                                        <th style="text-align: center;">Số điện thoại</th>
                                        <th style="text-align: center;">Tổng giá</th>
                                        <th style="text-align: center;">Ngày đặt</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chi tiết đơn hàng</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($orderInfos as $orde){
                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $orde['id_orde']; ?></td>
                                            <td align="center"><?php echo $orde['name_acco']; ?></td>
                                            <td align="center"><?php echo $orde['phone']; ?></td>
                                            <td align="center"><?php echo number_format( $orde['total'], 0 ,'','.' ) ?>đ </td>
                                            <td align="center"><?php echo $orde['created']; ?></td>
                                            <td align="center"><?php echo ($orde['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                            <td align="center"><a href="/statis/product/<?php echo $orde['id_orde']; ?>"><img src="/lib/admin/images/edit.png" width="25"></a></td>
                                            <td align="center"><a href="/statis/delete/<?php echo $orde['id_orde']; ?>" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><img src="/lib/admin/images/delete.png" width="25"></a></td>
                                        </tr>
                                    <?php        
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Người đặt hàng</th>
                                        <th style="text-align: center;">Số điện thoại</th>
                                        <th style="text-align: center;">Tổng giá</th>
                                        <th style="text-align: center;">Ngày đặt</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chi tiết đơn hàng</th>
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
