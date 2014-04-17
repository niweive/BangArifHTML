<!DOCTYPE html>
<!-- saved from url=(0022)http://bangarif.com/m/ -->
<html>
	<head>
		<?php include("_inc/head.php"); ?>		
	</head>
<body>
	<header>
		<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<? include("_inc/slide-menu.php"); ?>
				<div class="navbar-header">
					<div class="brand-home wrapper-head">
						<a href="http://bangarif.com/m/#"><img src="images/logo.png" alt="" /></a>
						<div class="d-signin float_right"><a href="register.php">Gabung yok!</a></div>
					</div>
					<button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle pull-left" id="menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<div class="spacer-home"></div>
	<div class="content">
		<div class="navbar-extension-home">
			<img src="images/bangarif_home.png" alt="" />
		</div>		
		<div class="search-tool">
			<div>	
				<a name="layanan"></a>
				<dl class="accordion">
					<dt class="caret-down"><a href="#layanan" id="serv"><i class="fa fa-cog"></i> <span id="txt-serv">Pilih Layanan</span></a></dt>
					<dd id="serv-list">
						<ul>
							<li>Service Pompa Air</li>
							<li>Service WC</li>
							<li>Service AC</li>
							<li>Service Pompa Air</li>
							<li>Service WC</li>
							<li>Service AC</li>
						</ul>
					</dd>
				</dl>
				<dl class="accordion">
					<dt class="caret-down"><a href="" id="loc"><i class="fa fa-map-marker"></i> <span id="txt-loc">Seluruh Lokasi</span></a></dt>
					<dd id="loc-list">
						<ul>
							<li>Depok</li>
							<li>Jakarta Selatan</li>
							<li>Cinere</li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
		<div class="info-home clear">Pusat Cari Servis Local Online</div>
		<!-- Desktop rendered list -->
		
	</div>
	<footer class="d-tabbar">
		<? include("_inc/footer.php") ?>
	</footer>
	<footer class="m-tabbar">
		<div role="navigation" class="navbar-default navbar-fixed-bottom">
			<div class="btn-group btn-group-justified">
				<div class="btn-group ">
					<a href="search.php?service=Terbaru">
					<button type="button" class="btn tabbar btn-tabbar btn-left">
						<span><img src="images/icon_terbaru.png" alt="" /></span><br>Terbaru
					</button>
					</a>
				</div>
				<div class="btn-group">
					<form role="form" class="introform center-block" method="get" action="search.php" id="search-form" onsubmit="return validateForm()">
						<input type="hidden" id="service" name="service" value="" />
						<input type="hidden" id="location" name="location" value="Seluruh Lokasi" />
						<button class="btn tabbar btn-tabbar-special rounded-rect" id="search">
							<span><img src="images/icon_search.png" alt="" /></span>
						</button>
					</form>
				</div>
				
				<div class="btn-group">
					<a href="search.php?service=nge-Top">
					<button type="button" class="btn tabbar btn-tabbar btn-right">
						<span><img src="images/icon_ngetop.png" alt="" /></span><br>Nge-top
					</button>
					</a>
					</div>
			</div>
		</div>
	</footer>
	<? include("_inc/loadjs.php") ?>
	
	<script>
		$.get("http://ipinfo.io", function (response) {
		    $("#txt-loc").html(response.city + ", " + response.region);
		    $("#location").val($("#txt-loc	").text());
		}, "jsonp");
	</script>
</body>
</html>