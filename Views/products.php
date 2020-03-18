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
                  <li class="mc-state-collapsed"><a href="/home/category?cate_id=<?php echo $cate['id_cate']?>&page=1"><?php echo $cate['name_cate'] ?></a>
                    <!-- <ul class="mc-tree-view" style="display: block;">
                      <li class="mc-state-expanded"><a href="h/whey-protein-blend">Whey Protein Blend </a>
                      </li> 
                    </ul> -->
                    <button class="mc-toggle"></button>
                  </li> 
                  <?php } ?>
                </ul>
              </div>
              <form action="" method="get">
                <p class="title-cm"> <span>Thương hiệu</span> 
                </p>
                <div class="title-line"></div>
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="catalog mc-tree-view">
                      <li class="check-box">
                        <label for="th_18" class="item">Optimum Nutrition</label>
                        <input name="th[]" type="checkbox" id="th_18" class="check-box-pro" value="18">
                      </li>
                      <li class="check-box">
                        <label for="th_19" class="item">Muscletech</label>
                        <input name="th[]" type="checkbox" id="th_19" class="check-box-pro" value="19">
                      </li>
                      <li class="check-box">
                        <label for="th_22" class="item">Labrada</label>
                        <input name="th[]" type="checkbox" id="th_22" class="check-box-pro" value="22">
                      </li>
                      <li class="check-box">
                        <label for="th_28" class="item">Myprotein</label>
                        <input name="th[]" type="checkbox" id="th_28" class="check-box-pro" value="28">
                      </li>
                      <li class="check-box">
                        <label for="th_30" class="item">BPI Sports</label>
                        <input name="th[]" type="checkbox" id="th_30" class="check-box-pro" value="30">
                      </li>
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
                      <div>
                        <label class="item" for="282">Vanilla Ice Cream</label>
                        <input name="p_2[]" type="checkbox" id="282" class="check-box-pro" value="82">
                      </div>
                      <div>
                        <label class="item" for="284">Cookies &amp; Cream</label>
                        <input name="p_2[]" type="checkbox" id="284" class="check-box-pro" value="84">
                      </div>
                      <div>
                        <label class="item" for="286">Strawberry Cream</label>
                        <input name="p_2[]" type="checkbox" id="286" class="check-box-pro" value="86">
                      </div>
                      <div>
                        <label class="item" for="287">Milk Chocolate</label>
                        <input name="p_2[]" type="checkbox" id="287" class="check-box-pro" value="87">
                      </div>
                      <div>
                        <label class="item" for="290">Double Rich Chocolate</label>
                        <input name="p_2[]" type="checkbox" id="290" class="check-box-pro" value="90">
                      </div>
                      <div>
                        <label class="item" for="292">Strawberry</label>
                        <input name="p_2[]" type="checkbox" id="292" class="check-box-pro" value="92">
                      </div>
                      <div>
                        <label class="item" for="2100">Vanilla</label>
                        <input name="p_2[]" type="checkbox" id="2100" class="check-box-pro" value="100">
                      </div>
                      <div>
                        <label class="item" for="2108">Banana</label>
                        <input name="p_2[]" type="checkbox" id="2108" class="check-box-pro" value="108">
                      </div>
                      <div>
                        <label class="item" for="2115">French Vanilla Swirl</label>
                        <input name="p_2[]" type="checkbox" id="2115" class="check-box-pro" value="115">
                      </div>
                      <div>
                        <label class="item" for="2116">Chocolate Fudge Brownie</label>
                        <input name="p_2[]" type="checkbox" id="2116" class="check-box-pro" value="116">
                      </div>
                      <div>
                        <label class="item" for="2123">Smores</label>
                        <input name="p_2[]" type="checkbox" id="2123" class="check-box-pro" value="123">
                      </div>
                      <div>
                        <label class="item" for="2125">Chocolate Brownie</label>
                        <input name="p_2[]" type="checkbox" id="2125" class="check-box-pro" value="125">
                      </div>
                      <div>
                        <label class="item" for="2129">Chocolate Smooth</label>
                        <input name="p_2[]" type="checkbox" id="2129" class="check-box-pro" value="129">
                      </div>
                      <div>
                        <label class="item" for="2130">Chocolate Mint</label>
                        <input name="p_2[]" type="checkbox" id="2130" class="check-box-pro" value="130">
                      </div>
                      <div>
                        <label class="item" for="2167">Chocolate Ice Cream</label>
                        <input name="p_2[]" type="checkbox" id="2167" class="check-box-pro" value="167">
                      </div>
                      <div>
                        <label class="item" for="2200">Birthday Cake</label>
                        <input name="p_2[]" type="checkbox" id="2200" class="check-box-pro" value="200">
                      </div>
                      <div>
                        <label class="item" for="2212">Delicious Strawberry</label>
                        <input name="p_2[]" type="checkbox" id="2212" class="check-box-pro" value="212">
                      </div>
                      <div>
                        <label class="item" for="2213">Extreme Milk Chocolate</label>
                        <input name="p_2[]" type="checkbox" id="2213" class="check-box-pro" value="213">
                      </div>
                      <div>
                        <label class="item" for="2214">Rocky Road</label>
                        <input name="p_2[]" type="checkbox" id="2214" class="check-box-pro" value="214">
                      </div>
                      <div>
                        <label class="item" for="2220">Mocha Cappuccino</label>
                        <input name="p_2[]" type="checkbox" id="2220" class="check-box-pro" value="220">
                      </div>
                      <div>
                        <label class="item" for="2221">French Vanilla Creme</label>
                        <input name="p_2[]" type="checkbox" id="2221" class="check-box-pro" value="221">
                      </div>
                      <div>
                        <label class="item" for="2224">Cinnamon Swirl</label>
                        <input name="p_2[]" type="checkbox" id="2224" class="check-box-pro" value="224">
                      </div>
                      <div>
                        <label class="item" for="2225">Decadent Brownie Cheesecake</label>
                        <input name="p_2[]" type="checkbox" id="2225" class="check-box-pro" value="225">
                      </div>
                      <div>
                        <label class="item" for="2226">Mocha Cappuccino Swirl</label>
                        <input name="p_2[]" type="checkbox" id="2226" class="check-box-pro" value="226">
                      </div>
                      <div>
                        <label class="item" for="2236">Double Rich Chocolate</label>
                        <input name="p_2[]" type="checkbox" id="2236" class="check-box-pro" value="236">
                      </div>
                      <div>
                        <label class="item" for="2381">Peanut Butter Candy Bar</label>
                        <input name="p_2[]" type="checkbox" id="2381" class="check-box-pro" value="381">
                      </div>
                      <div>
                        <label class="item" for="2382">Vanilla Cookie</label>
                        <input name="p_2[]" type="checkbox" id="2382" class="check-box-pro" value="382">
                      </div>
                      <div>
                        <label class="item" for="2470">Cookie Cream</label>
                        <input name="p_2[]" type="checkbox" id="2470" class="check-box-pro" value="470">
                      </div>
                      <div>
                        <label class="item" for="2472">Chocolate Browie</label>
                        <input name="p_2[]" type="checkbox" id="2472" class="check-box-pro" value="472">
                      </div>
                      <div>
                        <label class="item" for="2473">Milk Tea</label>
                        <input name="p_2[]" type="checkbox" id="2473" class="check-box-pro" value="473">
                      </div>
                    </ul>
                  </div>
                </div> 
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="chose-size cs-flex cs-wrap">
                      <div>
                        <label class="item" for="11105">1 scoop</label>
                        <input name="p_11[]" type="checkbox" id="11105" class="check-box-pro" value="105">
                      </div>
                    </ul>
                  </div>
                </div>
                <p></p>
                <div class="tree-view">
                  <div class="layout-scroll">
                    <ul class="chose-size cs-flex cs-wrap">
                      <div>
                        <label class="item" for="13349">Milk Protein Isolate</label>
                        <input name="p_13[]" type="checkbox" id="13349" class="check-box-pro" value="349">
                      </div>
                      <div>
                        <label class="item" for="13355">Whey Protein Isolate</label>
                        <input name="p_13[]" type="checkbox" id="13355" class="check-box-pro" value="355">
                      </div>
                      <div>
                        <label class="item" for="13358">Protein Concentrate</label>
                        <input name="p_13[]" type="checkbox" id="13358" class="check-box-pro" value="358">
                      </div>
                      <div>
                        <label class="item" for="13360">Protein trải dài</label>
                        <input name="p_13[]" type="checkbox" id="13360" class="check-box-pro" value="360">
                      </div>
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
                      <div>
                        <label class="item" for="15103">USA</label>
                        <input name="p_15[]" type="checkbox" id="15103" class="check-box-pro" value="103">
                      </div>
                      <div>
                        <label class="item" for="15160">UK</label>
                        <input name="p_15[]" type="checkbox" id="15160" class="check-box-pro" value="160">
                      </div>
                    </ul>
                  </div>
                </div>
              </form>
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
              <span class="description mr-auto">(Hiển thị <?php echo $countShow ?> - <?php if($total >= 9 ):?> 9/ <?php endif ?><?php echo $total ?> sản phẩm)</span>
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
                    <div class="time-deal-product" time="7015"> <span><i class="far fa-clock"></i> <span class="display-time">01:56:56</span></span>
                    </div>
                    <?php endif ?>
                  <a href="/home/product/<?php echo $p['id_prod'] ?>" class="image cs-flex flex-align-center flex-content-center" style="width:255px; height: 255px; display: inline-block; padding: 10px">
                    <div class="pane-tool-button cs-flex">
                      <button class="pr-10 pl-10 mr-5">Xem chi tiết</button>
                      <button class="mr-5 btn-popup-detail" smell="2" current="/whey-protein-blend" base="/" product="83"><i class="fas fa-eye"></i>
                      </button>
                      <button class="redirect-login" url="/dang-nhap.html"><i class="far fa-heart"></i>
                      </button>
                    </div>
                    <img class="lazy" alt="<?php echo $p['name_prod'] ?>" title="<?php echo $p['name_prod'] ?>" src="/uploads/products/<?php echo $p['image'] ?>" style="">
                  </a> <a href="/home/product/<?php echo $p['id_prod'] ?>" class="title"><?php echo $p['name_prod'] ?></a>  <span style="font-size: 13px; margin-bottom: 5px; display: inline-block; line-height: 20px; color: #7B7B7B;"><?php echo $p['uses_prod'] ?></span>
                  <div class="star" total="5" point="5">
                  </div>
                  <div class="price"> <span class="main"><?php echo number_format( $p['price'], 0 ,'','.' ) ?> VND </span>  <span class="old"><?php echo number_format( $p['price_manu'], 0 ,'','.' ) ?> VND</span>
                  </div>
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

                  <?php if($activePage != $totalPage): ?>
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
 