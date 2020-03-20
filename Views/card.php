<?php $this->helper->_debug($_SESSION['cart']) ?>
<div class="session" id="card-shop">
   <div class="main-content">
      <div class="cs-flex cs-col-12">
         <div class="title-cm" style="width: 100%">
            <h3 style="padding: 10px; text-align: center">Giỏ hàng của bạn có <span class="color-red total-cart-items">2</span> sản phẩm</h3>
         </div>
         <div class="table-desktop">
            <form action="/site/cart/update" method="post">
               <table class="customers">
                  <tbody>
                     <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                     </tr>
                     <?php if(isset($_SESSION['cart']) != null || count($_SESSION['cart']) ==0): ?>
                     <?php foreach($_SESSION['cart'] as $key=>$cart): ?>
                     <tr class="row-cart">
                        <td> <a href="/home/product/<?php echo $key ?>" class="m-auto cs-flex"> <img class="m-auto lazy" alt="<?php echo $cart['name_prod'] ?>" src="/uploads/products/<?php echo $cart['image'] ?>" style=""> </a> </td>
                        <td class="">
                           <b><?php echo $cart['name_prod'] ?> </b>
                           <p style="font-style: italic; font-size: 12px;"></p>
                        </td>
                        <td class="color-red ta-center"><?php echo number_format( $cart['price'], 0 ,'','.' ) ?>đ</td>
                         <td class="color-red ta-center"><?php echo $cart['discount'] ?></td>
                        <td class="ta-center"> 
                        <span class="ui-spinner ui-corner-all ui-widget ui-widget-content" style="height: 40px;"><input class="spinner input-spin ui-spinner-input" name="quantity" value="1" aria-valuemin="<?php echo $cart['qty'] ?>" aria-valuemax="100" aria-valuenow="1" autocomplete="off" role="spinbutton"><a tabindex="-1" aria-hidden="true" class="ui-button ui-widget ui-spinner-button ui-spinner-up ui-corner-tr ui-button-icon-only" role="button"><span class="ui-button-icon ui-icon ui-icon-triangle-1-n"></span><span class="ui-button-icon-space"> </span></a><a tabindex="-1" aria-hidden="true" class="ui-button ui-widget ui-spinner-button ui-spinner-down ui-corner-br ui-button-icon-only" role="button"><span class="ui-button-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-icon-space"> </span></a></span>
                        </td>
                        <td class="color-red ta-center row-cart-amount"><?php echo number_format($cart['price'] * $cart['qty'], 0,'','.') ?>₫</td>
                        <td class="ta-center"> <a href="/site/cart/delete/352_0" class="style-icon white" style="padding: 0"> <i class="fas fa-times"></i> </a> </td>
                     </tr>
                     <?php endforeach; ?>
                     <?php endif; ?>
                     <tr>
                        <td colspan="4" align="right" style="border-right: none "> <b> <span>Tổng tiền thanh toán:</span> </b> </td>
                        <td colspan="6" align="right" style="border-left: none "> <strong> <span class="mr-5 color-red total-cart-amount">4.360.000₫</span> </strong> </td>
                     </tr>
                  </tbody>
               </table>
               <div style="text-align: right; color: teal; margin-top: 10px; font-style: italic;">Chúc mừng! Bạn được tích thêm (44 điểm ~ 43,600 vnđ) khi hoàn thành đơn này</div>
               <div id="user_point" style="text-align: right; margin-top: 10px;"></div>
               <div class="cs-flex flex-content-end cart-button" style="padding-right: 0;"> <button id="button_cart_click" class="button-cart">Cập nhật giỏ hàng</button> <a href="/dat-hang.html" class="button-address">Thực hiện thanh toán</a> </div>
            </form>
         </div>
         <div class="table-mobile">
            <form action="/site/cart/update" method="post">
               <table class="customers">
                  <tbody>
                     <tr>
                        <th>Ảnh</th>
                        <th>Sản phẩm</th>
                     </tr>
                     <tr>
                        <td> <a href="/hydropure-semtex.html" class="m-auto cs-flex"> <img class="m-auto lazy" alt="Hydropure + Semtex " src="front/upload/product/catalog/scivation_xtend_bcaa_90_servings_image_catalog_1582015416.jpg" style=""> </a> </td>
                        <td style="padding-bottom: 12px;">
                           <b>Hydropure + Semtex </b> 
                           <p></p>
                           <p>Đơn giá <span class="color-red">2.180.000đ</span> </p>
                           <p> <span class="ui-spinner ui-corner-all ui-widget ui-widget-content"><input class="spinner input-spin button-update-cart ui-spinner-input" name="352_0" value="2" base="/" aria-valuemin="1" aria-valuemax="100" aria-valuenow="2" autocomplete="off" role="spinbutton"><a tabindex="-1" aria-hidden="true" class="ui-button ui-widget ui-spinner-button ui-spinner-up ui-corner-tr ui-button-icon-only" role="button"><span class="ui-button-icon ui-icon ui-icon-triangle-1-n"></span><span class="ui-button-icon-space"> </span></a><a tabindex="-1" aria-hidden="true" class="ui-button ui-widget ui-spinner-button ui-spinner-down ui-corner-br ui-button-icon-only" role="button"><span class="ui-button-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-icon-space"> </span></a></span> </p>
                           <p>Thành tiền <span class="color-red row-cart-amount">4.360.000đ</span> </p>
                           <a href="/site/cart/delete/352_0" class="button-delete"> <i class="fas fa-times"></i> Loại bỏ</a> 
                        </td>
                     </tr>
                     <style>.ui-spinner .ui-spinner-button {width: 35px;}</style>
                     <tr>
                        <td colspan="2" align="right" style="font-size:17px"> <b> <span>Tổng thanh toán:</span> </b> <strong> <span class="mr-5 color-red total-cart-amount">4.360.000₫</span> </strong> </td>
                     </tr>
                  </tbody>
               </table>
               <div style="text-align: center; color: teal; margin-top: 10px; font-style: italic;">Chúc mừng! Bạn sẽ được tích thêm (<b>+ 44 điểm</b>) khi hoàn thành đơn hàng này</div>
               <div id="user_point" style="text-align: right; margin-top: 10px;"></div>
               <div class="cs-flex flex-content-end cart-button"> <button id="button_cart_click" class="button-cart">Cập nhật giỏ hàng</button> <a href="/dat-hang.html" class="button-address">Thực hiện thanh toán</a> </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end content --> 
</div> 