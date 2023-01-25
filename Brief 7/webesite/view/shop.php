<?php
include_once("header.php");
	require_once '../core/Database.php';
    require_once '../controller/Products.php';
    $Products = $init->displayproducts();
?>


<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2 class="font-weight-bold">List of all products</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<?php foreach ($Products as $product) { ?>
						<div class="col-md-6 col-lg-4 col-xl-3 Names">
								<div class="single-product">
								<!-- <div style="background: url(./source/image/bestseller-1.jpg) no-repeat center; " class="single-product"> -->
										<div class="part-1" style="background: url(./source/productimage/<?php echo $product['image'] ;?>) no-repeat center;background-size: cover; transition: all 0.3s;"	>
												<ul>
														<li><a><i class="fas fa-shopping-cart"></i></a></li>
														<li><a><i class="fas fa-heart"></i></a></li>
														<li><a><i class="fas fa-plus"></i></a></li>
														<li><a><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h2 class="product-title PNames"><?php echo $product['name'] ;?></h2>
												<h3 class="product-title"><?php echo $product['description'] ;?></h3>
												<h4 class="product-price">$<?php echo $product['price'] ;?></h4>
										</div>
								</div>
						</div>
						<?php };?>
						
</section>


<?php
include_once("footer.php");
?>
