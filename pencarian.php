<?php include 'components/head.php' ?>



<!-- Tulis Konten Disini ! -->
<!-- Tulis Konten Disini ! -->
<div class="container-fluid">
	<div class="row">
	
		<div style="position:relative;min-height:100" class="col-md-12 py-5">
		<div class="bg-image">
		</div>
			<div class="container" style="position:inherit;padding-top:50px;padding-bottom:50px;">
				<!-- <h2 class="text-white text-center">Cari Produk Dari Internet</h2> -->
				<form action="pencarian.php">
					  <div class="input-group form-index">
					      <input value="<?= $_GET['req']?>" type="text" name="req" class="form-control input-radius py-4" placeholder="Jelajahi Produk Dari Seluruh situs internet..." aria-label="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-primary btn-radius py-2" type="submit">
					        	<i class="fa fa-search"></i>
					        </button>
					      </span>
					    </div>
					<span class="ml-2 text-white">Hasil Pencarian Dari : <?= $_GET['req'] ?></span>
				</form>
			</div>	    
		</div>
	</div>
</div>
	
		<!-- img src="https://colorlib.com/preview/theme/aroma/img/home/hero-banner.png" class="img-fluid  img-landing shadow"> -->
	
<!-- akhir konten -->

<!-- list item product -->

<div class="container mt-5 mb-3">
	<div class="row">
		<div class="h3 start-text">
			<strong>Hasil <span class="border-bottom border-primary">Pencarian</span></strong>
		</div>
	</div>

</div>

<div class="container mb-5">
	<div class="row justify-content-center">
	
		<div class="col-md-12">
			<div class="row">
			
					<?php
						$rq = $_GET['req'];
						$q = mysqli_query($conn,"SELECT * FROM barang WHERE MATCH(judul)
						AGAINST('$rq' IN NATURAL LANGUAGE MODE) OR keyword LIKE '%$rq%' ORDER BY rand() LIMIT 105");
						while ($r=mysqli_fetch_array($q)):
					?>
					<div class="col-md-4 mb-3">
						<div class="card shadow" style="height:500px;position:relative;">
							<!-- <img src="<?= $r['media'] ?>" class="img-fluid" alt="product.jpg"> -->
							<div style="width:100%;height:280px;background-size:cover;background-image:url('<?= $r['media'] ?>'">
							</div>		
							<div class="card-body">
							<div class="font-weight-bold text-title" > <?= substr($r['judul'],0,60)  ?>... </div>
							<hr>
							<div class="text-muted"> <i class="fa fa-tags"></i> Accessories</div>
							<div class="text-muted"> <i class="fa fa-user"></i> Bukalapak</div>

							<a target="_blank" href="<?= $r['url'] ?>"><button style="position:absolute;border-radius:50px;bottom:10px; left:5%;width:90%;" class="btn btn-primary mt-3 btn-block btn-buy">
								<i class="fa fa-cart-arrow-down">  Rp.<?= number_format($r['harga']) ?> </i>
							</button></a>
								
							</div>
						</div>
					</div>
					<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>



<!-- akhir konten -->

<?php include 'components/foot.php' ?>

