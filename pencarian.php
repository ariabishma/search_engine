<?php include 'components/head.php' ?>

<!-- Tulis Konten Disini ! -->
<div class="jumbotron">
	<form action="pencarian.php">
		<span>Contoh : Laptop</span>
		<input name="req" value="<?= $_GET['req'] ?>" type="text" class="form-control py-4" placeholder="Jelajahi Produk Dari Seluruh situs internet...">
		<button class="btn btn-primary  mt-3" style="display:block"><i class="fa fa-shopping-bag"></i> JELAJAHI SEKARANG</button>
	</form>
	<hr>
	<h3>Hasil Pencarian Dari : <?= $_GET['req'] ?></h3>
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
						<div class="card" style="height:500px;position:relative;">
							<!-- <img src="<?= $r['media'] ?>" class="img-fluid" alt="product.jpg"> -->
							<div style="width:100%;height:280px;background-size:cover;background-image:url('<?= $r['media'] ?>'">
							</div>		
							<div class="card-body">
							<div class="font-weight-bold text-title" > <?= substr($r['judul'],0,60)  ?>... </div>
							<hr>
							<div class="text-muted"> <i class="fa fa-tags"></i> Accessories</div>
							<div class="text-muted"> <i class="fa fa-user"></i> Bukalapak</div>

							<a target="_blank" href="<?= $r['url'] ?>"><button style="position:absolute;bottom:10px; left:5%;width:90%;" class="btn btn-primary mt-3 btn-block btn-buy">
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

