<section id="loginRegisUser">
    <div class="regisLogin container">
      <div class="session register">
         <div class="main-content">
            <div class="cs-flex">
               <div class="cs-col-12 cs-col-sm-12 cs-col-lg-6">
                  <h3 class="title-cm"> <span>Chỉnh sửa thông tin tài khoản</span> </h3>
                  <p style="line-height: 25px;">Lợi ích khi đăng ký tài khoản tại CODO SUPP: Đăng ký 1 lần và các lần tiếp theo đăng nhập <span style="color: #FF8C00; font-weight: bold;">đặt hàng cực nhanh</span></p>
                  <div class="editUser" >
                    <div class="image_user"> 
                      <a href="#" style="display:block"><img class="lazy" style="width:200px; display: block; margin: 15px auto"  alt="Ảnh mặc định" title="Ảnh mặc định" src="/lib/front/upload/logo/user.jpg"></a>
                      <button class="btn btn-success" style="font-size: 15px;">Upload</button>
                        </br>
                      <span style="color: red"><?php if(isset($nofitication)) echo $nofitication ?></span>
                    </div>
                    <form id="form_register" action="/account/postEditUser" method="POST">
                     <label class="label-cm mt-10" for="">Họ &amp; Tên <span style="color:red">*</span></label> 
                     <input required="" class="input-cm" name="name_acco" autocomplete="off" type="text" placeholder="Nhập tên khách hàng" value="<?php echo $user['name_acco'] ?>" style="font-size: 15px;">
                     <label class="label-cm mt-10" for="">Email <span style="color:red">*</span></label> 
                     <input required="" class="input-cm" name="email" autocomplete="off" type="email" placeholder="Nhập địa chỉ email" value="<?php echo $user['email'] ?>" style="font-size: 15px;">
                     <span style="color: red"><?php if(isset($errEmail)) echo $errEmail ?></span>
                                           <label class="label-cm mt-10" for="">Số điện thoại <span style="color:red">*</span></label>
                      <p style="font-size: 12px; color:red">Không thể thay đổi số điện thoại đăng nhập</p>
                      <input required="" class="input-cm" disabled name="phone" autocomplete="off" type="number" placeholder="Ví dụ: 123123132, nhập tại đây" value="<?php echo $user['phone'] ?>" style="font-size: 15px;"> <small class="show-error" id="phone"></small>
                                            <label class="label-cm mt-10" style="margin-bottom: 5px;">Mật khẩu <span style="color:red">*</span></label>
                     <input class="input-cm" name="password" type="password" style="font-size: 15px;">
                                          <label class="label-cm mt-10" style="margin-bottom: 5px;">Địa chỉ nhận hàng <span style="color:red">*</span></label> 
                     <input required="" class="input-cm" value="<?php echo $user['address'] ?>" name="address" autocomplete="off" type="text" style="font-size: 15px;">
                                          <button class="button-cm mt-10 mt-20" style="font-size: 15px;">Lưu chỉnh sửa</button>


                    </form>
                  </div>
                  

               </div>
            </div>
         </div>
      </div> 
    </div>  
</section>
