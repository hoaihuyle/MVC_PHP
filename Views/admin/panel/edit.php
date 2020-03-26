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
          <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
            vestibulum mi. Morbi lobortis pulvinar quam.</p>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm panel</li>
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
          <form id="validationform" data-parsley-validate="" novalidate="" method="POST" enctype="multipart/form-data">

            <h5 class="card-header">Sửa panel</h5>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right ">Hình ảnh</label>
              <div class="col-12 col-sm-8 col-lg-6">
                <div class="input-file-container d-inline-block">
                  <input type="file" name="image">
                </div>
                <p class="file-return"></p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right ">Link đường dẫn bài viết</label>
              <div class="col-12 col-sm-8 col-lg-6">
                <input name="link" type="text" placeholder="Vui lòng dán link đường dẫn cho panel tại đây" value="<?php echo $panel['link'] ?>"
                  class="form-control text-primary">
              </div>
            </div>
        </div>

        <div class="form-group row text-right">
          <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
            <button type="submit" class="btn btn-space btn-primary">Tạo mới</button>
            <a href="/panel/panel" type="button" class="btn btn-space btn-secondary">Quay
              về</a>
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