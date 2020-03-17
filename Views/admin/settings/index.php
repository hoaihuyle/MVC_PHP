<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <!-- ============================================================== -->
            <!-- data table rowgroup  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Tables - RowGroup extension </h5>
                        <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing the styling.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($settingInfos as $setting){
                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $setting['id_sett']; ?></td>
                                            <td align="center"><?php echo $setting['key_sett']; ?></td>
                                            <td align="center"><?php echo $setting['created']; ?></td>
                                            <td align="center"><?php echo isset($setting['user_created'])?$setting['user_created']:'admin'; ?></td>
                                            <td align="center"><?php echo ($setting['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                            <td align="center"><a href="/setting/edit/<?php echo $setting['id_sett']; ?>"><img src="/lib/admin/images/edit.png" width="25"></a></td>
                                            <td align="center"><a href="/setting/delete/<?php echo $setting['id_sett']; ?>" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><img src="/lib/admin/images/delete.png" width="25"></a></td>
                                        </tr>
                                    <?php        
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
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
            <!-- end data table rowgroup  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>
