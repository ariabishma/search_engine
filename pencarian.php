<?php include 'components/head.php' ?>

<style type="text/css">
	.bg-image {
		background-image:url('assets/img/bg-image.jpg');
		background-size:cover;
		-webkit-filter:brightness(50%);
		width: 100%;
		height: 200px;
		position: absolute;
	}

	.input-radius {
		border-radius: 50px;
		border-right: 0;
		border-bottom-right-radius: 0;
		border-top-right-radius: 0;
	}

	.btn-radius {
		border-radius: 50px;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-left: 0;
	}

	.form-index {
		margin-top: 30px;
		margin-bottom: 30px;
	}
</style>

<!-- Tulis Konten Disini ! -->
<div class="container-fluid">
	<div class="row">
		<div class="bg-image">
		</div>
		<div class="col-md-12">
			<div class="container">
				<form action="pencarian.php">
					  <div class="input-group form-index">
					      <input type="text" name="req" class="form-control input-radius" placeholder="Jelajahi Produk Dari Seluruh situs internet..." aria-label="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-primary btn-radius" type="submit">
					        	<i class="fa fa-search"></i>
					        </button>
					      </span>
					    </div>
					<span class="ml-2 text-white">Contoh : Laptop</span>
				</form>
				<hr class="border-primary">
				<h3 class="text-white">Hasil Pencarian Dari : <?= $_GET['req'] ?></h3>
			</div>	    
		</div>
	</div>
</div>
<!-- ----------------------------------------------------------- -->
<!-- div class="bg-image" style="border-radius: 0;">
	<form action="pencarian.php">

					  <div class="input-group form-index">
					      <input type="text" name="req" class="form-control input-radius" placeholder="Jelajahi Produk Dari Seluruh situs internet..." aria-label="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-primary btn-radius" type="submit">
					        	<i class="fa fa-search"></i>
					        </button>
					      </span>
					    </div>
					<span class="ml-2 text-white">Contoh : Laptop</span>
				</form>

		<span>Contoh : Laptop</span>
		<input name="req" value="<?= $_GET['req'] ?>" type="text" class="form-control py-4" placeholder="Jelajahi Produk Dari Seluruh situs internet...">
		<button class="btn btn-primary  mt-3" style="display:block"><i class="fa fa-shopping-bag"></i> JELAJAHI SEKARANG</button>
	</form>

	<hr>
	<h3>Hasil Pencarian Dari : <?= $_GET['req'] ?></h3>
</div> -->

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
						<div class="card shadow mt-2" style="height:500px;position:relative;">
							<!-- <img src="<?= $r['media'] ?>" class="img-fluid" alt="product.jpg"> -->
							<div style="width:100%;height:280px;background-size:cover;background-image:url('<?= $r['media'] ?>'">
							</div>		
							<div class="card-body">
							<div class="font-weight-bold text-title" > <?= substr($r['judul'],0,60)  ?>... </div>
							<hr class="border-primary">
							<div class="text-muted"> <i class="fa fa-tags"></i> Accessories</div>
							<div class="text-muted"> <i class="fa fa-user"></i> Bukalapak</div>

							<a target="_blank" href="<?= $r['url'] ?>"><button style="position:absolute;bottom:10px; left:5%;width:90%;border-radius:50px;" class="btn btn-primary mt-3 btn-block btn-radius">
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

