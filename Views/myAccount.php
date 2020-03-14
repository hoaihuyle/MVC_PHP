<div class="session">
   <div class="main-content">
      <div class="cs-flex">
         <div class="cs-col-xs-12 cs-col-md-9">
            <h3 class="title-cm"> <span>Trang khách hàng</span> </h3>
            <div class="table-responsive">
               <table class="customers title-table m-0">
                  <tbody>
                     <tr class="ta-center">
                        <th>Mã</th>
                        <th>Ngày</th>
                        <th>Địa chỉ</th>
                        <th>Giá trị</th>
                        <th>Thanh toán</th>
                        <th>Trạng thái</th>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="cs-col-xs-12 cs-col-md-3" style="position:relative">
            <h3 class="title-cm"> <span>Tài khoản của tôi</span> </h3>
            <form class="upload-user" action="" enctype="multipart/form-data" method="post"> <img class="lazy" width="120" style="border-radius: 5px;" alt="Ảnh mặc định" title="Ảnh mặc định" src="/lib/front/upload/logo/user.jpg"> </form>
            <p> <strong> <?php echo $user['name_acco'] ?> </strong> </p>
            <p class="mb-10"> <i class="fas fa-phone"></i> Điện thoại: <?php echo $user['phone'] ?> </p>
            <p class="mb-10"> <i class="fas fa-home"></i> <?php echo $user['address'] ?> </p>
            <a href="/account/editMyUser" class="button-address pl-0 pr-0 mt-20" style="display:block">Chỉnh sửa</a> 
         </div>
      </div>
   </div>
</div>