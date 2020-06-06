<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PT ROSALIA INDAH</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">KEMBALI</a></h1>
					<nav id="nav">
						<ul>
							<!-- <li><a href="index.html">Home</a></li> -->
							<!-- <li> -->
								<!-- <a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="executiveplusshd.html">Executive Plus SHD</a></li>
											<li><a href="superexecutive.html">Super Executive</a></li>
											<li><a href="executiveplus.html">Executive Plus</a></li>
											<li><a href="executive.html">Executive</a></li>
											<li><a href="bisnis.html">Bisnis Ac Toilet ( VIP )</a></li>
										</ul> -->
									<!-- </li> -->
								</ul>
							</li>
							<!-- <li><a href="elements.html">Elements</a></li> -->
							<!-- <li><a href="login.html" class="button primary">Masuk</a></li> -->
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>TIKET</h2>
							<!-- <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p> -->
						</header>

						<!-- Content -->
							<section id="content">
								<form method="post" action="aksi_tiket.php">
								<a  class="image fit"><img src="images/rosin28.jpg" alt="" /></a>
								<table>
	                            <tr>
		                        <td>Nama_Pemesan</td><td>:</td>
		                        <td><input type="text" name="Nama_pemesan" maxlength="40"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	                            </tr>
	                            <tr>
		                        <td>Tanggal_Keberangkatan</td><td>:</td>
		                        <td><input style="background-color: black;" type="date" name="Tanggal_Keberangkatan" maxlength="30" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	                            </tr>
	                            <tr>
		                        <td>Jumlah_Kursi</td><td>:</td>
		                        <td><input type="text" name="Jumlah_Kursi" maxlength="30"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	                            </tr>
	                            <tr>
		                        <td>Kelas</td>
				                    <td>:</td>
				                      <td>
					                    <select name="Kelas">
						                <option value="-">- Kelas -</option>
						                <option value="executiveplus">Executive Plus</option>
						                <option value="superexecutive">Super Executive</option>
						                <option value="executive">Executive</option>
					                    </select>
				                       </td>
	                            </tr>
	                            <tr>
		                        <td>Kota_Asal</td>
				               <td>:</td>
				               <td>
					           <select name="Kota_Asal">
						       <option value="-">- Kota_Asal -</option>
						<option value="BD.Lampung">Bd.Lampung</option>
						<option value="Metro">Metro</option>
					</select>
	                            </tr>
	                            <tr>
		                        <td>Kota_Tujuan</td>
				               <td>:</td>
				               <td>
					           <select name="Kota_Tujuan">
						       <option value="-">- Kota_Tujuan -</option>
						        <option value="Semarang">Semarang</option>
						        <option value="Solo">Solo</option>
						        <option value="Perwokerto">Perwokerto</option>
						        <option value="Yogyakarta">Yogyakarta</option>
					             </select>
					         </td>
	                            </tr>
	                            <tr>
		                        <td>Nomor_Handphone</td><td>:</td>
		                        <td><input type="text" name="Nomor_Handphone" maxlength="20"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	                            </tr>
	                            <tr>
	                            <td><input type="submit" value="pesan" name="pesan"></td>
	                            </tr>
	                            </table>
	                        </form>
							    </section>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/farhan.prtma.73" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/farhanpratama200094/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy;PT ROSALIA INDAH</li><li>Design:PRATAMA</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>