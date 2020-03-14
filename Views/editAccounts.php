<section id="loginRegisUser">
    <div class="regisLogin container">
      <div class="session register">
         <div class="main-content">
            <div class="cs-flex">
               <div class="cs-col-12 cs-col-sm-12 cs-col-lg-6">
                  <h3 class="title-cm"> <span>Chỉnh sửa thông tin tài khoản</span> </h3>
                  <p style="line-height: 25px;">Lợi ích khi đăng ký tài khoản tại CODO SUPP: Đăng ký 1 lần và các lần tiếp theo đăng nhập <span style="color: #FF8C00; font-weight: bold;">đặt hàng cực nhanh</span></p>
                  <form id="form_register" action="/signup/postRegister" method="POST">
                     <label class="label-cm mt-10" for="">Họ &amp; Tên <span style="color:red">*</span></label> 
                     <input required="" class="input-cm" name="name_acco" autocomplete="off" type="text" placeholder="Nhập tên khách hàng" value="<?php echo $user['name_acco'] ?>" style="font-size: 15px;">
                                           <label class="label-cm mt-10" for="">Số điện thoại <span style="color:red">*</span></label>
                      <p style="font-size: 12px; color:red">Không thể thay đổi số điện thoại đăng nhập</p>
                      <input required="" class="input-cm" disabled name="phone" autocomplete="off" type="number" placeholder="Ví dụ: 123123132, nhập tại đây" value="<?php echo $user['phone'] ?>" style="font-size: 15px;"> <small class="show-error" id="phone"></small>
                                            <label class="label-cm mt-10" style="margin-bottom: 5px;">Mật khẩu <span style="color:red">*</span></label>
                     <input required="" class="input-cm" name="password" type="password" style="font-size: 15px;">
                                          <label class="label-cm mt-10" style="margin-bottom: 5px;">Địa chỉ nhận hàng <span style="color:red">*</span></label> 
                     <input required="" class="input-cm" value="<?php echo $user['address'] ?>" name="address" autocomplete="off" type="text" style="font-size: 15px;">
                                          <button class="button-cm mt-10 mt-20" style="font-size: 15px;">Lưu chỉnh sửa</button>


                    </form>

               </div>
            </div>
         </div>
      </div>
      <div class="session login" style="display:none">
         <div class="main-content">
            <div class="cs-flex">
               <div class="cs-col-12 cs-col-sm-12 cs-col-lg-6">
                  <h3 class="title-cm"> <span>Đăng nhập</span> </h3>
                  <p style="line-height: 25px;">Nếu bạn có một tài khoản, hãy đăng nhập bằng số diện thoại của bạn để được
                  <span style="color: #FF8C00; font-weight: bold;">đặt hàng cực nhanh</span></p>
                    
                     <form id="form_register" action="/signup/postLogin" method="POST">
                        <label class="label-cm mt-10" for="">Số điện thoại*</label> 
                        <input required="" class="input-cm" name="phone" autocomplete="off" type="number" style="font-size: 15px;">
                                                <label class="label-cm mt-10" style="margin-bottom: 5px;">Mật khẩu*</label> 
                        <input required="" class="input-cm" name="password" type="password" style="font-size: 15px;">
                                                <button class="button-cm mt-10 mt-20" style="font-size: 15px;">Đăng nhập</button>
                        <br><br> 
                        <a href="#" style=" padding: 3px 5px; display: block; with: 100%; text-align: center">Quên mật khẩu nhấn vào đây?</a> 
                     </form>
               </div>
            </div>
         </div>
      </div> 
      </div>  
</section>