<?php 
	include 'header.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$productss = mysqli_query($conn,"SELECT * FROM product WHERE cat_id = $id");

		$limit = 4;
		// $productss = mysqli_query($conn,"SELECT * FROM product WHERE status = 1");
		
		$total = mysqli_num_rows($productss);
		$page = ceil($total/$limit);
		(isset($_GET['page'])) ? $curent_page = $_GET['page']: $curent_page=1;
		$start = ($curent_page - 1)*$limit;
		// print_r($start); die;

		$product = mysqli_query($conn,"SELECT * FROM product WHERE status = 1 LIMIT $start,$limit");
		// foreach ($product as $value) {
		// 	echo '<pre>';
		// 	print_r($value);
		// }	
	}
	else{
		
		// tổng số lượng sp là 8
		//limit 4
		// => page = 8/4
		// start = 0 , 4 , 8
		// curent_page : 1, 2, 3
		// tinhs start cho trang 1 = 1-1 * 4;
		// tinhs start cho trang 2 = 2-1 * 4;
		// tinhs start cho trang 2 = 3-1 * 4;
		$limit = 4;
		$productss = mysqli_query($conn,"SELECT * FROM product WHERE status = 1");
		
		$total = mysqli_num_rows($productss);
		$page = ceil($total/$limit);
		(isset($_GET['page'])) ? $curent_page = $_GET['page']: $curent_page=1;
		$start = ($curent_page - 1)*$limit;
		// print_r($start); die;

		$product = mysqli_query($conn,"SELECT * FROM product WHERE status = 1 LIMIT $start,$limit");

	}
 ?>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Trang sản phẩm</h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<?php foreach ($product as $value) : ?>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="uploads/<?php echo $value['image'] ?>" alt="">
						<div class="caption">
							<h3><?php echo $value['name']; ?></h3>
							<p>
								...
							</p>
							<p>
								<a href="#" class="btn btn-primary">Action</a>
								<a href="#" class="btn btn-default">Action</a>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			
		</div>
		<ul class="pagination">
			<?php if($curent_page>1) :?>
				<li><a href="product.php?page=<?php echo $curent_page-1 ?>">&laquo;</a></li>
			<?php endif ?>
				<?php for($i=1;$i<=$page;$i++) :
					($curent_page == $i)?$active = 'class="active"' : $active='';
					?>
				<li <?php echo $active ?>><a href="product.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
				<?php endfor ?>
				<?php if($curent_page<$page) :?>
				<li ><a href="product.php?page=<?php echo $curent_page +1 ?>">&raquo;</a></li>
				<?php endif ?>
			</ul>
	</div>
 <?php 
 include 'footer.php';
  ?>