      <div class="Slide_header">
        <div class="main-content  row" style="margin: 0 auto; height: 100%">
          <div class="col-sm-3">

            <div class="catalog-product" style="width: 100%">
              <h3 class="title-cm"> <span>DANH MỤC SẢN PHẨM</span> </h3>

              <div class="tree-view">
                <ul class="catalog mc-tree-view" style="display: block;">
                  <?php foreach($categoryInfos as $key => $cate): if($key < 10): ?>
                  <li class="mc-state-collapsed">
                    <a
                      href="/home/category?cate_id=<?php echo $cate['id_cate']?>&page=1"><?php echo $cate['name_cate'] ?></a>
                    <button class="mc-toggle"></button>
                  </li>
                  <?php endif; endforeach ?>
                </ul>
              </div>
            </div>



          </div>
          <div id="slide_banner" class="owl-carousel owl-theme col-sm-9 autoHeightClass" style="width: 100%; ">
            <div class="item" style="height: 450px; object-fit: cover; width: 900px">
              <img style="height: 100%; object-fit: cover; image-rendering: pixelated;"
                src="https://landing.cfyc.com.vn/storage/app/media/Referal/header%20website%20VN.jpg" alt="Hydropure"
                title="Hydropure">
            </div>
            <div class="item" style="height: 450px; object-fit: cover; width: 900px" ">
            <img  style=" height: 100%; object-fit: cover; image-rendering: pixelated;"
              src="https://landing.cfyc.com.vn/storage/app/media/Banner%20Califresh%202019/desktop%20copy.png"
              alt="Mass Fusion" title="Mass Fusion">
            </div>
            <div class="item" style="height: 450px; object-fit: cover; width: 900px">
              <img style="height: 100%; object-fit: cover; image-rendering: pixelated;"
                src="https://landing.cfyc.com.vn/storage/app/media/Referal/header%20website%20VN.jpg" alt="Up your mass"
                title="Up your mass">
            </div>
          </div>

        </div>
      </div>

      <!-- mobile -->
      <div id="main_banner" class="slider" style="display: none">
        <div class="slider-magic banner" numColumn='[{"num": 1, "width": 0}]' classItems="item" isControls="true"
          isPager="true">
          <a href="/home/product/1">
            <img class="item" src="https://landing.cfyc.com.vn/storage/app/media/Referal/header%20website%20VN.jpg"
              alt="Hydropure" title="Hydropure"></a>
          <a href="/home/product/1">
            <img class="item"
              src="https://landing.cfyc.com.vn/storage/app/media/Banner%20Califresh%202019/desktop%20copy.png"
              alt="Mass Fusion" title="Mass Fusion"></a>
          <a href="/home/product/1">
            <img class="item" src="https://landing.cfyc.com.vn/storage/app/media/Referal/header%20website%20VN.jpg"
              alt="Up your mass" title="Up your mass"></a>
          <a href="/lib/front/whey-gold-standard-5lbs-2-27kg--57">
            <img class="item" src="/lib/front/upload/banner/banner-web-2.jpg" alt="whey gold " title="whey gold "></a>
        </div>
      </div>


      <!-- end mobile -->



      <!-- end mobile -->
      <div class="marketing">
        <!-- <script>$('.slider-magic').bxSlider({ auto: true, autoHover: true, pause: 10000});</script>  -->
        <div class="main-content cs-flex">
          <div class="box-marketing cs-flex cs-col-lg-4 flex-align-center">
            <div class="image"> <img class="lazy" alt="Ship COD toàn quốc" title="Ship COD toàn quốc"
                src=" /lib/front/upload/service/srv_1.png" style=""> </div>
            <div class="about flex cs-flex flex-column"> <span class="title">Ship COD toàn quốc</span> <span
                class="description">Nhận hàng &amp; thanh toán tiền tại nhà</span> </div>
          </div>
          <div class="box-marketing cs-flex cs-col-lg-4 flex-align-center">
            <div class="image"> <img class="lazy" alt="Đội ngũ tư vấn chuyên sâu" title="Đội ngũ tư vấn chuyên sâu"
                src=" /lib/front/upload/service/srv_22.png" style=""> </div>
            <div class="about flex cs-flex flex-column"> <span class="title">Đội ngũ tư vấn chuyên sâu</span> <span
                class="description">Tư vấn 1 cách bài bản, khoa học nhất</span> </div>
          </div>
          <div class="box-marketing cs-flex cs-col-lg-4 flex-align-center">
            <div class="image"> <img class="lazy" alt="Đổi trả với bất kỳ lý do" title="Đổi trả với bất kỳ lý do"
                src=" /lib/front/upload/service/srv_32.png" style=""> </div>
            <div class="about flex cs-flex flex-column"> <span class="title">Đổi trả với bất kỳ lý do</span> <span
                class="description">Cho phép bạn đổi trả hàng trong 30 ngày</span> </div>
          </div>
        </div>

        <div class="session">
          <div class="main-content">
            <div class="title-nav"> <a href="/lib/front/#" class="hover-color">Sản phẩm xem nhiều</a> </div>
            <div class="cs-flex" classItems="product">
              <?php if(isset($sp_views)): foreach($sp_views as $sp): ?>
              <div class="product slider-home cs-col-6 cs-col-xs-6 cs-col-md-3">
                <?php if($sp['discount'] > 0): ?> <div class="label-deal-product">-<?php echo $sp['discount'] ?>%</div>
                <?php endif ?>
                <a class="image cs-flex flex-align-center flex-content-center">
                  <div class="pane-tool-button cs-flex">
                    <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $sp['id_prod'] ?>">Xem
                      chi tiết</button>
                    <button class="add-cart" value="<?php echo $sp['id_prod'] ?>"">
                        <i class=" fas fa-shopping-cart " ></i>
                     </button>
                  </div>
                     <img class=" lazy" data-src="/uploads/products/<?php echo $sp['image'] ?>"
                      alt="<?php echo $sp['name_prod'] ?>" title="<?php echo $sp['name_prod'] ?>">
                </a>
                <a href="/home/product/<?php echo $sp['id_prod'] ?>" class="title"><?php echo $sp['name_prod'] ?></a>
                <span
                  style="font-size: 13px; margin-bottom: 5px; display: inline-block; line-height: 20px; color: #7B7B7B;"><?php echo $sp['uses_prod'] ?></span>
                <div class="star" total="5" point="5"></div>
                <?php if($sp['discount'] != 0): ?>
                <span class="price" price="<?php echo $sp[0]['price'] ?>">
                  <span class="main"
                    content="<?php echo number_format( ((100 - $sp['discount']) * $sp['price'])/100 , 0 ,'','.' )?>">
                    <?php echo number_format( ((100 - $sp['discount']) * $sp['price'])/100 , 0 ,'','.' )?>
                  </span>
                  <span class="main" content="VND"> đ</span>
                  <span class="old"> - <?php echo number_format($sp['price'],0,'','.') ?> đ</span>
                </span>
                <?php else: ?>
                <div class="price"> <span class="main"><?php echo number_format($sp['price'],0,'','.') ?>đ</span> </div>
                <?php endif ?>
              </div>
              <?php endforeach; endif; ?>

            </div>
          </div>
        </div>
        <div class="session" style="margin-bottom: 30px;">
          <div class="main-content ads">
            <div class="cs-flex">
              <div class="cs-col-sm-6 mb-10 image-ads-left"> <a href="/home/product/1" class="animation-image"><img
                    class="img-responsive lazy"
                    data-src="https://www.thol.com.vn/pub/media/wysiwyg/banner/10_-_2_Biovite.jpg"
                    alt="Top các loại sữa tăng cân" title="Top các loại sữa tăng cân"></a> </div>
              <div href="front/c152/whey-protein-tang-co" class="cs-col-sm-6 mb-10 image-ads-right"> <a
                  href="/lib/front/c152/whey-protein-tang-co" class="animation-image"><img class="img-responsive lazy"
                    data-src="https://www.thol.com.vn/pub/media/wysiwyg/banner/eea_lipo6_blck.jpg"
                    alt="Top các loại whey protein" title="Top các loại whey protein"></a> </div>
            </div>
          </div>
        </div>
        <?php if(isset($prod_cate)): foreach($prod_cate as $pc): if($pc['cate'] != null): ?>
        <div class="session">
          <div class="main-content">
            <div class="title-nav"> <a href="/home/product/1" class="hover-color"><?php echo $pc['name_cate']; ?></a>
            </div>
            <div class="cs-flex" classItems="product">
              <?php if($pc['cate'] != null): foreach($pc['cate'] as $p): ?>

              <div class="product slider-home cs-col-6 cs-col-xs-6 cs-col-md-3">
                <?php if($p['discount'] > 0) : ?><div class="label-deal-product">-<?php echo $p['discount'] ?>%</div>
                <?php endif ?>
                <a class="image cs-flex flex-align-center flex-content-center">
                  <div class="pane-tool-button cs-flex">
                    <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $p['id_prod'] ?>">Xem
                      chi tiết</button>
                    <button class=" add-cart" value="<?php echo $p['id_prod'] ?>">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <img class="lazy" data-src="/uploads/products/<?php echo $p['image'] ?>"
                    alt="<?php echo $p['name_prod'] ?>" title="<?php echo $p['name_prod'] ?>">
                </a>
                <a href="/home/product/1" class="title"><?php echo $p['name_prod'] ?></a> <span
                  style="font-size: 13px; margin-bottom: 5px; display: inline-block; line-height: 20px; color: #7B7B7B;"><?php echo $p['uses_prod'] ?></span>
                <div class="star" total="5" point="5"></div>
                <?php if($p['discount'] != 0): ?>
                <span class="price" price="<?php echo $p[0]['price'] ?>">
                  <span class="main"
                    content="<?php echo number_format( ((100 - $p['discount']) * $p['price'])/100 , 0 ,'','.' )?>">
                    <?php echo number_format( ((100 - $p['discount']) * $p['price'])/100 , 0 ,'','.' )?>
                  </span>
                  <span class="main" content="VND"> đ</span>
                  <span class="old"> - <?php echo number_format($p['price'],0,'','.') ?> đ</span>
                </span>
                <?php else: ?>
                <div class="price"> <span class="main"><?php echo number_format($p['price'],0,'','.') ?>đ</span> </div>
                <?php endif ?>
              </div>
              <?php  endforeach; endif ?>
            </div>
          </div>
        </div>
        <?php endif; endforeach; endif ?>
        <div class="session">
          <div class="main-content ads">
            <div class="cs-col-12 image-ads"> <a href="#" class="animation-image"> <img class="img-responsive lazy"
                  data-src="https://www.thol.com.vn/pub/media/wysiwyg/home/home-bottom-banner-wide.jpg"
                  alt="Fanpage lượng like khủng nhất" title="Fanpage lượng like khủng nhất"> </a> </div>
          </div>
        </div>

        <!-- combo sản phẩm -->
        <div class="session">
          <div class="main-content">
            <div class="title-nav"> <a class="hover-color">COMBO KHUYẾN MÃI</a> </div>
            <div id="combokuyenmai" class="owl-carousel owl-theme ">
              <?php if(isset($splienquan)): foreach($splienquan as $ls): ?>
              <div class="item product slider-product ">
                <?php if($ls['discount'] > 0) : ?><div class="label-deal-product">-<?php echo $ls['discount'] ?>%</div>
                <?php endif ?>
                <a class="image cs-flex flex-align-center flex-content-center">
                  <div class="pane-tool-button cs-flex">
                    <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $ls['id_prod'] ?>">Xem
                      chi
                      tiết</button>
                    <button class="add-cart" value="<?php echo $ls['id_prod'] ?>">
                      <i class="fas fa-shopping-cart "></i>
                    </button>
                  </div>
                  <img class="lazy" style="max-width: 200px" data-src="/uploads/products/<?php echo $ls['image'] ?>"
                    alt="<?php echo $ls['name_prod'] ?>" title="<?php echo $ls['name_prod'] ?>">
                </a> <a href="/home/product/<?php echo $ls['id_prod'] ?>"
                  class="title"><?php echo $ls['name_prod'] ?></a>
                <div class="star" total="5" point="5"></div>
                <?php if($ls['discount'] != 0): ?>
                <span class="price" price="<?php echo $ls[0]['price'] ?>">
                  <span class="main"
                    content="<?php echo number_format( ((100 - $ls['discount']) * $ls['price'])/100 , 0 ,'','.' )?>">
                    <?php echo number_format( ((100 - $ls['discount']) * $ls['price'])/100 , 0 ,'','.' )?>
                  </span>
                  <span class="main" content="VND"> đ</span>
                  <span class="old"> - <?php echo number_format($ls['price'],0,'','.') ?> đ</span>
                </span>
                <?php else: ?>
                <div class="price"> <span class="main"><?php echo number_format($ls['price'],0,'','.') ?>đ</span> </div>
                <?php endif ?>

              </div>
              <?php endforeach; endif; ?>
            </div>

          </div>
        </div>



        <div id="thuonghieu" class="session" style="margin-bottom: 15px;">
          <div class="main-content">
            <div class="title-nav"> <a href="/lib/front/javascript:;" class="hover-color">Thương Hiệu</a> </div>
            <div class="cs-flex p-10 flex-content-center">
              <div id="thuonghieuCal" class="owl-carousel">
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src="https://www.thol.com.vn/media/magentothem/brandslider/nutrex.jpg" width="150"
                      alt="Optimum Nutrition" title="Optimum Nutrition"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src="https://www.thol.com.vn/media/magentothem/brandslider/thol-135.jpg" width="150"
                      alt="Muscletech" title="Muscletech"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src="https://www.thol.com.vn/media/magentothem/brandslider/LABRADA.jpg" width="150"
                      alt="AST Sports" title="AST Sports"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src="https://www.thol.com.vn/media/magentothem/brandslider/rsplogo.jpg" width="150"
                      alt="Dymatize" title="Dymatize"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src="https://www.thol.com.vn/media/magentothem/brandslider/nutrex.jpg" width="150"
                      alt="Labrada" title="Labrada"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src=" https://www.thol.com.vn/pub/media/wysiwyg/brand/evogen_1.jpg" width="150"
                      alt="Go Nutrition" title="Go Nutrition"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src=" https://www.thol.com.vn/media/magentothem/brandslider/san.jpg" width="150"
                      alt="MusclePharm" title="MusclePharm"> </a> </div>
                <div class="label" style="margin: 5px"> <a href="/"> <img class="grayscale lazy"
                      data-src=" https://www.thol.com.vn/media/magentothem/brandslider/SciVation222.jpg" width="150"
                      alt="AllMax" title="AllMax"> </a> </div>
              </div>
            </div>
          </div>