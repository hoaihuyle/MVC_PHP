
<section id="search">
<div class="session">
	<div class="main-content">
		<div class="cs-flex cs-wrap-reverse">
			<div class="cs-col-lg-3">
				<h3 class="title-cm"> <span>TÌM KIẾM NHIỀU NHẤT</span> </h3> 
				<div class="tree-view">
					<ul>

						<?php if(isset($sp_views)): foreach($sp_views as $sp): ?>
						<li style="height: 40px; overflow: hidden;"><a href="/home/product/<?php echo $sp['id_prod'] ?>" title="<?php echo $sp['name_prod'] ?>"><?php echo $sp['name_prod'] ?></a>
						</li>
						<?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			<div class="cs-col-lg-9">
				<h3 class="title-cm"> <span><?php echo count($product); ?> kết quả </span> <div class="title-line"></div> </h3> 
				<div class="cs-flex cs-wrap">

				<?php if(isset($product)): foreach($product as $p): ?>
					<div class="product product-catalog cs-col-6 cs-col-md-4">
						<a class="image cs-flex flex-align-center flex-content-center">
						<div class="pane-tool-button cs-flex"> 
                     <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $p['id_prod'] ?>">Xem chi tiết</button> 
                     <button class=" add-cart"  value="<?php echo $p['id_prod'] ?>">
                        <i class="fas fa-shopping-cart"></i>
                     </button>
                  </div>
							<img class="lazy" alt="<?php echo $p['name_prod']?>" title="<?php echo $p['name_prod']?>"  src="/uploads/products/<?php echo $p['image']?>" style="width: 200px">
						</a> <a href="/home/product/<?php echo $p['id_prod']?>" class="title"><?php echo $p['name_prod']?></a> 
						<div class="star" total="5" point="5"> 
						</div>
						<?php if($p['discount'] != 0): ?>
                        <span class="price"  price="<?php echo $p[0]['price'] ?>">
                                        <span  class="main" content="<?php echo number_format( ((100 - $p['discount']) * $p['price'])/100 , 0 ,'','.' )?>">
                                            <?php echo number_format( ((100 - $p['discount']) * $p['price'])/100 , 0 ,'','.' )?>
                                        </span>
                                        <span   class="main" content="VND"> đ</span>
                                        <span class="old"> - <?php echo number_format($p['price'],0,'','.') ?> đ</span> 
                        </span> 
                        <?php else: ?>
                            <div class="price"> <span class="main"><?php echo number_format($p['price'],0,'','.') ?>đ</span> </div>
							<?php endif ?>
					</div>  
				<?php endforeach; endif;  ?>
				<!-- </div>
				<div class="pagination cs-flex"> <strong>1</strong><a href="tim-kiemcadd.html?page=45" data-ci-pagination-page="2">2</a><a href="tim-kiem9907.html?page=90" data-ci-pagination-page="3">3</a><a href="tim-kiemcadd.html?page=45" data-ci-pagination-page="2" rel="next"><i class="fa fa-angle-double-right"></i></a><a href="tim-kiem9d64.html?page=270" data-ci-pagination-page="7">Trang cuối</a> 
				</div> -->
			</div>
		</div>
	</div>
</div>
</section>
