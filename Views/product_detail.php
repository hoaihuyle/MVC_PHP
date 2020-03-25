<section id="detail">

  <form id="submit-product" action="" method="post">
    <div class="session microdata" itemtype="">
      <div class="main-content">
        <div class="cs-flex">
          <div class="cs-flex cs-col-lg-9 cs-wrap product-detail-left">
            <div class="cs-col-lg-5 left-child">
              <div class="show-image"> <img id="img_01" class="lazy"
                  src="/uploads/products/<?php echo $prod[0]['image'] ?>" title="<?php echo $prod[0]['name_prod'] ?>"
                  alt="<?php echo $prod[0]['name_prod'] ?>"> </div>
              <div class="cs-flex flex-content-center inline" style="margin-top: 10px;"> <span
                  style="font-size: 13px;">Like hoặc Share nếu bạn thích sp này</span> </div>
              <div class="cs-flex flex-content-center inline" style="margin: 5px 0 0 0;">
                <div class="cs-flex mb-10">
                  <div class="fb-like" data-href="bcaa-312-30-servings.html" data-layout="button" data-action="like"
                    data-size="small" data-show-faces="true" data-share="true"> </div>
                </div>
              </div>
              <div class="cs-flex flex-content-center"
                style="border-top: 1px #CCC solid; text-align: justify; line-height: 25px; margin-top: 10px; margin-bottom: 20px; padding-top: 10px;">
                <i itemprop="description"> <?php echo $prod[0]['uses_prod'] ?> </i> </div>
            </div>
            <div class="cs-col-lg-7 mb-20 right-child">
              <div class="title-cm mt-0 font-s-20">
                <h1 style="font-size: 20px; margin: 0; padding: 0;"><span class="product-name" itemprop="name"
                    id="product_name_r"><?php echo $prod[0]['name_prod'] ?></span></h1>
              </div>
              <div class="mt-10 cs-flex" style="width: 100%;">
                <div style="line-height: 28px;">
                  <div style="float: left; margin-right: 10px;"> Thương hiệu: <a
                      href="/home/category?cate_id=<?php echo $CateName['id_cate'] ?>&page=1"> <span class="pl-5 pr-5"
                        itemprop="author"
                        style="background: #E46D38;color: #FFF;border-radius: 5px; padding-bottom: 2px;">
                        <?php echo $CateName['name_cate'] ?></span></a> </div>
                  <div style="float: left;"> <span> Tình trạng:</span>
                    <?php if($prod[0]['flag'] == 0) : ?>
                    <span class="status-display" status="0">
                      <span style="color: green; font-weight: 600">Đang kinh doanh</span>
                    </span>
                    <?php else: ?>
                    <span class="status-display" status="0">
                      <span style="color: Green; font-weight: 600">Ngừng kinh doanh</span>
                    </span>
                    <?php endif ?>
                  </div>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="mt-5" id="static_rating" itemprop="aggregateRating" itemscope=""
                itemtype="http://schema.org/AggregateRating"> <span class="star mt-10" total="5" point="5"></span> <span
                  class="color-red" itemprop="ratingValue">5</span> trên <span itemprop="bestRating">5</span> <span> (<a
                    href="#comment_form"><span itemprop="ratingCount">1</span> đánh giá)</a> </span> </div>
              <div style="color: #7E7474; font-size: 13px; margin-top: 6px;">Đã có 2,787 lượt xem sp này</div>
              <div class="title-cm mt-10 cm-red">
                <span color: #505350>Giá sản phẩm:</span>
                <?php if($prod[0]['discount'] != 0) :?>
                <span class="cm-red font-s-25 product-price" itemprop="offers" itemscope
                  itemtype="http://schema.org/Offer" price="<?php echo $prod[0]['price'] ?>">
                  <span itemprop="price" class="cm-red"
                    content="<?php echo number_format( ((100 - $prod[0]['discount']) * $prod[0]['price'])/100 , 0 ,'','.' ) ?>">
                    <?php echo number_format( ((100 - $prod[0]['discount']) * $prod[0]['price'])/100 , 0 ,'','.' ) ?></span><span
                    itemprop="priceCurrency" class="cm-red" content="VND"> VND</span>
                  <div class="price"><span color: #505350> Giá giảm: </span><span class="old">-
                      <?php echo number_format($prod[0]['price'],0,'','.') ?> VND</span></div>
                  <meta itemprop="price"
                    content="<?php echo number_format((100 - $prod[0]['disocunt'] * $prod[0]['price'])/100, 0 ,'','.' ) ?>">
                  <meta itemprop="priceCurrency" content="VND">
                </span>
                <?php else: ?>
                <span class="cm-red font-s-25 product-price" itemprop="offers" itemscope
                  itemtype="http://schema.org/Offer" price="<?php echo $prod[0]['price'] ?>">
                  <span itemprop="price" class="cm-red"
                    content="<?php echo number_format( $prod[0]['price'] , 0 ,'','.' ) ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?></span><span
                    itemprop="priceCurrency" class="cm-red" content="VND"> VND</span>
                  <meta itemprop="price" content="<?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>">
                  <meta itemprop="priceCurrency" content="VND">
                  <?php endif ?>
              </div>
              <!--Liệt kê các sản phẩm có trong combo tại đây (nếu có)-->
              <!--Cho trọng lượng vào đây-->
              <div id="mobile_addtocart"></div>
              <div style="margin-top: 10px; line-height: 25px;">
                <ul>
                  <li style="list-style: disclosure-open inside;"><?php echo $prod[0]['uses_prod'] ?></li>
                </ul>
              </div>
              <script>
              function showStore() {
                $("#explode_store").toggle();
              }
              </script>
              <p style="margin: 10px 0 0 0; padding: 0 0 10px 0; color: #505350; border-bottom: 1px #CCC dotted; font-weight: bold; cursor: pointer;"
                onClick="showStore()">Danh sách cửa hàng</p>
              <div id="explode_store">
                <div id="list_store" style="margin-top: 8px; padding: 0">
                  <table>
                    <tr>
                      <td>Địa chỉ: 114 Minh Mạng, Phường Thủy Xuân, TP Huế</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="cs-flex">
                <div class="square-radio cs-flex">
                  <p style="width: 100%;" class="properties_info">Hương vị: <span class="color-teal">Chọn bên dưới( Nếu
                      có)</span></p>

                  <?php if(isset($set)): foreach($set as $s): ?>
                  <?php if($s['sett_key'] === 'taste_iso'): ?>
                  <input class="radio-input" type="radio" name="p_2" id="<?php echo $s['id_sett'] ?>"
                    value="<?php echo $s['id_sett'] ?>" namepro="Hương vị: <?php echo $s['key_display'] ?>">
                  <label id="<?php echo $s['id_sett'] ?>" class="radio-label inventory"
                    for="<?php echo $s['id_sett'] ?>"
                    text="<?php echo $s['key_display'] ?>"><?php echo $s['key_display'] ?></label>
                  <?php endif; ?>
                  <?php endforeach; endif?>
                </div>
              </div>
              <div id="temp_mobile_addtocart" style="display: none;">
                <div id="ismobile">
                  <div class="action-cart-product" style="margin-bottom: 10px; text-align: left;">
                    <table>
                      <tr>
                        <td><img class="lazy"
                            data-src="/lib/front/upload/product/catalog/scivation_xtend_bcaa_90_servings_image_catalog_1582015416.jpg"
                            width="100" /></td>
                        <td>Cam kết hàng chất lượng 100%, phát hiện hàng giả đền 100 lần, giá rẻ nhất VN, ship toàn quốc
                          nhanh nhất, thanh toán tại nhà, đặt hàng siêu nhanh chỉ mất 20 giây</td>
                      </tr>
                    </table>
                  </div>
                  <!--Liệt kê thuộc tính sản phẩm tại đây-->
                  <!-- <select id="choice_properties1" onchange="ChoiceProperties1(event)" style="padding: 8px 5px; font-size: 14px; margin-bottom: 10px;">
                                        <option>=> Xin mời chọn Hương vị</option> 
                                        <?php 
                                        // if(isset($set)): foreach($set as $s): 
                                        ?>
                                            <?php 
                                            // if($s['sett_key'] === 'taste_iso'): 
                                            ?>
                                                <option value="#<?php
                                                //  echo $s['id_sett'] ?>"><?php 
                                                // echo $s['key_display'] 
                                                 ?></option> 
                                            <?php 
                                            // endif 
                                            ?>
                                        <?php 
                                    // endforeach; 
                                    // endif
                                    ?>
                                    </select>  -->


                  <div class="cs-flex mt-10 action-cart-product" style="margin-bottom: 10px;"> <a href="/home/cart"
                      class="button-cm mt-5 not-disable add-cart" value="<?php echo $prod[0]['id_prod'] ?>"
                      style="text-align:center;border-radius: 5px; background: #39b17f; border: 1px #39b17f solid;">
                      <span style="text-transform: uppercase; color: #FFF; font-size: 18px;">Mua ngay</span><br /><span
                        style="font-size: 12px; font-weight: normal; color: #FFF;">Giao hàng thanh toán tại
                        nhà</span></a> </div>

                  <div style="background: #e87c29; text-align: center; border-radius: 5px; margin-top: 10px;">
                    <p style="padding: 10px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-gift"
                        style="color: #FFF;"></i> <span style="color: #FFF; cursor: pointer; line-height: 22px;">GIÁO ÁN
                        TẬP GYM </span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">được TẶNG
                        kèm khi mua sp này</span></p>
                  </div>
                  <div class="cart_bottom action-cart-product" id="ismobile"
                    style="position: fixed; z-index: 999999; bottom: 13px; left: 100px;"> <button
                      class="not-disable add-cart"
                      style="color: #FFF; font-size: 15px; font-weight: bold; border-radius: 2px; background: #fd6e1d; padding: 11px 8px; border: none;">Đặt
                      hàng ngay</button> </div>
                </div>
                <div class="title-line"></div>
              </div>
              <div class="cs-flex mt-10" id="detailPrice" style="height:40px"> <input class="spinner input-spin" name="quantity"
                  value="1">
                <!-- <button type="button"  class="redirect-login" url="dang-nhap"><i class="far fa-heart"></i></button>  -->
              </div>
              <input type="hidden" class="id_price" value="<?php echo ($prod[0]['price']-$prod[0]['price']*$prod[0]['discount']/100); ?>">
              <?php if($prod[0]['discount'] != 0): ?>
              <span style="color:#505350; font-size: 24px">Tổng giá: </span> <span
                class="cm-red font-s-25 product-price" style="margin-top: 13px; display: inline-block"
                price="<?php echo number_format( ((100 - $prod[0]['discount']) * $prod[0]['price'])/100 , 0 ,'','.' )?>"><?php echo number_format( ((100 - $prod[0]['discount']) * $prod[0]['price'])/100 , 0 ,'','.'  ) ?>
                VND </span>
              <?php else: ?>
              <span style="color:#505350; font-size: 24px">Tổng giá: </span> <span
                class="cm-red font-s-25 product-price" style="margin-top: 13px; display: inline-block"
                price="<?php echo $prod[0]['price'] ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?> VND
              </span>
              <?php endif ?>
              <div class="cs-flex mt-10 action-cart-product"> <a class="button-cm mt-5 not-disable add-cart"
                  value="<?php echo $prod[0]['id_prod'] ?>" style="text-align: center"> <span
                    style="text-transform: uppercase; color: #FFF; font-size: 18px;">Thêm vào giỏ hàng</span><br /><span
                    style="font-size: 12px; padding-top: 6px; font-weight: normal; color: #FFF;">Cam kết hàng chính
                    hãng, thật 100%</span></a> </div>
              <div class="contact-phone">
                <div style="background: #288AD6; text-align: center; margin-top: 10px; padding: 5px;">
                  <a target="_blank" href="https://zalo.me/0779417827" style="color: #FFF;">
                    <p style="padding: 5px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-comment"
                        style="color: #FFF;"></i> Chat Zalo với CODO SUPP</p>
                  </a>
                </div>
                <div style="background: #288AD6; text-align: center; margin-top: 10px; padding: 5px;">
                  <a target="_blank" href="http://m.me/codosupp" target="_blank" style="color: #FFF;">
                    <p style="padding: 5px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-comment"
                        style="color: #FFF;"></i> Nhắn tin Messenger với chúng tôi</p>
                  </a>
                </div>
              </div>
              <p style="padding: 0; margin: 15px 0 5px 0;"><i class="fa fa-phone"
                  style="background: #62686e; color: #FFF; border-radius: 10px; padding: 5px; font-size: 10px;"></i>
                Hotline Huế, toàn quốc: <a href="tel:0779417827"
                  style="color: #6c6865; font-weight: 550;">077.941.7827</a></p>
            </div>
            <div style="border-top: 1px #ada9a9 solid; padding-top: 20px; margin-top: 10px;">Xin quý khách lưu ý: Hình
              ảnh và <?php echo $prod[0]['name_prod'] ?> chỉ mang tính chất tham khảo bởi thành phần, mẫu mã nhà sản
              xuất có thể thay đổi bất cứ lúc nào. Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc
              chữa bệnh.</div>
            <!-- One Tab -->
            <div class="cs-col-12 tab-box tabs p-0 mt-20 mb-20">
              <ul class="tab-header cs-flex">
                <li class="nav-tab"> <a href="#fragment-1">Thông tin sản phẩm</a> </li>
              </ul>
              <div class="tab-content" style="padding-bottom: 0;">
                <div id="fragment-1">
                  <div class="properties-detail">
                    <table>
                      <tr>
                        <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Trọng
                          lượng</th>
                        <td style="border-right: none;">
                          <ul>
                            <li>225g</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Hương vị
                        </th>
                        <td style="border-right: none;">
                          <ul>
                            <?php if(isset($set)): foreach($set as $s): ?>
                            <?php if($s['sett_key'] === 'taste_iso'): ?>
                            <li><?php echo $s['key_display'] ?></li>
                            <?php endif ?>
                            <?php endforeach; endif?>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Xuất xứ
                        </th>
                        <td style="border-right: none;">
                          <ul>
                            <?php if(isset($set)): foreach($set as $s): ?>
                            <?php if($s['sett_key'] === 'trademark'): ?>
                            <li><?php echo $s['key_display'] ?></li>
                            <?php endif ?>
                            <?php endforeach; endif?>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="detail_content">
                    <?php echo $prod[0]['description'] ?>
                  </div>
                </div>
              </div>
              <!-- End One Tab -->
            </div>
            <div style="margin-bottom: 20px;"><span itemprop="keywords">Keywords:
                <?php echo $prod[0]['name_prod'] ?></span></div>
            <div class="cs-flex cs-col-12 p-0 buy-product-last">
              <div class="cs-col-12 cs-col-md-2" style="margin-bottom: 10px; padding-top: 10px;"> <img id="img_01"
                  itemprop="image" class="lazy" src="/uploads/products/<?php echo $prod[0]['image'] ?>"
                  style="max-width: 110px; max-height: 110px;" title="<?php echo $prod[0]['name_prod'] ?>"
                  alt="<?php echo $prod[0]['name_prod'] ?>"> </div>
              <div class="cs-col-12 cs-col-md-5" style="margin-bottom: 10px; padding-top: 10px;">
                <b>
                  <p class="mb-0 font-s-15"><?php echo $prod[0]['name_prod'] ?></p>
                </b>
                <div class="mt-5"> <span class="star mt-10" total="5" point="5"></span> </div>
                <b><span class="cm-red font-s-20 product-price"
                    price="<?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>
                    VND </span></b>
              </div>
              <div class="cs-col-12 cs-col-md-5 panel-btn action-cart-product"
                style="margin-bottom: 10px; padding-top: 10px;"> <button value="<?php echo $prod[0]['id_prod'] ?>"
                  class="button-cm mr-10 mt-5 not-disable add-cart" style="font-size: 14px;" "> Mua sản phẩm này</button> </div>
                        </div>
                    </div>
                    <div class=" cs-col-lg-3 cs-wrap product-detail-right">
                  <div id="notmobile">
                    <div class="action-cart-product" style="margin-bottom: 10px; text-align: center;">
                      <p style="padding: 0; margin: 0;"><img class="lazy"
                          data-src="/lib/front/upload/product/catalog/true_gain_12lbs___best_bcaa_30_servings_image_catalog_1583306553.jpg"
                          width="100" /></p>
                      <p style="padding: 0; margin: 0;">Cam kết hàng chất lượng 100%, phát hiện hàng giả đền 100 lần,
                        giá tốt nhất, ship toàn quốc nhanh nhất, đặt hàng siêu nhanh chỉ mất 20 giây</p>
                    </div>
                    <!--Liệt kê thuộc tính sản phẩm tại đây-->
                    <!-- <select id="choice_properties2" onchange="ChoiceProperties2(event)" style="padding: 8px 5px; font-size: 14px; margin-bottom: 10px;">
                                <option> => Xin mời chọn Hương vị <= </option>
                                <?php 
                                // if(isset($set)): foreach($set as $s): 
                                ?>
                                    <?php 
                                    // if($s['sett_key'] === 'taste_iso'): 
                                    ?>
                                        <option value="#<?php 
                                        // echo $s['id_sett'] ?>"><?php
                                        //  echo $s['key_display'] 
                                        ?></option> 
                                    <?php 
                                    // endif 
                                    ?>
                                <?php
                            //  endforeach; 
                            //  endif
                             ?>
                            </select> -->

                    <!--Liệt kê quà tặng tại đây-->
                    <div class="cs-flex mt-10 action-cart-product" style="margin-bottom: 10px;"> <a href="/home/cart"
                        class="button-cm mt-5 not-disable add-cart" value="<?php echo $prod[0]['id_prod'] ?>"
                        style="border-radius: 5px; background: #288ad6; border: 1px #0099b2 solid; text-align: center">
                        <span style="text-transform: uppercase; color: #FFF; font-size: 18px;">Mua
                          ngay</span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">Giao hàng
                          thanh toán tại nhà</span></a> </div>

                    <div style="background: #e87c29; text-align: center; border-radius: 5px; margin-top: 10px;">
                      <p style="padding: 10px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-gift"
                          style="color: #FFF;"></i> <span style="color: #FFF; cursor: pointer; line-height: 22px;">GIÁO
                          ÁN TẬP GYM </span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">được
                          TẶNG kèm khi mua sp này</span></p>
                    </div>
                  </div>
                  <div class="cs-flex">
                    <!-- List View. -->
                    <div class="list-view">
                      <div class="item cs-flex" style="padding-bottom: 15px;">
                        <div class="image"
                          style="background: url(/lib/front/upload/service/shiper1.png) no-repeat center"> </div>
                        <div class="about">
                          <h3 class="title">Giao hàng toàn quốc</h3>
                          <span class="description">Nhận hàng & thanh toán tiền tại nhà, ship hàng siêu nhanh</span>
                        </div>
                      </div>
                      <div class="item cs-flex" style="padding-bottom: 15px;">
                        <div class="image"
                          style="background: url(/lib/front/upload/service/change1.png) no-repeat center"> </div>
                        <div class="about">
                          <h3 class="title">Đổi trả nhanh gọn</h3>
                          <span class="description">Đổi trả hàng trong vòng 30 ngày, chấp nhận bất kỳ lý do</span>
                        </div>
                      </div>
                      <div class="item cs-flex" style="padding-bottom: 15px;">
                        <div class="image"
                          style="background: url(/lib/front/upload/service/phone.png) no-repeat center"> </div>
                        <div class="about">
                          <h3 class="title">Tư vấn nhiệt tình</h3>
                          <span class="description">Đội ngũ chuyên viên tư vấn có kiến thức chuẩn và body đẹp</span>
                        </div>
                      </div>
                      <div class="item cs-flex" style="padding-bottom: 15px;">
                        <div class="image"
                          style="background: url(/lib/front/upload/service/gift-icon.png) no-repeat center"> </div>
                        <div class="about">
                          <h3 class="title">Giá tốt kèm quà tặng</h3>
                          <span class="description">Nhiều chương trình giảm giá, tặng quà cực giá trị</span>
                        </div>
                      </div>
                    </div>
                    <!-- End List View -->
                  </div> 
                  <?php if(isset($prod['image_certifi'])): ?>
                    <div class="nutrition_facts">
                      <p><b style="color: teal;">BẢNG THÀNH PHẦN</b></p>
                      <div class="content-nutrition-facts" style="margin-top: -7px;"><a
                          href="/uploads/products/<?php echo $prod['image_certifi']; ?>"
                          target="_blank"><img width="100%"
                            src="/uploads/products/<?php echo $prod['image_certifi']; ?>" /></a>
                      </div>
                      <p style="text-align: center; padding: 5px; margin: 0; background: #d0d0d0;"><a
                          href="/uploads/products/<?php echo $prod['image_certifi'] ?>"
                          target="_blank">Zoom to hơn</a></p>
                    </div>
                  <?php endif; ?>
                  <div id="product_interest">
                    <h3 class="title-cm mt-20 mb-20">
                      <span>Sản phẩm giảm giá</span>
                      <div class="title-line"></div>
                    </h3>
                    <?php if(isset($prod_discount)): foreach($prod_discount as $ls): ?>
                    <div class=" item product slider-product box-product-mini index mb-20">

                      <?php if($ls['discount'] > 0) : ?><div style="position: absolute; top: -10px; right: 15px"
                        class="label-deal-product">-<?php echo $ls['discount'] ?>%</div>
                      <?php endif ?>


                      <a href="/home/product/<?php echo $ls['id_prod'] ?>" class="image"> <img class="lazy"
                          data-src="/uploads/products/<?php echo $ls['image'] ?>" alt="<?php echo $ls['name_prod'] ?>"
                          title="<?php echo $ls['name_prod'] ?>"> </a>
                      <div class="about pl-10">
                        <a href="/home/product/<?php echo $ls['id_prod'] ?>"
                          class="title mt-0 p-0 mb-0 cm-font"><?php echo $ls['name_prod'] ?></a>
                        <div class="status">
                          <div class="star mt-0" total="5" point="5"></div>
                        </div>
                        <p class="mt-0 cm-red">
                          <?php echo number_format( ((100 - $ls['discount']) * $ls['price'])/100 , 0 ,'','.' ) ?>đ<span
                            style="text-decoration: line-through; color: #acacac;"><?php echo number_format($ls['price'],0,'','.') ?>đ</span>
                        </p>
                      </div>


                    </div>
                    <?php endforeach; endif?>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <input class="is_mobile" name="is_mobile" type="hidden" value="0">
  </form>
  </div>

  <div class="session">
    <div class="main-content">
      <div class="title-nav"> <a class="hover-color">SẢN PHẨM LIÊN QUAN</a> </div>

      <div id="listProdlienquan" class="owl-carousel owl-theme ">

        <?php if(isset($listProdLienquan)): foreach($listProdLienquan as $ls): ?>
        <div class="item product slider-product ">
          <?php if($ls['discount'] > 0) : ?><div class="label-deal-product">-<?php echo $ls['discount'] ?>%</div>
          <?php endif ?>



          <a class="image cs-flex flex-align-center flex-content-center">
            <div class="pane-tool-button cs-flex">
              <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $ls['id_prod'] ?>">Xem chi
                tiết</button>
              <button class="add-cart" value="<?php echo $ls['id_prod'] ?>">
                <i class="fas fa-shopping-cart "></i>
              </button>
            </div>
            <img class="lazy" style="max-width: 200px" data-src="/uploads/products/<?php echo $ls['image'] ?>"
              alt="<?php echo $ls['name_prod'] ?>" title="<?php echo $ls['name_prod'] ?>">
          </a> <a href="/home/product/<?php echo $ls['id_prod'] ?>" class="title"><?php echo $ls['name_prod'] ?></a>
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


  <div class="form-rate" style="overflow: auto;">
    <div class="form">
      <button type="button" class="close">x</button>
      <h4 style="text-align: left;">Đánh giá sản phẩm này</h4>
      <form action="" enctype="multipart/form-data" method="post" id="form_rate">
        <input name="parent_id" type="hidden" value="0">
        <div class="content_parent_rate"></div>
        <input name="name" id="txt_name" type="text" value="" placeholder="Họ tên của bạn" style="max-width: 300px;">
        <small class="show-error">
          <p id="name"></p>
        </small>
        <input name="phone" id="txt_phone" type="text" placeholder="Số điện thoại" value=""
          style="max-width: 300px; margin-bottom: 0;">
        <small class="show-error">
          <p id="phone"></p>
        </small>
        <textarea name="content" id="txt_content" rows="5" style="margin-top: 25px; max-width: 600px;"
          placeholder="Nội dung"></textarea>
        <small class="show-error">
          <p id="content" style="margin-bottom: 10px;"></p>
        </small>
        <div class="sms_notify_div">
          <p style="margin: 0; color: #3b5eae; font-size: 14px;">Bạn có muốn hệ thống SMS thông báo cho bạn khi có người
            trả lời bạn không?</p>
          <p style="margin: 0"> <input type="radio" style="width: auto;" id="sms_notify_y" name="sms_notify"
              value="1" /> <label for="sms_notify_y">Có</label> <input type="radio" style="width: auto;"
              id="sms_notify_n" name="sms_notify" value="2" /> <label for="sms_notify_n">Không</label> </p>
          <small class="show-error">
            <p id="sms_notify"></p>
          </small>
        </div>
        <p>
          <p style="margin-bottom: 5px; font-size: 14px;">Mời bạn đánh giá (1 - 5 sao) sản phẩm này giúp chúng tôi</p>
          <div class="star star-hover mt-0" total="5" point="0"></div>
          <input name="rate" type="hidden" value="0"> <input name="page" id="current_page" type="hidden" value="">
          <small class="show-error">
            <p id="rate"></p>
          </small>
        </p> <button type="submit">Gửi ngay</button>
        <p>Xin chân thành cảm ơn!</p>
      </form>
    </div>
  </div>
  <!-- <script>var maxHeight = 0;$('.main_effect_content').each(function(){if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }});$('.main_effect_content').height(maxHeight);</script> <script src="/lib/front/asset/site/js/scrsnxtproduct13860.js?v=1"></script> <script src="/lib/front/asset/site/js/jquery.easing.min.js"></script> <script src="/lib/front/asset/site/js/jquery.easy-ticker.js"></script> -->
  <div class="session">
    <div class="main-content">
      <div class="title-nav"> <a href="javascript:;" class="hover-color">Sản phẩm mua nhiều</a> </div>

      <div id="listProdXem" class="owl-carousel owl-theme ">

        <?php if(isset($sp_views)): foreach($sp_views as $ls): ?>
        <div class="item product slider-product ">
          <?php if($ls['discount'] > 0) : ?><div class="label-deal-product">-<?php echo $ls['discount'] ?>%</div>
          <?php endif ?>

          <a class="image cs-flex flex-align-center flex-content-center">
            <div class="pane-tool-button cs-flex">
              <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $ls['id_prod'] ?>">Xem chi
                tiết</button>
              <button class="add-cart" value="<?php echo $ls['id_prod'] ?>">
                <i class="fas fa-shopping-cart "></i>
              </button>
            </div>
            <img class="lazy" style="max-width: 200px" data-src="/uploads/products/<?php echo $ls['image'] ?>"
              alt="<?php echo $ls['name_prod'] ?>" title="<?php echo $ls['name_prod'] ?>">
          </a> <a href="/home/product/<?php echo $ls['id_prod'] ?>" class="title"><?php echo $ls['name_prod'] ?></a>
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

</section>