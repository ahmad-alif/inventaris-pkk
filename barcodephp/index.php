<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> -->
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
	</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"><a href="index.php">Toko Sejahtera</a></span>
        <a class="btn btn-danger mr-2" href="../admin/index.php">Kembali</a>
    </nav>

	<center>
		<div class="container">
			<div class="card text-center mt-4 col-md-8">
			  <div class="card-body">
					<center>
					<div class="col-md-3"></div>
						<h3 class="text-primary">Barcode Generator</h3>
							<hr style="border-top:1px dotted #ccc;"/>
								<div class="col-md-2"></div>
									<div class="col-md-8">
										<form method="POST">
											<div class="form-group">
												<label>Masukan Kode</label>
												<input type="text" class="form-control" name="barcode"/>
												<br />
												<center><button class="btn btn-primary" name="generate">Hasilkan!</button></center>
												<br />
												<?php include 'generate.php'?>
											</div>
										</form>
									</div>
					</center>
			  </div>
			</div>
		</div>
	</center>

	<center>
		<div class="fixed-bottom pt-1 pb-1" style="background-color: #e3f2fd;">Copyright <?= date('Y') ?> &copy All Right Reserved</div>
	</center>
</body>
</html>
