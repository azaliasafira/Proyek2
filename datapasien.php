<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<!doctype html>
<html lang="en">

<head>
	<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"
						class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i
							class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System
										space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9
										unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly
										report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly
										meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your
										request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png"
									class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['username'];?></span> <i
									class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i
									class="lnr lnr-file-empty"></i>
								<span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="datamakanan.php" class="">Data Makanan</a></li>
									<li><a href="datatabung.php" class="">Data Tabung</a></li>
									<li><a href="datapasien.php" class="active">Data Pasien</a></li>
								</ul>
							</div>
						</li>
						<li><a href="Pesanan.php" class=""><i class="lnr lnr-dice"></i> <span>Pesanan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<h2>Master Data / Data Pasien</h2>
					<!-- TABLE HOVER -->
					<div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<input type="rext" class="form-control" placeholder="Search" style="border-radius: 100px;">
							<!-- <button type="button" class="btn btn-info">Search</button> -->
						</div>
					</div><br>
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Tabel Data Pasien</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include "koneksi.php";
										$query =mysqli_query($koneksi, "SELECT * FROM tb_pasien ORDER BY id_pasien ASC");
										$no=0;
										while($data =mysqli_fetch_array($query)){
										
									?>
									<tr>
										<td><?php echo $no?></td>
										<td><?php echo $data['nik']?></td>
										<td><?php echo $data['nama']?></td>
										<td><?php echo $data['alamat']?></td>
										<td>
											<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
												data-target="#myModal">Detail</button>
										</td>

									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<!-- Modal -->
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Modal Header</h4>
										</div>
										<div class="modal-body">
											<p>
											<label class="control-label">NIK :</label>
											
											<label class="control-label">Nama :</label>
											
											<label class="control-label">Alamat :</label>
											<!-- <input type="text" name="alamat" id="alamat" class="form-control" value="<?=$alamat?>"> -->
											<label class="control-label">No Hp :</label>
											<!-- <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?=$no_hp?>"> -->
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default"
												data-dismiss="modal" data-id=".$row['id_pasien'].">Close</button>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- END TABLE HOVER -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN -->
	<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">Shared by <i class="fa fa-love"></i><a
					href="https://bootstrapthemes.co">BootstrapThemes</a>
			</p>
		</div>
	</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>