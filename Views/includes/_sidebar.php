<div class="breadcrumbs"> 
<!-- check url isset category or product -->
         <div class="container">
            <ul class="items">
               <li class="item home">
                  <a href="/" title="Đi đến trang chủ">Trang chủ</a>
               </li>
               <?php if(isset($prod)): ?>
                <li class="item">
                    <a href="/home/category?cate_id=<?php echo $CateName['id_cate'] ?>&page=1"" title=""><?php echo $CateName['name_cate']?></a>
                </li>
                <li class="item product">
                    <strong><?php echo $prod[0]['name_prod'] ?></strong>
                </li>
              <?php elseif(isset($Cate)): ?>
               <li class="item product">
                  <strong><?php echo $Cate['name_cate'] ?></strong>
               </li>
               <?php endif ?>
               
            </ul>
         </div>
      </div> 