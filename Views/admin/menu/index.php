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
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Danh mục sản phẩm</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($menuInfos as $menu){
                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $menu['id_menu']; ?></td>
                                            <td align="center"><?php echo $menu['name_menu']; ?></td>
                                            <td align="center">
                                            <?php 
                                            $i=0;
                                            foreach($categoryInfos as $category){
                                                 if ($category['menu_id']==$menu['id_menu']){ 
                                                    echo $category['name_cate']; 
                                                    $i++;
                                                    if($i==3){echo'...';break;} 
                                                }
                                            }
                                            ?>
                                            </td>
                                            <td align="center"><?php echo $menu['created']; ?></td>
                                            <td align="center"><?php echo isset($menu['user_created'])?$menu['user_created']:'admin'; ?></td>
                                            <td align="center"><?php echo ($menu['flag']==0)?'Hiển thị':'Đã xóa'; ?></td>
                                            <td align="center"><a href="/menu/edit/<?php echo $menu['id_menu']; ?>"><img src="/lib/admin/images/edit.png" width="25"></a></td>
                                            <td align="center"><a href="/menu/delete/<?php echo $menu['id_menu']; ?>" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><img src="/lib/admin/images/delete.png" width="25"></a></td>
                                        </tr>
                                    <?php        
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">Id</th>
                                        <th style="text-align: center;">Tên</th>
                                        <th style="text-align: center;">Danh mục sản phẩm</th>
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
