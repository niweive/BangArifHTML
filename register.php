<!DOCTYPE html>
<!-- saved from url=(0022)http://bangarif.com/m/ -->
<html>
	<head>
		<?php include("_inc/head.php"); ?>		
	</head>
<body>
	<div class="brand wrapper-head">
		<a href="http://bangarif.com/m/#"><img src="images/logo.png" alt="" /></a>
	</div>
	<header>
		<?php include("_inc/header_inside.php"); ?>
	</header>
	<div class="spacer"></div>
	<div class="content">
	        <div class="navbar-extension orange-gradient">
	        		<div class="wrapper-content result-head">	    
	        	   		<img class="bangarif-home" src="images/img_header_register.png" alt="" />
	        		</div>
	        </div>
	        
	        <div id="search-title" class="navbar-header search-title">
	        		<div class="wrapper-content">
	        			<h1>Gabung yok di BangArif.com</h1>
	        		</div>
	        </div>
	
	        <div class="companies-container wrapper-content">
	        		<form>
	        			<div class="form-group form-holder">
	        				<input type="email" class="form-control" id="email" placeholder="Email" >
	        				<input type="password" class="form-control" id="password" placeholder="Password">
	        				<input type="password" class="form-control" id="confirm" placeholder="Ulangi password">
	        			    <input type="text" class="form-control" id="name" placeholder="Nama lengkap">
	        			    <input type="text" class="form-control" id="phone" placeholder="Telp/HP">
	        			</div>
	        			<div class="submit spacer-bottom">
	        				<button type="submit" class="btn btn-default btn-submit">Submit</button>
	        			</div>
	        		</form>
	        </div>    
	</div>
	
	
	<footer class="d-tabbar">
		<? include("_inc/footer.php") ?>
	</footer>
	<footer >
		<? include("_inc/tabbar-menu.php"); ?>
	</footer>
	
	<? include("_inc/loadjs.php") ?>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$("#total-list").text($("#company-list li").size());
		$("#total-recommend").text($('.fav').length);
		
		function scrollToAnchor(aid, spacer){
			var aTag = $("#"+ aid);
			$('html,body').animate({scrollTop: aTag.offset().top - spacer},'slow');
		}
		
		$( "#email" ).focus(function() {
		  scrollToAnchor('search-title', 40);
		});
	});
	</script>
</body>
</html>