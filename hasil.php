<?php include 'header.php';  ?>
<br>
<script>
	function myFunction() {
		window.print();
	}
</script>
<h3 align="center" style="background: rgb(240, 255, 66); padding: 10px;">Hasil Diagnosa</h3><br>
<div class="container">
	<button style="float:right;" class="btn btn-success" onclick="myFunction()">CETAK</button>
</div>
<div class="container col-6">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<h5>PENYAKIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
			</span>
		</div>
		<textarea class="form-control" rows="1" readonly><?php echo "$penyakit"; ?></textarea>
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<h5>DEFINISI&nbsp;&nbsp;&nbsp;</h5>
			</span>
		</div>
		<textarea class="form-control" rows="6" readonly><?php echo "$definisi"; ?></textarea>
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<h5>PENYEBAB&nbsp;&nbsp;&nbsp;</h5>
			</span>
		</div>
		<textarea class="form-control" rows="6" readonly><?php echo "$penyebab"; ?></textarea>
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<h5>PENGENDALIAN TEKNIS</h5>
			</span>
		</div>
		<textarea class="form-control" rows="6" readonly><?php echo "$pengendalian_teknis"; ?> </textarea>
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<h5>PENGENDALIAN KIMIA</h5>
			</span>
		</div>
		<textarea class="form-control" rows="6" readonly><?php echo "$pengendalian_kimia"; ?> </textarea>
	</div>
</div>
<br>
<?php include 'footer.php'; ?>