<?php  $tongtien = 0; $stt = 1 ?>
<div class="session" id="card-shop">
  <div class="main-content">
    <div class="cs-flex col-12 cs-col-12">
      <div class="title-cm" style="width: 100%">
        <h3 style="padding: 10px; text-align: center">Giỏ hàng của bạn có <span class="color-red total-cart-items"
            style="font-size: 25px"><?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']) ?></span> sản phẩm
        </h3>
      </div>
      <!-- DesKtop HTML -->
      <div class="table-desktop table-responsive">
        <form action="/home/updateCart" method="post">
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
                <td class="ta-center"><?php echo $stt ?>
                  <input style="display:none" type="text" name="idProd[]" id="" value="<?php echo $key ?>">
                </td>
                <td class="img_image"> <a id=" <?php echo $key ?>" href="/home/product/<?php echo $key ?>"
                    class="m-auto cs-flex"> <img class="m-auto lazy" alt="<?php echo $cart['name_prod'] ?>"
                      src="/uploads/products/<?php echo $cart['image'] ?>" style=""> </a> </td>
                <td class=""><b><?php echo $cart['name_prod'] ?> </b> </td>
                <td class="color-red ta-center"><input type="hidden" class="id_price"
                    value="<?php echo $cart['price_old']; ?>">
                  <?php echo number_format( $cart['price_old'], 0 ,'','.' ) ?>đ
                </td>
                <td class="color-red ta-center">
                  <span class="id_discount text-danger"><?php echo $cart['discount'] ?></span>% =
                  <?php echo number_format( $cart['price_old'] - $cart['price']  , 0 ,'','.' ) ?>đ

                </td>
                <td class="ta-center">
                  <div class="quantity">
                    <input type="number" min="1" max="100" step="1" class="id_quality" name="quality[]"
                      value="<?php echo $cart['qty'] ?>">
                  </div>
                </td>
                <td class="color-red ta-center row-cart-amount"><span class="id_total_price text-danger">
                    <?php echo number_format($cart['price'] * $cart['qty'], 0,'','.') ?> </span> ₫</td>
                <td class="ta-center"> <a href="/home/delCart/<?php echo $key ?>" class="style-icon white"
                    style="padding: 0" onclick="return confirm('Dữ liệu của bạn sẽ bị mất, bạn chắc chắn chứ ?')"><i
                      class="fas fa-times"></i> </a> </td>
              </tr>
              <?php $tongtien = $tongtien + $cart['price'] * $cart['qty']; $stt++; ?>
              <?php endforeach; ?>
              <?php endif; ?>
              <?php endif; ?>
              <tr class="tr_total_price">
                <td colspan="4" align="right" style="border-right: none "> <b> <span>Tổng tiền thanh toán:</span> </b>
                </td>
                <td class="content_total_price" colspan="6" align="right" style="border-left: none;">
                  <input id="totalAmount" type="hidden" value="<?php  echo $tongtien;?>" name="tongtienup"> <strong>
                    <?php if(isset($tongtienup)): ?>
                    <span
                      class="mr-5 color-red total_cart_span total-cart-amount"><?php echo number_format($tongtienup, 0, '', '.') ?></span>
                    <?php else: ?>
                    <span
                      class="mr-5 color-red total_cart_span total-cart-amount"><?php echo number_format($tongtien, 0, '', '.') ?></span>
                    <?php endif; ?>

                    <span class="text-danger"> đ </span></strong>
                </td>
              </tr>
            </tbody>
          </table> 
          <div style="text-align: right; color: teal; margin-top: 10px; font-style: italic;">Chúc mừng! Bạn được tích
            thêm (44 điểm ~ 43,600 vnđ) khi hoàn thành đơn này</div>
          <div id="user_point" style="text-align: right; margin-top: 10px;"></div>
          <div class="cs-flex flex-content-end cart-button" style="padding-right: 0;">
            <input id="button_cart_click" class="button-cart" value="Cập nhật giỏ hàng" type="submit">
           <?php if(isset($_SESSION['cart']) && $_SESSION['cart'] != null): ?>
            <?php if(isset($_SESSION['name_id'])): ?>
               <a class="button-address" data-toggle="modal" data-target="#account">Thực hiện thanh toán với tài khoản</a>
               </div>
               
               <?php else: ?>
               <a class="button-address" data-toggle="modal" data-target="#cart">Thực hiện thanh toán</a>
               </div>
            <?php endif; endif ?>
      </form>
    </div>
    <!-- Modal -->
    <div id="cart" class="modal fade" style=" z-index: 100000" role="dialog">
      <div class="modal-dialog _th_ft_downloads">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3>Quá trình thanh toán</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <span style="color: red"> Chú ý: Khách hàng chỉ cần lưu thông tin của mình, bên phía cửa hàng chúng
              tôi sẽ liên hệ sớm nhất.! </span>
            <p class="alert alert-info"><span style="font-size: large;s"><strong>Ngân hàng thương mại cổ phần
                  Ngoại
                  thương Việt Nam</strong></span><br> Chủ tài khoản: <span style="font-size: medium; font-weight:600">LÊ
                VIẾT QUANG</span><br>Số tài khoản: <span
                style="font-size: medium; font-weight:600">161001701893</span><br>VIETCOMBANK<span
                style="font-size: medium; font-weight:600"> CHI NHÁNH HUẾ</span></p>
            <form action="/home/saveCart" method="POST">
              <div class="form-group">
                <label for="fullname"><span style="color:red">* </span>Tên khách hàng:</label>
                <input require id="fullname" placeholder="Vui lòng nhập tên khách hàng" name="fullname" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Vui lòng nhập địa chỉ email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone"><span style="color:red">* </span>Số điện thoại:</label>
                <input type="number" name="phone" placeholder="Vui lòng nhập số điện thoại" require class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="address"><span style="color:red">* </span>Địa chỉ:</label>
                <textarea name="address" class="form-control" placeholder="Vui lòng nhập địa chỉ" rows="5" id="address"></textarea>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Đóng</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>

    <!-- Modal -->
    <div id="account" class="modal fade" style=" z-index: 100000" role="dialog">
      <div class="modal-dialog _th_ft_downloads">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3>Quá trình thanh toán</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p class="alert alert-info"><span style="font-size: large;s"><strong>Ngân hàng thương mại cổ phần
                  Ngoại
                  thương Việt Nam</strong></span><br> Chủ tài khoản: <span style="font-size: medium; font-weight:600">LÊ
                VIẾT QUANG</span><br>Số tài khoản: <span
                style="font-size: medium; font-weight:600">161001701893</span><br>VIETCOMBANK<span
                style="font-size: medium; font-weight:600"> CHI NHÁNH HUẾ</span></p>
            <span> <b style="color:red">Chú ý:</b> Khách hàng đã có thông tin tài khoản.</br> Vui lòng nhấn <b
                style="color: red"> xác nhận đặt hàng </b> hoặc <b style="color: red"> Thay đổi thông tin khách hàng
              </b>. Nhân viên cửa hàng sẽ liên hệ sớm nhất.! </span>
            <form action="/home/cartAccount" method="POST" style="padding-top: 30px; text-align: center">
              <div class="form-group " style=" margin-bottom: 3rem;">
                <button type="submit" class="btn btn-primary">Xác nhận đặt hàng</button>
                <a href="/account/editMyUser" class="btn btn-success"> Thay đổi thông tin khách hàng</a>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-warning" data-dismiss="modal">Đóng</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>
    <!-- End DesKtop HTML -->
    <!-- Mobile HTML -->

    <!-- End mobile HTML -->
  </div>
</div>
<!-- end content -->
</div>