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
                        <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Các danh mục sản phẩm</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($accountInfos as $account){
                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $account['name_comp']; ?></td>
                                            <td><?php echo 'Các danh mục sản phẩm'; ?></td>
                                            <td align="center"><?php echo $account['created']; ?></td>
                                            <td align="center"><?php echo isset($account['user_created'])?$account['user_created']:'admin'; ?></td>
                                            <td align="center"><?php echo ($account['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                            <td align="center"><a href="/account/edit/<?php echo $account['id_acco']; ?>"><img src="/lib/admin/images/edit.png" width="25"></a></td>
                                            <td align="center"><a href="/account/delete/<?php echo $account['id_acco']; ?>" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><img src="/lib/admin/images/delete.png" width="25"></a></td>
                                        </tr>
                                    <?php        
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Các danh mục sản phẩm</th>
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
