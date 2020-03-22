<?php $tongtien = 0; $stt = 1 ?>
<div class="session" id="card-shop">
   <div class="main-content">
      <div class="cs-flex col-12 cs-col-12">
         <div class="title-cm" style="width: 100%">
            <h3 style="padding: 10px; text-align: center">Giỏ hàng của bạn có <span class="color-red total-cart-items" style="font-size: 25px"><?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']) ?></span> sản phẩm</h3>
         </div>
         <!-- DesKtop HTML -->
         <div class="table-desktop table-responsive">
            <form action="/site/cart/update" method="post">
               <table id="table1" class="card_table table customers">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if(isset($_SESSION['cart'])): if(isset($_SESSION['cart']) != null || count($_SESSION['cart']) ==0): ?>
                           <?php foreach($_SESSION['cart'] as $key=>$cart): ?>
                           <tr class="row-cart">
                              <td class="ta-center"><?php echo $stt ?></td>
                              <td> <a href="/home/product/<?php echo $key ?>" class="m-auto cs-flex"> <img class="m-auto lazy" alt="<?php echo $cart['name_prod'] ?>" src="/uploads/products/<?php echo $cart['image'] ?>" style=""> </a> </td>
                              <td class=""><b><?php echo $cart['name_prod'] ?> </b> </td>
                              <td class="color-red ta-center"><input type="hidden" class="id_price" value="<?php echo $cart['price_old']; ?>"> <?php echo number_format( $cart['price_old'], 0 ,'','.' ) ?>đ</td>
                              <td class="color-red ta-center">
                                 <span class="id_discount text-danger"><?php echo $cart['discount'] ?></span>% = <?php echo number_format( $cart['price_old'] - $cart['price']  , 0 ,'','.' ) ?>đ
                              </td>
                              <td class="ta-center">
                                 <div class="quantity">
                                    <input type="number" min="1" max="100" step="1" class="id_quality" name="quality" value="<?php echo $cart['qty'] ?>">
                                 </div>
                              </td>
                              <td class="color-red ta-center row-cart-amount"><span class="id_total_price text-danger"> <?php echo number_format($cart['price'] * $cart['qty'], 0,'','.') ?> </span> ₫</td>
                              <td class="ta-center"> <a href="/home/delCart/<?php echo $key ?>"  class="style-icon white" style="padding: 0" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')" ><i class="fas fa-times"></i> </a> </td>
                           </tr>
                              <?php $tongtien = $tongtien + $cart['price'] * $cart['qty']; $stt++; ?>
                           <?php endforeach; ?>
                        <?php endif; ?>
                     <?php endif; ?>
                     <tr class="tr_total_price">
                        <td colspan="4" align="right" style="border-right: none "> <b> <span>Tổng tiền thanh toán:</span> </b> </td>
                        <td class="content_total_price" colspan="6" align="right" style="border-left: none;">
                           <input id="totalAmount" type="hidden" value="<?php echo $tongtien; ?>"> <strong> 
                           <span class="mr-5 color-red total_cart_span total-cart-amount"><?php echo number_format($tongtien, 0, '', '.') ?></span>
                           <span class="text-danger"> đ </span></strong> 
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div style="text-align: right; color: teal; margin-top: 10px; font-style: italic;">Chúc mừng! Bạn được tích thêm (44 điểm ~ 43,600 vnđ) khi hoàn thành đơn này</div>
               <div id="user_point" style="text-align: right; margin-top: 10px;"></div>
               <div class="cs-flex flex-content-end cart-button" style="padding-right: 0;"> <button id="button_cart_click" class="button-cart">Cập nhật giỏ hàng</button> <a href="/dat-hang.html" class="button-address">Thực hiện thanh toán</a> </div>
            </form>
         </div>
         <!-- End DesKtop HTML -->
         <!-- Mobile HTML -->
         
         <!-- End mobile HTML -->
      </div>
   </div>
   <!-- end content --> 
</div> 