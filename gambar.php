<?php include 'components/head.php'; ?>
    <!-- konten tulis disini -->

		
<div class="row">
	<div class="col-md-6 ml-130 mx-20">
	
			<form action="" method="">
		
				<div  class="form-group">
			
				<input type="text" class="form-control mt-3" placeholder="Cari..">
				
			</div>
			
			<button type="submit" class="btn btn-success float-right mt-54">Cari</button>

		</form>
	
	</div>
</div>

<div class="container mb-4">

	<div class="row justify-content-center">
	<?php for ($i=1;$i <= 6 ; $i++): ?>
	<div class="col-md-4">
	
		<img src="https://timedotcom.files.wordpress.com/2016/09/googles-18th-birthday-5661535679545344-hp2x.gif" alt="gambar" class="img-thumbnail mt-4">
		<div class="text-white bg-success rounded px-2">title</div>
	</div>
	<?php endfor; ?>
</div>

</div>



	<!-- akhir konten disini -->
<?php include 'components/foot.php'; ?>