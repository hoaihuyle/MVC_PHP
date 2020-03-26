<?php $num = 0; ?>
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
        <div class="card"> <?php if(isset($error)) echo $error;  ?>
          <div class="card-header">
            <h5 class="mb-0">Danh sách panel</h5>
            <!-- <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                  <tr>
                    <th style="text-align: center;">Ảnh</th>  
                    <th style="text-align: center;">Ảnh</th>
                    <th style="text-align: center;">Link liên kết</th>
                    <th style="text-align: center;">Trạng thái</th> 
                    <th style="text-align: center;">Chỉnh sửa</th> 
                    <th style="text-align: center;">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr <?php if(isset($listPanel)) : foreach($listPanel as $l): ?>>
                    <td style="text-align: center"><?php echo ++$num ?></td>
                    <td style="text-align: center"><img src="/uploads/panels/<?php echo $l['image'] ?>" height="45" width="45"  alt="<?php echo $l['link'] ?>"></td>
                    <td style="text-align: center"><?php echo $l['link'] ?></td>
                    <td style="text-align: center">
                        <?php if($l['status'] === '0'): ?>
                        <a class="btn btn-success btn-sm" href="/panel/status/<?php echo $l['id']; ?>">Đã hiển thị</a>
                        <?php else: ?>
                        <a class="btn btn-warning btn-success" href="/panel/status/<?php echo $l['id']; ?>">Không hiển thị</a>
                        <?php endif ?>
                    </td> 
                    <td style="text-align: center"><a href="/panel/edit/<?php echo $l['id']; ?>" class="btn btn-primary btn-sm"> Sửa </a></td>
                    <td style="text-align: center"><a href="/panel/delete/<?php echo $l['id']; ?>" class="btn btn-danger btn-sm">Xóa</a></td>
                  </tr <?php endforeach; endif ?>>
                </tbody>
                <tfoot>
                  <tr>
                    <th style="text-align: center;">Ảnh</th> 
                    <th style="text-align: center;">Ảnh</th>
                    <th style="text-align: center;">Link liên kết</th>
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