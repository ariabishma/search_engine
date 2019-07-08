<?php include 'components/head.php' ?>

<!-- Tulis Konten Disini ! -->
<div class="container-fluid">
<div class="row">

	<div class="col-md-3 col-1 bg-primary head-landing">
			
	</div>
	<div class="col-md-9 col-11 jumbotron head-landing">
	     <div class="text-sub">Berbelanja ini menyenangkan</div>
		 <div class="text-infor">JELAJAHI PRODUK TERBAIK KAMI</div>
		 <p class="text-par"> Sekarang ingin berbelanja sangat mudah, dengan handphone semua macam produk dalam genggaman anda. </p>
		 <a href="#" class="btn btn-primary  ml-pas btn-lg shadow text-white" role="button"><i class="fa fa-shopping-bag"></i> JELAJAHI SEKARANG</a>
	</div>
	
</div>
</div>
	
		<img src="https://colorlib.com/preview/theme/aroma/img/home/hero-banner.png" class="img-fluid  img-landing shadow">
	
<!-- akhir konten -->

<!-- list item product -->

<div class="container">

	<div class="h1 start-text">
	Barang <span class="border-bottom border-primary">Populer</span>
	</div>
	
	<div class="row justify-content-center mt-5 mx-5 start-img bg-white">
	
		<?php  for($i=1;$i<=4;$i++): ?>
		<div class="col-md-6 text-center">
			<img src="https://colorlib.com/preview/theme/aroma/img/product/product5.png" class="img-fluid">
			<div class="text-muted"> <i class="fa fa-tags"></i> Accessories</div>
			<div class="font-weight-bold text-title"> Tas </div>
			 <a href="#" class="btn btn-primary btn-buy btn-lg font-weight-bold mb-5 shadow" role="button"> <i class="fa fa-cart-arrow-down"></i> Rp.50.000.00 </a>
	</div>
	<?php endfor; ?>
	
</div>

<!-- end liat item product -->

<?php $footer = "footer"; ?>

<?php include 'components/foot.php' ?>

