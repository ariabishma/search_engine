<?php include 'components/head.php' ?>

<!-- Tulis Konten Disini ! -->

<div class="container-fluid jumbotron">

<div class="row justify-content-center">
	<div class="col-md-4 text-center">
			<div class="font-weight-bold h1">
						Lihat Hasil
						<div class="text-muted h2">
								Keyword : Tas
						</div>
				</div>
	</div>
</div>

</div>

<div class="container-fluid mb-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card mb-3">
				<div class="card-body">
					<img width="100%" src="https://timedotcom.files.wordpress.com/2016/09/googles-18th-birthday-5661535679545344-hp2x.gif">
					<h5 class="m-0 text-center"><strong>[iklan] Google Anniversary</strong></h5>	
					<p class="m-0 text-primary text-center ">https://google.com</p>
					<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
			<?php for ($i=1;$i<=8;$i++):?>
				<div class="col-5 mb-3 text-center product">
					<a href="#">
						<img src="https://colorlib.com/preview/theme/aroma/img/product/product5.png" class="img-fluid" alt="product.jpg">
						<div class="btn btn-primary btn-md btn-buy mt-3"><i class="fa fa-cart-arrow-down">  Rp.50.000.00 </i></div>
						<i class="fa fa-shopping-cart text-dark"> Tekan untuk melihat</i>
					</a>
				</div>
			<?php endfor; ?>
			</div>
		</div>
	</div>
</div>


<!-- akhir konten -->

<?php include 'components/foot.php' ?>

