<section id="loginRegisUser">
    <div class="regisLogin container">
      <div class="session register">
         <div class="main-content">
            <div class="cs-flex">
               <div class="cs-col-12 cs-col-sm-12 cs-col-lg-6">
                  <h3 class="title-cm"> <span>Đăng ký tài khoản</span> </h3>
                  <p style="line-height: 25px;">Lợi ích khi đăng ký tài khoản tại CODO SUPP: Đăng ký 1 lần và các lần tiếp theo đăng nhập <span style="color: #FF8C00; font-weight: bold;">đặt hàng cực nhanh</span></p>
                  <form id="" action="/signup/postRegister" method="POST">
                     <label class="label-cm mt-10" for="">Họ & Tên <span style="color:red">*</span></label> 
                     <input required class="input-cm" name="name_acco" autocomplete="off" type="text" placeholder="Nhập tên khách hàng" value="<?php if(isset($val_name)) echo $val_name ?>" style="font-size: 15px;">
                     <?php if($_SERVER['REQUEST_URI'] != '/signup/postLogin'): if(isset($name_acco)): ?>
                     <p class="text-danger"><?php echo $name_acco;?></p>
                     <?php endif; endif?>
                     <label class="label-cm mt-10" for="">Email <span style="color:red">*</span></label> 
                     <input required class="input-cm" name="email" type="email" autocomplete="off" placeholder="Nhập địa chỉ email" value="<?php if(isset($val_email)) echo $val_email ?>" style="font-size: 15px;">
                     <?php if($_SERVER['REQUEST_URI'] != '/signup/postLogin'): if(isset($email)): ?>
                     <p class="text-danger"><?php echo $email;?></p>
                     <?php endif; endif?>
                      <label class="label-cm mt-10" for="">Số điện thoại <span style="color:red">*</span></label>
                      <p style="font-size: 12px;">Đúng 10 số, ko chứa khoảng trắng, ko ký tự lạ, ko chứa +84.</p>
                      <input required class="input-cm" name="phone" autocomplete="off" type="number" placeholder="Ví dụ: 123123132, nhập tại đây" value="<?php if(isset($val_phone)) echo $val_phone ?>" style="font-size: 15px;"> 

                      <?php if($_SERVER['REQUEST_URI'] != '/signup/postLogin'): if(isset($phone)): ?>
                          <p class="text-danger"><?php echo $phone;?></p>
                      <?php endif; endif?>
                      <label class="label-cm mt-10" style="margin-bottom: 5px;">Mật khẩu <span style="color:red">*</span></label>
                     <input required class="input-cm" name="password" type="password" style="font-size: 15px;">
                     <?php if($_SERVER['REQUEST_URI'] != '/signup/postLogin'): if(isset($password)): ?>
                     <p class="text-danger"><?php echo $password;?></p>
                     <?php endif; endif?>
                     <label class="label-cm mt-10" style="margin-bottom: 5px;">Địa chỉ nhận hàng <span style="color:red">*</span></label> 
                     <input required class="input-cm" name="address" autocomplete="off" type="text" value="<?php if(isset($val_address)) echo $val_address ?>" style="font-size: 15px;">
                     <?php if($_SERVER['REQUEST_URI'] != '/signup/postLogin'): if(isset($address)): ?>
                     <p class="text-danger"><?php echo $address;?></p>
                     <?php endif; endif ?>
                     <button class="button-cm mt-10 mt-20" style="font-size: 15px;">Đăng ký thành viên</button>


                    </form>

               </div>
            </div>
         </div>
      </div>
      <div class="session login" <?php if(isset($_SESSION['name_id'])): ?> style="display:none" <?php endif ?> >
         <div class="main-content">
            <div class="cs-flex">
               <div class="cs-col-12 cs-col-sm-12 cs-col-lg-6">
                  <h3 class="title-cm"> <span>Đăng nhập</span> </h3>
                  <p style="line-height: 25px;">Nếu bạn có một tài khoản, hãy đăng nhập bằng số diện thoại của bạn để được
                  <span style="color: #FF8C00; font-weight: bold;">đặt hàng cực nhanh</span></p>
                   <?php if($_SERVER['REQUEST_URI'] === '/signup/postLogin'): if(isset($errors)): ?>
                       <p class="text-danger"><?php echo $errors;?></p>
                   <?php endif; endif?> 
                     <form id="" action="/signup/postLogin" method="POST">
                        <label class="label-cm mt-10" for="">Số điện thoại*</label> 
                        <input required class="input-cm" name="phone" autocomplete="off" type="number" style="font-size: 15px;">
                        <?php if($_SERVER['REQUEST_URI'] === '/signup/postLogin'): if(isset($phone)): ?>
                           <p class="text-danger"><?php echo $phone;?></p>
                        <?php endif; endif?>
                        <label class="label-cm mt-10" style="margin-bottom: 5px;">Mật khẩu*</label> 
                        <input required class="input-cm" name="password" type="password" style="font-size: 15px;">
                        <?php if($_SERVER['REQUEST_URI'] === '/signup/postLogin'): if(isset($password)): ?>
                           <p class="text-danger"><?php echo $password;?></p>
                        <?php endif; endif?>
                        <button class="button-cm mt-10 mt-20" style="font-size: 15px;">Đăng nhập</button>
                        <br /><br /> 
                        <a href="#" style=" padding: 3px 5px; display: block; with: 100%; text-align: center">Quên mật khẩu nhấn vào đây?</a> 
                     </form>
               </div>
            </div>
         </div>
      </div> 
      </div> 
      <!-- <div class="session">
         <div class="main-content">
            <div class="title-nav"> <a href="javascript:;" class="hover-color">Sản phẩm bạn đã xem</a> </div>
            <div class="slider-magic cs-flex" numColumn=' [ {"num": 5, "width": 900}, {"num": 3, "width": 500}, {"num": 2, "width": 400}, {"num": 2, "width": 0} ]' isPager="false" classItems="product">
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="hydropure-semtex.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="Hydropure + Semtex " title="Hydropure + Semtex "> </a> <a href="hydropure-semtex.html" class="title">Hydropure + Semtex </a> 
                  <div class="star" total="5" point="0"></div>
                  <div class="price"> <span class="main">2.180.000đ</span> <span class="old">2.380.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="mammoth-multi-30-servings.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="Mammoth Multi 30 Servings" title="Mammoth Multi 30 Servings"> </a> <a href="mammoth-multi-30-servings.html" class="title">Mammoth Multi 30 Servings</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">500.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="aggro-1333.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="AGGRO 168 viên" title="AGGRO 168 viên"> </a> <a href="aggro-1333.html" class="title">AGGRO 168 viên</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">890.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="scivation-xtend-bcaa-90-servings-807.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="Scivation Xtend BCAA 90 servings" title="Scivation Xtend BCAA 90 servings"> </a> <a href="scivation-xtend-bcaa-90-servings-807.html" class="title">Scivation Xtend BCAA 90 servings</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">1.290.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="bpi-sports-best-bcaa-30-servings-846.html" class="image cs-flex flex-align-center flex-content-center"> <img src="front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="BPI Sports Best BCAA 30 Servings" title="BPI Sports Best BCAA 30 Servings"> </a> <a href="bpi-sports-best-bcaa-30-servings-846.html" class="title">BPI Sports Best BCAA 30 Servings</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">550.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="bpi-sports-best-bcaa-60-servings-1128.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="BPI Sports Best BCAA 60 Servings" title="BPI Sports Best BCAA 60 Servings"> </a> <a href="bpi-sports-best-bcaa-60-servings-1128.html" class="title">BPI Sports Best BCAA 60 Servings</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">790.000đ</span> <span class="old">850.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <div class="label-deal-product">-4%</div>
                  <div class="time-deal-product"time="382739"> <span><i class="far fa-clock"></i> <span class="display-time"></span></span> </div>
                  <a href="muscle-mass-gainer-470.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png"> </a> <a href="muscle-mass-gainer-470.html" class="title">Labrada Muscle Mass 12lbs 5.4Kg</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">1.490.000đ</span> <span class="old">1.550.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <a href="rule-1-r1-protein-673.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="Rule 1 Protein 5.3Lbs (2.2kg)" title="Rule 1 Protein 5.3Lbs (2.2kg)"> </a> <a href="rule-1-r1-protein-673.html" class="title">Rule 1 Protein 5.3Lbs (2.2kg)</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">1.390.000đ</span> <span class="old">1.650.000đ</span> </div>
               </div>
               <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                  <div class="label-deal-product">-4%</div>
                  <div class="time-deal-product"time="382739"> <span><i class="far fa-clock"></i> <span class="display-time"></span></span> </div>
                  <a href="whey-gold-standard-5lbs-2-27kg--57.html" class="image cs-flex flex-align-center flex-content-center"> <img src=" front/upload/product/catalog/hydropure___semtex_image_catalog_1575016372.png" alt="Whey Gold Standard 5Lbs (2.27KG)" title="Whey Gold Standard 5Lbs (2.27KG)"> </a> <a href="whey-gold-standard-5lbs-2-27kg--57.html" class="title">Whey Gold Standard 5Lbs (2.27KG)</a> 
                  <div class="star" total="5" point="5"></div>
                  <div class="price"> <span class="main">1.390.000đ</span> <span class="old">1.450.000đ</span> </div>
               </div>
               <script>if ($(window).width() <= 769) {$(".slider-child-catalog").remove();}
               </script> 
            </div>
         </div>
      </div>  -->
</section>
