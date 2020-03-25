<main id="maincontent" class="page-main products"> 
	<div class="columns col2-layout">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-additional"> 
						<div class="banner banner-sidebar">
							<a href="/rsp-whey-protein.html">
								<img src="https://www.thol.com.vn/pub/media/wysiwyg/banner/Whey-RSP-banner.jpg" alt="whey tăng cơ giảm mỡ thol">
							</a>
						</div>
          </div>
          <div class="catalog-product" style="width: 100%">
              <h3 class="title-cm"> <span>MỤC SẢN PHẨM</span> </h3> 
             
              <div class="tree-view">
                <ul class="catalog mc-tree-view" style="display: block;">
                  <?php foreach($categoryInfos as $cate){ ?>
                  <li class="mc-state-collapsed"> 
                  <a  <?php if( $_SERVER['REQUEST_URI'] == '/home/category?cate_id='.$cate['id_cate'].'&page=1'): ?>style="color: red" <?php endif ?> href="/home/category?cate_id=<?php echo $cate['id_cate']?>&page=1"><?php echo $cate['name_cate'] ?></a>
                    <!-- <ul class="mc-tree-view" style="display: block;">
                      <li class="mc-state-expanded"><a href="h/whey-protein-blend">Whey Protein Blend </a>
                      </li> 
                    </ul> -->
                    
                    <button class="mc-toggle"></button>
                  </li> 
                  <?php } ?>
                </ul>
              </div>
              <!-- search thương hiệu/huowngvi/
              <form action="" method="get">
                <p class="title-cm"> <span>Thương hiệu</span> 
                </p>
                <div class="title-line"></div>
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="catalog mc-tree-view">
                    <?php if(isset($set)): foreach($set as $s): ?>
                      <?php if($s['key_sett'] === 'trademark') :   ?>
                        <li class="check-box">
                          <label for="<?php echo $s['id_sett'] ?>" class="item"><?php echo $s['key_display']; ?></label>
                          <input name="th[]" type="checkbox" id="<?php echo $s['id_sett'] ?>" class="check-box-pro" value="<?php echo $s['id_sett']; ?>">
                        </li>
                      <?php endif; endforeach; endif ?>
                    </ul>
                  </div>
                </div>
                <p class="title-cm"> <span title="Hương vị">Hương vị</span> 
                </p>
                <div class="title-line"></div>
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="chose-size cs-flex cs-wrap">
                    <?php if(isset($set)): foreach($set as $s): ?>
                      <?php if($s['key_sett'] === 'taste_iso') :   ?>
                      <div>
                        <label class="item" for="a<?php echo $s['id_sett'] ?>"><?php echo $s['key_display']; ?></label>
                        <input name="p_2[]" type="checkbox" id="a<?php echo $s['id_sett'] ?>" class="check-box-pro" value="<?php echo $s['id_sett'] ?>">
                      </div>
                      <?php endif; endforeach; endif ?>
                      
                    </ul>
                  </div>
                </div>  
                <p class="title-cm"> <span title="Xuất xứ">Xuất xứ</span> 
                </p>
                <div class="title-line"></div>
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="chose-size cs-flex cs-wrap">
                    <?php if(isset($set)): foreach($set as $s): ?>
                      <?php if($s['key_sett'] === 'origin') :   ?>
                      <div>
                        <label class="item" for="<?php echo $s['id_sett'] ?>"><?php echo $s['key_display'] ?></label>
                        <input name="p_15[]" type="checkbox" id="<?php echo $s['id_sett'] ?>" class="check-box-pro" value="<?php echo $s['id_sett'] ?>">
                      </div> 
                      <?php endif; endforeach; endif ?>
                    </ul>
                  </div>
                </div>
              </form> -->
            </div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="category-view">
						<div class="category-image">
              <?php if($Cate['image'] == null) :?>
							<img src=" https://www.thol.com.vn/pub/media/catalog/category/nang-luong-suc-khoe.jpg" alt="Pre-workout" title="Pre-workout" class="image">
              <?php else: ?>
              <img src="<?php echo $Cate['image'] ?>" alt="Pre-workout" title="Pre-workout" class="image">
              <?php endif ?>
            </div>

						<div class="category-cms">
							<h1><?php echo $Cate['title_cate'] ?></h1>
							<p class="<?php if(isset($Cate['cms'])): ?> alert alert-success <?php endif ?>"><?php echo $Cate['cms'] ?></p>
						</div>

					</div>
					<div class="page-title-wrapper">
						<h1 class="page-title" id="page-title-heading" aria-labelledby="page-title-heading toolbar-amount">
                <span class="base" data-ui-id="page-title-wrapper"><?php echo $Cate['name_cate'] ?></span>   
               </h1>
					</div>
					
					<div class="column main">              
            <h3 class="title-cm"> 
              <span><?php echo $Cate['name_cate'] ?> </span> 
              <span class="description mr-auto">(Hiển thị <?php echo $totalPage != 0 ? $countShow : 0 ?> - <?php if($total >= 9 ):?> 9/ <?php endif ?><?php echo $total ?> sản phẩm)</span>
              <div class="filter-price"> 
                <label for="filter_price">Sắp xếp</label> 
                <select name="filter_price" id="filter_price"> 
                  <option value="0">Mặc định</option> 
                  <option value="1">Giá tăng dần</option> 
                  <option value="2">Giá giảm dần</option> 
                </select>
              </div>  
              <div class="title-line" style="clear:both; margin-top: 25px;">
              </div> 
            </h3> 
            <div class="cs-flex cs-wrap">
              <?php foreach($product as $p) : ?>
                
                <div class="product product-catalog cs-col-6 cs-col-md-4">
                  <?php if($p['discount'] > 0) :?>
                    <div class="label-deal-product">-<?php echo $p['discount'] ?>%</div> 
                    <?php endif ?>
                  <a class="image cs-flex flex-align-center flex-content-center" style="width:255px; height: 255px; display: inline-block; padding: 10px">
                    <div class="pane-tool-button cs-flex">
                      <button class="pr-10 pl-10 mr-5 redirect-login" url="/home/product/<?php echo $p['id_prod'] ?>">Xem chi tiết</button> 
                      <button  class="add-cart" value="<?php echo $p['id_prod'] ?>" ><i class="fas fa-shopping-cart " ></i>
                      </button>
                    </div> 
                    <img class="lazy" alt="<?php echo $p['name_prod'] ?>" title="<?php echo $p['name_prod'] ?>" src="/uploads/products/<?php echo $p['image'] ?>" style="">
                  </a> <a href="/home/product/<?php echo $p['id_prod'] ?>" class="title"><?php echo $p['name_prod'] ?></a>  <span style="font-size: 13px; margin-bottom: 5px; display: inline-block; line-height: 20px; color: #7B7B7B;"><?php echo $p['uses_prod'] ?></span>
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

                <?php endforeach ?>
               </div>
              <div class="pagination cs-flex">
                  <?php if($activePage  != 1): ?>
                <a class="first" href="<?php echo '/home/category?cate_id='.$Cate['id_cate'].'&page=1'; ?>" data-ci-pagination-page="1">Trang đầu</a>

                <a class="prev" data-ci-pagination-page="2" rel="prev">
                <i class="fa fa-angle-double-left"></i></a>
                  <?php endif ?>
                <?php   for ($i=0; $i < $totalPage; $i++) {  ?>
                  <a class="page-item <?php echo ($activePage == $i+1)?'active':'' ?>" href="<?php echo '/home/category?cate_id='.$Cate['id_cate'].'&page='.($i+1); ?>" data-ci-pagination-page="<?php echo ($i+1); ?>"><?php echo $i+1; ?></a>
                <?php } ?>

                  <?php if($activePage != $totalPage && $totalPage != 0): ?>
                <a class="next" data-ci-pagination-page="2" rel="next">
                <i class="fa fa-angle-double-right"></i></a>

                <a class="end" href="<?php echo '/home/category?cate_id='.$Cate['id_cate'].'&page='.$i; ?>" data-ci-pagination-page="<?php echo $totalPag-1; ?>">Trang cuối</a>
              </div>
                        <?php endif ?>
            
					</div>
				</div>
			</div>
		</div>
	</div>
</main>