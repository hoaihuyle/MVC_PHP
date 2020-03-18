
<section id="'detail" >

    <form id="submit-product" action="" method="post">
        <div class="session microdata" itemtype="">
            <div class="main-content">
                <div class="cs-flex">
                    <div class="cs-flex cs-col-lg-9 cs-wrap product-detail-left">
                        <div class="cs-col-lg-5 left-child">
                            <div class="show-image"> <img id="img_01" class="lazy"  src="/uploads/products/<?php echo $prod[0]['image'] ?>" title="<?php echo $prod[0]['name_prod'] ?>" alt="<?php echo $prod[0]['name_prod'] ?>"> </div>
                            <div class="cs-flex flex-content-center inline" style="margin-top: 10px;"> <span style="font-size: 13px;">Like hoặc Share nếu bạn thích sp này</span> </div>
                            <div class="cs-flex flex-content-center inline" style="margin: 5px 0 0 0;">
                                <div class="cs-flex mb-10">
                                    <div class="fb-like" data-href="bcaa-312-30-servings.html" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"> </div>
                                    <div style="padding-left: 5px">
                                        <a href="#" class="twitter-share-button" rel="nofollow">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                    </div>
                                    <div style="padding-left: 5px">
                                        <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="150"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-flex flex-content-center" style="border-top: 1px #CCC solid; text-align: justify; line-height: 25px; margin-top: 10px; margin-bottom: 20px; padding-top: 10px;"> <i itemprop="description"> <?php echo $prod[0]['uses_prod'] ?> </i> </div>
                        </div>
                        <div class="cs-col-lg-7 mb-20 right-child">
                            <div class="title-cm mt-0 font-s-20">
                                <h1 style="font-size: 20px; margin: 0; padding: 0;"><span class="product-name" itemprop="name" id="product_name_r"><?php echo $prod[0]['name_prod'] ?></span></h1>
                            </div>
                            <div class="mt-10 cs-flex" style="width: 100%;">
                                <div style="line-height: 28px;">
                                    <div style="float: left; margin-right: 10px;"> Thương hiệu: <a href="thuong-hieu/muscle-pharm.html"> <span class="pl-5 pr-5" itemprop="author" style="background: #E46D38;color: #FFF;border-radius: 5px; padding-bottom: 2px;"> MusclePharm </span></a> </div>
                                    <div style="float: left;"> <span> Tình trạng:</span>
                                        <?php if($prod[0]['flag'] == 0) : ?>
                                        <span class="status-display" status="0">
                                            <span style="color: red; font-weight: 600">Đang kinh doanh</span>
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
                            <div class="mt-5" id="static_rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> <span class="star mt-10" total="5" point="5"></span> <span class="color-red" itemprop="ratingValue">5</span> trên <span itemprop="bestRating">5</span> <span> (<a href="#comment_form"><span itemprop="ratingCount">1</span> đánh giá)</a> </span> </div>
                            <div style="color: #7E7474; font-size: 13px; margin-top: 6px;">Đã có 2,787 lượt xem sp này</div>
                            <div class="title-cm mt-10 cm-red">
                        <span class="cm-red font-s-25 product-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer" price="<?php echo $prod[0]['price'] ?>">
                           <span itemprop="price" class="cm-red" content="<?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?></span><span itemprop="priceCurrency" class="cm-red" content="VND"> VND</span>
                            <div class="price"><span class="old"><?php echo number_format($prod[0]['price_manu'],0,'','.') ?> VND</span></div>
                           <meta itemprop="price" content="<?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>">
                           <meta itemprop="priceCurrency" content="VND">
                        </span>
                            </div>
                            <!--Liệt kê các sản phẩm có trong combo tại đây (nếu có)--> <!--Cho trọng lượng vào đây-->
                            <div id="mobile_addtocart"></div>
                            <div style="margin-top: 10px; line-height: 25px;">
                                <ul>
                                    <li style="list-style: disclosure-open inside;"><?php echo $prod[0]['uses_prod'] ?></li>
                                </ul>
                            </div>
                            <script>function showStore() {$("#explode_store").toggle();}</script>
                            <p style="margin: 10px 0 0 0; padding: 0 0 10px 0; color: #505350; border-bottom: 1px #CCC dotted; font-weight: bold; cursor: pointer;" onClick="showStore()">Danh sách cửa hàng</p>
                            <div id="explode_store">
                                <div id="list_store" style="margin-top: 8px; padding: 0">
                                    <table>
                                        <tr>
                                            <td>1: Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                        </tr>
                                        <tr>
                                            <td>2: Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="cs-flex">
                                <div class="square-radio cs-flex">
                                    <p style="width: 100%;" class="properties_info">Hương vị: <span class="color-teal">Chọn bên dưới</span></p>
                                    <input class="radio-input" type="radio" name="p_2" id="2_246" value="246" namepro="Hương vị: Watermelon"> <label id="select_type_2_246" class="radio-label inventory" for="2_246" text="Watermelon">Watermelon</label> <input class="radio-input" type="radio" name="p_2" id="2_416" value="416" namepro="Hương vị: Lemonlime"> <label id="select_type_2_416" class="radio-label inventory" for="2_416" text="Lemonlime">Lemonlime</label> <input class="radio-input" type="radio" name="p_2" id="2_240" value="240" namepro="Hương vị: Blue Raspberry"> <label id="select_type_2_240" class="radio-label inventory" for="2_240" text="Blue Raspberry">Blue Raspberry</label>
                                </div>
                            </div>
                            <div id="temp_mobile_addtocart" style="display: none;">
                                <div id="ismobile">
                                    <div class="action-cart-product" style="margin-bottom: 10px; text-align: left;">
                                        <table>
                                            <tr>
                                                <td><img class="lazy" data-src="/lib/front/upload/product/catalog/scivation_xtend_bcaa_90_servings_image_catalog_1582015416.jpg" width="100" /></td>
                                                <td>Cam kết hàng chất lượng 100%, phát hiện hàng giả đền 100 lần, giá rẻ nhất VN, ship toàn quốc nhanh nhất, thanh toán tại nhà, đặt hàng siêu nhanh chỉ mất 20 giây</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--Liệt kê thuộc tính sản phẩm tại đây-->
                                    <select id="choice_properties1" onchange="ChoiceProperties1(event)" style="padding: 8px 5px; font-size: 14px; margin-bottom: 10px;">
                                        <option>=> Xin mời chọn Hương vị</option>
                                        0
                                        <option value="#select_type_2_246">Watermelon</option>
                                        <option value="#select_type_2_416">Lemonlime</option>
                                        <option value="#select_type_2_240">Blue Raspberry</option>
                                    </select>
                                    <!--Liệt kê quà tặng tại đây-->
                                    <p style="text-align: center; padding: 0; cursor: pointer; font-weight: bold; margin-bottom: -2px; color: #ff009b;" onclick="getDetailInventory('194');"><i class="fa fa-search" aria-hidden="true"></i> Check kho trước khi mua</p>
                                    <div class="cs-flex mt-10 action-cart-product" style="margin-bottom: 10px;"> <button class="button-cm mt-5 not-disable add-cart" style="border-radius: 5px; background: #39b17f; border: 1px #39b17f solid;"> <span style="text-transform: uppercase; color: #FFF; font-size: 18px;">Mua ngay</span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">Giao hàng thanh toán tại nhà</span></button> </div>

                                    <div style="background: #e87c29; text-align: center; border-radius: 5px; margin-top: 10px;">
                                        <p style="padding: 10px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-gift" style="color: #FFF;"></i> <span style="color: #FFF; cursor: pointer; line-height: 22px;">GIÁO ÁN TẬP GYM </span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">được TẶNG kèm khi mua sp này</span></p>
                                    </div>
                                    <div class="cart_bottom action-cart-product" id="ismobile" style="position: fixed; z-index: 999999; bottom: 13px; left: 100px;"> <button class="not-disable add-cart" style="color: #FFF; font-size: 15px; font-weight: bold; border-radius: 2px; background: #fd6e1d; padding: 11px 8px; border: none;">Đặt hàng ngay</button> </div>
                                </div>
                                <div class="title-line"></div>
                            </div>
                            <div class="cs-flex mt-10"> <input class="spinner input-spin" name="quantity" value="1"> <button type="button" class="redirect-login" url="dang-nhap"><i class="far fa-heart"></i></button> </div>
                            <span class="cm-red font-s-25 product-price" style="margin-top: 13px; display: inline-block" price="<?php echo $prod[0]['price'] ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?> VND </span>
                            <div class="cs-flex mt-10 action-cart-product"> <button class="button-cm mt-5 not-disable add-cart"> <span style="text-transform: uppercase; color: #FFF; font-size: 18px;">Mua sp này</span><br /><span style="font-size: 12px; padding-top: 6px; font-weight: normal; color: #FFF;">Cam kết hàng chính hãng, thật 100%</span></button> </div>
                            <div class="contact-phone">
                                <div style="background: #288AD6; text-align: center; margin-top: 10px; padding: 5px;">
                                    <a target="_blank" href="https://zalo.me/" style="color: #FFF;">
                                        <p style="padding: 5px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-comment" style="color: #FFF;"></i> Chat Zalo với CODO SUPP</p>
                                    </a>
                                </div>
                                <div style="background: #288AD6; text-align: center; margin-top: 10px; padding: 5px;">
                                    <a target="_blank" href="#" target="_blank" style="color: #FFF;">
                                        <p style="padding: 5px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-comment" style="color: #FFF;"></i> Nhắn tin Messenger với chúng tôi</p>
                                    </a>
                                </div>
                            </div>
                            <p style="padding: 0; margin: 15px 0 5px 0;"><i class="fa fa-phone" style="background: #62686e; color: #FFF; border-radius: 10px; padding: 5px; font-size: 10px;"></i> Hotline Huế, toàn quốc: <a href="tel:123123123" style="color: #6c6865; font-weight: 550;">123.123.123</a></p>
                        </div>
                        <div style="border-top: 1px #ada9a9 solid; padding-top: 20px; margin-top: 10px;">Xin quý khách lưu ý: Hình ảnh và <?php echo $prod[0]['name_prod'] ?> chỉ mang tính chất tham khảo bởi thành phần, mẫu mã nhà sản xuất có thể thay đổi bất cứ lúc nào. Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</div>
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
                                                <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Trọng lượng</th>
                                                <td style="border-right: none;">
                                                    <ul>
                                                        <li>225g</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Hương vị</th>
                                                <td style="border-right: none;">
                                                    <ul>
                                                        <li>Watermelon</li>
                                                        <li>Lemonlime</li>
                                                        <li>Blue Raspberry</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: right; font-weight: 550; background: #eee; border-left: none;">Xuất xứ</th>
                                                <td style="border-right: none;">
                                                    <ul> </ul>
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
                        <div style="margin-bottom: 20px;"><span itemprop="keywords">Keywords: <?php echo $prod[0]['name_prod'] ?></span></div>
                        <div class="cs-flex cs-col-12 p-0 buy-product-last">
                            <div class="cs-col-12 cs-col-md-2" style="margin-bottom: 10px; padding-top: 10px;"> <img id="img_01" itemprop="image" class="lazy" src="/uploads/products/<?php echo $prod[0]['image'] ?>" style="max-width: 110px; max-height: 110px;" title="<?php echo $prod[0]['name_prod'] ?>" alt="<?php echo $prod[0]['name_prod'] ?>"> </div>
                            <div class="cs-col-12 cs-col-md-5" style="margin-bottom: 10px; padding-top: 10px;">
                                <b>
                                    <p class="mb-0 font-s-15"><?php echo $prod[0]['name_prod'] ?></p>
                                </b>
                                <div class="mt-5"> <span class="star mt-10" total="5" point="5"></span> </div>
                                <b><span class="cm-red font-s-20 product-price" price="<?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?>"><?php echo number_format( $prod[0]['price'], 0 ,'','.' ) ?> VND </span></b>
                            </div>
                            <div class="cs-col-12 cs-col-md-5 panel-btn action-cart-product" style="margin-bottom: 10px; padding-top: 10px;"> <button class="button-cm mr-10 mt-5 not-disable add-cart" style="font-size: 14px;"> Mua sản phẩm này</button> </div>
                        </div>
                    </div>
                    <div class="cs-col-lg-3 cs-wrap product-detail-right">
                        <div id="notmobile">
                            <div class="action-cart-product" style="margin-bottom: 10px; text-align: center;">
                                <p style="padding: 0; margin: 0;"><img class="lazy" data-src="/lib/front/upload/product/catalog/true_gain_12lbs___best_bcaa_30_servings_image_catalog_1583306553.jpg" width="100" /></p>
                                <p style="padding: 0; margin: 0;">Cam kết hàng chất lượng 100%, phát hiện hàng giả đền 100 lần, giá tốt nhất, ship toàn quốc nhanh nhất, đặt hàng siêu nhanh chỉ mất 20 giây</p>
                            </div>
                            <!--Liệt kê thuộc tính sản phẩm tại đây-->
                            <select id="choice_properties2" onchange="ChoiceProperties2(event)" style="padding: 8px 5px; font-size: 14px; margin-bottom: 10px;">
                                <option>=> Xin mời chọn Hương vị</option>
                                0
                                <option value="#select_type_2_246">Watermelon</option>
                                <option value="#select_type_2_416">Lemonlime</option>
                                <option value="#select_type_2_240">Blue Raspberry</option>
                            </select>
                            <!--Liệt kê quà tặng tại đây-->
                            <div class="cs-flex mt-10 action-cart-product" style="margin-bottom: 10px;"> <button class="button-cm mt-5 not-disable add-cart" style="border-radius: 5px; background: #288ad6; border: 1px #0099b2 solid;"> <span style="text-transform: uppercase; color: #FFF; font-size: 18px;">Mua ngay</span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">Giao hàng thanh toán tại nhà</span></button> </div>

                            <div style="background: #e87c29; text-align: center; border-radius: 5px; margin-top: 10px;">
                                <p style="padding: 10px 0; margin: 0; color: #FFF; font-size: 15px;"><i class="fa fa-gift" style="color: #FFF;"></i> <span style="color: #FFF; cursor: pointer; line-height: 22px;">GIÁO ÁN TẬP GYM </span><br /><span style="font-size: 12px; font-weight: normal; color: #FFF;">được TẶNG kèm khi mua sp này</span></p>
                            </div>
                        </div>
                        <div class="cs-flex">
                            <!-- List View. -->
                            <div class="list-view">
                                <div class="item cs-flex" style="padding-bottom: 15px;">
                                    <div class="image" style="background: url(/lib/front/upload/service/shiper1.png) no-repeat center"> </div>
                                    <div class="about">
                                        <h3 class="title">Giao hàng toàn quốc</h3>
                                        <span class="description">Nhận hàng & thanh toán tiền tại nhà, ship hàng siêu nhanh</span>
                                    </div>
                                </div>
                                <div class="item cs-flex" style="padding-bottom: 15px;">
                                    <div class="image" style="background: url(/lib/front/upload/service/change1.png) no-repeat center"> </div>
                                    <div class="about">
                                        <h3 class="title">Đổi trả nhanh gọn</h3>
                                        <span class="description">Đổi trả hàng trong vòng 30 ngày, chấp nhận bất kỳ lý do</span>
                                    </div>
                                </div>
                                <div class="item cs-flex" style="padding-bottom: 15px;">
                                    <div class="image" style="background: url(/lib/front/upload/service/phone.png) no-repeat center"> </div>
                                    <div class="about">
                                        <h3 class="title">Tư vấn nhiệt tình</h3>
                                        <span class="description">Đội ngũ chuyên viên tư vấn có kiến thức chuẩn và body đẹp</span>
                                    </div>
                                </div>
                                <div class="item cs-flex" style="padding-bottom: 15px;">
                                    <div class="image" style="background: url(/lib/front/upload/service/gift-icon.png) no-repeat center"> </div>
                                    <div class="about">
                                        <h3 class="title">Giá tốt kèm quà tặng</h3>
                                        <span class="description">Nhiều chương trình giảm giá, tặng quà cực giá trị</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End List View -->
                        </div>
                        <div class="nutrition_facts">
                            <p><b style="color: teal;">BẢNG THÀNH PHẦN</b></p>
                            <div class="content-nutrition-facts" style="margin-top: -7px;"><a href="/lib/front/upload/product/catalog/bcaa_3_1_2__30_servings__nutrition_facts_1563181992.jpg" target="_blank"><img width="100%" src="/lib/front/upload/product/catalog/bcaa_3_1_2__30_servings__nutrition_facts_1563181992.jpg" /></a></div>
                            <p style="text-align: center; padding: 5px; margin: 0; background: #d0d0d0;"><a href="/lib/front/upload/product/catalog/bcaa_3_1_2__30_servings__nutrition_facts_1563181992.jpg" target="_blank">Zoom to hơn</a></p>
                        </div>
                        <div id="product_interest">
                            <h3 class="title-cm mt-20 mb-20">
                                <span>Có thể bạn quan tâm</span>
                                <div class="title-line"></div>
                            </h3>
                            <div class="box-product-mini index mb-20">
                                <a href="/home/product/1" class="image"> <img class="lazy" data-src="/lib/front/upload/product/catalog/alpha_amino_30_serving_image_catalog_1571041916.jpg" alt="Alpha Amino 30 serving" title="Alpha Amino 30 serving"> </a>
                                <div class="about pl-10">
                                    <a href="/home/product/1" class="title mt-0 p-0 mb-0 cm-font">Alpha Amino 30 serving</a>
                                    <div class="status">
                                        <div class="star mt-0" total="5" point="5"></div>
                                    </div>
                                    <p class="mt-0 cm-red">290.000₫ <span style="text-decoration: line-through; color: #acacac;">550.000đ</span> </p>
                                </div>
                            </div>
                            <div class="box-product-mini index mb-20">
                                <a href="/home/product/1" class="image"> <img class="lazy" data-src="/lib/front/upload/product/catalog/nutrex_eaa_hydration_30_servings_image_catalog_1569321987.jpg" alt="Nutrex EAA Hydration 30 servings" title="Nutrex EAA Hydration 30 servings"> </a>
                                <div class="about pl-10">
                                    <a href="/home/product/1" class="title mt-0 p-0 mb-0 cm-font">Nutrex EAA Hydration 30 servings</a>
                                    <div class="status">
                                        <div class="star mt-0" total="5" point="0"></div>
                                    </div>
                                    <p class="mt-0 cm-red">750.000₫ <span style="text-decoration: line-through; color: #acacac;">850.000đ</span> </p>
                                </div>
                            </div>
                            <div class="box-product-mini index mb-20">
                                <a href="/home/product/1" class="image"> <img class="lazy" data-src="/lib/front/upload/product/catalog/musclepharm_bcaa_60_servings_image_catalog_1562669350.jpg" alt="MusclePharm BCAA 60 servings" title="MusclePharm BCAA 60 servings"> </a>
                                <div class="about pl-10">
                                    <a href="/home/product/1" class="title mt-0 p-0 mb-0 cm-font">MusclePharm BCAA 60 servings</a>
                                    <div class="status">
                                        <div class="star mt-0" total="5" point="0"></div>
                                    </div>
                                    <p class="mt-0 cm-red">650.000₫ </p>
                                </div>
                            </div>
                            <div class="box-product-mini index mb-20">
                                <a href="/home/product/1" class="image"> <img class="lazy" data-src="/lib/front/upload/product/catalog/best_bcaa__14_servings__image_catalog_1562925626.jpg" alt="Best BCAA 14 servings" title="Best BCAA 14 servings"> </a>
                                <div class="about pl-10">
                                    <a href="/home/product/1" class="title mt-0 p-0 mb-0 cm-font">Best BCAA 14 servings</a>
                                    <div class="status">
                                        <div class="star mt-0" total="5" point="0"></div>
                                    </div>
                                    <p class="mt-0 cm-red">280.000₫ </p>
                                </div>
                            </div>
                            <div class="box-product-mini index mb-20">
                                <a href="/home/product/1" class="image"> <img class="lazy" data-src="/lib/front/upload/product/catalog/mutant_bcaa_30_servings_image_catalog_1562402874.jpg" alt="Mutant BCAA 30 servings" title="Mutant BCAA 30 servings"> </a>
                                <div class="about pl-10">
                                    <a href="/home/product/1" class="title mt-0 p-0 mb-0 cm-font">Mutant BCAA 30 servings</a>
                                    <div class="status">
                                        <div class="star mt-0" total="5" point="3"></div>
                                    </div>
                                    <p class="mt-0 cm-red">600.000₫ <span style="text-decoration: line-through; color: #acacac;">700.000đ</span> </p>
                                </div>
                            </div>
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
            <div class="title-nav"> <a href="javascript:;" class="hover-color">SẢN PHẨM LIÊN QUAN</a> </div>
            <div class="slider-magic cs-flex" numColumn='[ {"num": 5, "width": 900}, {"num": 3, "width": 500}, {"num": 2, "width": 400}, {"num": 2, "width": 0} ]' isPager="false" classItems="product">
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/bpi-sports-best-bcaa-30-servings.jpg" alt="BPI Sports Best BCAA 30 Servings" title="BPI Sports Best BCAA 30 Servings"> </a> <a href="/home/product/1" class="title">BPI Sports Best BCAA 30 Servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">550.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/scivation_xtend_bcaa_90_servings_image_catalog_1582015416.jpg" alt="Scivation Xtend BCAA 90 servings" title="Scivation Xtend BCAA 90 servings"> </a> <a href="/home/product/1" class="title">Scivation Xtend BCAA 90 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">1.290.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/bpi_sports_best_bcaa_60_servings_image_catalog_1582015984.jpg" alt="BPI Sports Best BCAA 60 Servings" title="BPI Sports Best BCAA 60 Servings"> </a> <a href="/home/product/1" class="title">BPI Sports Best BCAA 60 Servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">790.000đ</span> <span class="old">850.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/myprotein-bcaa-2-1-1-500g-100-servings.jpg" alt="MyProtein BCAA 500g 100 servings" title="MyProtein BCAA 500g 100 servings"> </a> <a href="/home/product/1" class="title">MyProtein BCAA 500g 100 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">650.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/scivation_xtend_bcaa_30_servings_image_catalog_1577958591.jpg" alt="Scivation Xtend BCAA 30 servings" title="Scivation Xtend BCAA 30 servings"> </a> <a href="/home/product/1" class="title">Scivation Xtend BCAA 30 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">590.000đ</span> <span class="old">650.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/best-bcaa-shredded-25-servings.jpg" alt="Best bcaa shredded 25 servings" title="Best bcaa shredded 25 servings"> </a> <a href="/home/product/1" class="title">Best bcaa shredded 25 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">550.000đ</span> <span class="old">590.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <div class="label-deal-product">-14%</div>
                    <div class="time-deal-product"time="383153"> <span><i class="far fa-clock"></i> <span class="display-time"></span></span> </div>
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/anabolic_state_70_servings_image_catalog_1583374330.jpg" alt="Anabolic State 70 servings" title="Anabolic State 70 servings"> </a> <a href="/home/product/1" class="title">Anabolic State 70 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">990.000đ</span> <span class="old">1.150.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/myprotein_bcaa_1kg__200_servings__image_catalog_1563263041.jpg" alt="MyProtein BCAA 1kg (200 servings)" title="MyProtein BCAA 1kg (200 servings)"> </a> <a href="/home/product/1" class="title">MyProtein BCAA 1kg (200 servings)</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">1.090.000đ</span> <span class="old">1.150.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/mutant_bcaa_90_servings_image_catalog_1563186691.jpg" alt="Mutant BCAA 90 servings" title="Mutant BCAA 90 servings"> </a> <a href="/home/product/1" class="title">Mutant BCAA 90 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">1.250.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <div class="label-deal-product">-6%</div>
                    <div class="time-deal-product"time="383153"> <span><i class="far fa-clock"></i> <span class="display-time"></span></span> </div>
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/anabolic_state_30_servings_image_catalog_1583375364.jpg" alt="Anabolic State 30 servings" title="Anabolic State 30 servings"> </a> <a href="/home/product/1" class="title">Anabolic State 30 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">650.000đ</span> <span class="old">690.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/xtend-energy-bcaas-30-servings.jpg" alt="Xtend Energy BCAAs 30 servings" title="Xtend Energy BCAAs 30 servings"> </a> <a href="/home/product/1" class="title">Xtend Energy BCAAs 30 servings</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">590.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/mutant_bcaa_30_servings_image_catalog_1562402874.jpg" alt="Mutant BCAA 30 servings" title="Mutant BCAA 30 servings"> </a> <a href="/home/product/1" class="title">Mutant BCAA 30 servings</a>
                    <div class="star" total="5" point="3"></div>
                    <div class="price"> <span class="main">600.000đ</span> <span class="old">700.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/optimum-bcaa-1000-400-vien.jpg" alt="Optimum BCAA 1000 400 Viên" title="Optimum BCAA 1000 400 Viên"> </a> <a href="/home/product/1" class="title">Optimum BCAA 1000 400 Viên</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">850.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/optimum-bcaa-1000-200-vien.jpg" alt="Optimum BCAA 1000 200 viên" title="Optimum BCAA 1000 200 viên"> </a> <a href="/home/product/1" class="title">Optimum BCAA 1000 200 viên</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">500.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <div class="label-deal-product">-12%</div>
                    <div class="time-deal-product"time="383153"> <span><i class="far fa-clock"></i> <span class="display-time"></span></span> </div>
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/nutrex_eaa_hydration_30_servings_image_catalog_1569321987.jpg" alt="Nutrex EAA Hydration 30 servings" title="Nutrex EAA Hydration 30 servings"> </a> <a href="/home/product/1" class="title">Nutrex EAA Hydration 30 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">750.000đ</span> <span class="old">850.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/ibcaa-gonutrition-1kg-200-serving.jpg" alt="iBcaa GoNutrition 1kg (200 serving)" title="iBcaa GoNutrition 1kg (200 serving)"> </a> <a href="/home/product/1" class="title">iBcaa GoNutrition 1kg (200 serving)</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">1.090.000đ</span> <span class="old">1.150.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/best_bcaa__14_servings__image_catalog_1562925626.jpg" alt="Best BCAA 14 servings" title="Best BCAA 14 servings"> </a> <a href="/home/product/1" class="title">Best BCAA 14 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">280.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/alpha_amino_30_serving_image_catalog_1571041916.jpg" alt="Alpha Amino 30 serving" title="Alpha Amino 30 serving"> </a> <a href="/home/product/1" class="title">Alpha Amino 30 serving</a>
                    <div class="star" total="5" point="5"></div>
                    <div class="price"> <span class="main">290.000đ</span> <span class="old">550.000đ</span> </div>
                </div>
                <div class="product slider-product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img class="lazy" data-src="/lib/front/upload/product/catalog/musclepharm_bcaa_60_servings_image_catalog_1562669350.jpg" alt="MusclePharm BCAA 60 servings" title="MusclePharm BCAA 60 servings"> </a> <a href="/home/product/1" class="title">MusclePharm BCAA 60 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">650.000đ</span> </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModalInventory" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body"></div>
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
                <input name="phone" id="txt_phone" type="text" placeholder="Số điện thoại" value="" style="max-width: 300px; margin-bottom: 0;">
                <small class="show-error">
                    <p id="phone"></p>
                </small>
                <textarea name="content" id="txt_content" rows="5" style="margin-top: 25px; max-width: 600px;" placeholder="Nội dung"></textarea>
                <small class="show-error">
                    <p id="content" style="margin-bottom: 10px;"></p>
                </small>
                <div class="sms_notify_div">
                    <p style="margin: 0; color: #3b5eae; font-size: 14px;">Bạn có muốn hệ thống SMS thông báo cho bạn khi có người trả lời bạn không?</p>
                    <p style="margin: 0"> <input type="radio" style="width: auto;" id="sms_notify_y" name="sms_notify" value="1" /> <label for="sms_notify_y">Có</label> <input type="radio" style="width: auto;" id="sms_notify_n" name="sms_notify" value="2" /> <label for="sms_notify_n">Không</label> </p>
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
    <script>var maxHeight = 0;$('.main_effect_content').each(function(){if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }});$('.main_effect_content').height(maxHeight);</script> <script src="/lib/front/asset/site/js/scrsnxtproduct13860.js?v=1"></script> <script src="/lib/front/asset/site/js/jquery.easing.min.js"></script> <script src="/lib/front/asset/site/js/jquery.easy-ticker.js"></script>
    <div class="session">
        <div class="main-content">
            <div class="title-nav"> <a href="javascript:;" class="hover-color">Sản phẩm bạn đã xem</a> </div>
            <div class="slider-magic cs-flex" numColumn=' [ {"num": 5, "width": 900}, {"num": 3, "width": 500}, {"num": 2, "width": 400}, {"num": 2, "width": 0} ]' isPager="false" classItems="product">
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/super_mass_gainer_12lbs___xtend_bcaa_90_servings_image_catalog_1564559625.jpg" alt="Super Mass Gainer 12lbs + Xtend BCAA 90 servings" title="Super Mass Gainer 12lbs + Xtend BCAA 90 servings"> </a> <a href="/home/product/1" class="title">Super Mass Gainer 12lbs + Xtend BCAA 90 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">2.450.000đ</span> <span class="old">2.600.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/true_gain_12lbs___best_bcaa_30_servings_image_catalog_1583306553.jpg" alt="True Gain 12lbs + Best BCAA 30 servings" title="True Gain 12lbs + Best BCAA 30 servings"> </a> <a href="/home/product/1" class="title">True Gain 12lbs + Best BCAA 30 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">1.640.000đ</span> <span class="old">1.740.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/true_gainer_12lbs___xtend_bcaa_90sers_image_catalog_1563785432.jpg" alt="True Gain 12lbs + Xtend BCAA 90 servings" title="True Gain 12lbs + Xtend BCAA 90 servings"> </a> <a href="/home/product/1" class="title">True Gain 12lbs + Xtend BCAA 90 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">2.240.000đ</span> <span class="old">2.490.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/on_isolate_5lbs___xtend_bcaa_90_servings_image_catalog_1565077755.jpg" alt="ON isolate 5lbs + Xtend BCAA 90 servings" title="ON isolate 5lbs + Xtend BCAA 90 servings"> </a> <a href="/home/product/1" class="title">ON isolate 5lbs + Xtend BCAA 90 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">2.700.000đ</span> <span class="old">2.950.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/whey_gold_2lbs___best_bcaa_30_servings_image_catalog_1564712699.png" alt="Whey Gold 2lbs + Best BCAA 30 servings" title="Whey Gold 2lbs + Best BCAA 30 servings"> </a> <a href="/home/product/1" class="title">Whey Gold 2lbs + Best BCAA 30 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">1.240.000đ</span> <span class="old">1.340.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/whey_gold_2lbs___best_bcaa_60sers_image_catalog_1564018284.jpg" alt="Whey Gold 2lbs + Best BCAA 60 servings" title="Whey Gold 2lbs + Best BCAA 60 servings"> </a> <a href="/home/product/1" class="title">Whey Gold 2lbs + Best BCAA 60 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">1.480.000đ</span> <span class="old">1.580.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/iso_100_5lbs___best_bcaa_30_sers_image_catalog_1564135786.jpg" alt="Iso 100 5lbs + Best BCAA 30 servings" title="Iso 100 5lbs + Best BCAA 30 servings"> </a> <a href="/home/product/1" class="title">Iso 100 5lbs + Best BCAA 30 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">2.300.000đ</span> <span class="old">2.450.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/whey_gold_10lbs___best_bcaa_30sers_image_catalog_1563963207.jpg" alt="Whey Gold 10lbs + Best BCAA 30 servings" title="Whey Gold 10lbs + Best BCAA 30 servings"> </a> <a href="/home/product/1" class="title">Whey Gold 10lbs + Best BCAA 30 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">3.000.000đ</span> <span class="old">3.200.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/musclepharm_bcaa_60_servings_image_catalog_1562669350.jpg" alt="MusclePharm BCAA 60 servings" title="MusclePharm BCAA 60 servings"> </a> <a href="/home/product/1" class="title">MusclePharm BCAA 60 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">650.000đ</span> </div>
                </div>
                <div class="product cs-col-6 cs-col-xs-6 cs-col-md-2-4">
                    <a href="/home/product/1" class="image cs-flex flex-align-center flex-content-center"> <img src="/lib/front/upload/product/catalog/best_bcaa__14_servings__image_catalog_1562925626.jpg" alt="Best BCAA 14 servings" title="Best BCAA 14 servings"> </a> <a href="/home/product/1" class="title">Best BCAA 14 servings</a>
                    <div class="star" total="5" point="0"></div>
                    <div class="price"> <span class="main">280.000đ</span> </div>
                </div>
                <script>
                    if($(window).width() <= 769) {$(".slider-child-catalog").remove();}
                </script>
            </div>
        </div>
    </div>

</section> 