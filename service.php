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
	        	   		<img class="bangarif-home" src="images/img_header_detail.png" alt="" />
	        		</div>
	        </div>
	        
	        <div class="navbar-header search-title">
	        		<div class="wrapper-content">
	        			<h1 class="company-name"><a href="javascript:history.back()"><i class="fa fa-chevron-left"></i>  Jasa Utama</a></h1>
	        			<div class="rate-detail">
	        				<!-- AddThis Button BEGIN -->
	        				<div class="addthis_toolbox addthis_default_style ">
	        				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	        				</div>
	        				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	        				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5349718b2d84d9dd"></script>
	        				<!-- AddThis Button END -->
	        			</div>
	        			<!-- <div class="location-detail">
	        				<div id="btn-map"><i class="fa fa-map-marker"></i></div>
	        				<div id="btn-detail" style="display: none;"><i class="fa fa-eye"></i></div>
	        			</div> -->
	        		</div>
	        </div>
	        <div class="companies-container">
		        	<div class="companies center-block search">
			        	<div class="company-link wrapper-content">
			        		<div class="company-info">
				        		<h2>
					        		Sedot WC Sedot Limbah Sedot STP Pembuatan Resapan
				        			Pembuatan Septic Tank Perawatan Septic<br><br>
				        			<b>Melayani Daerah:</b><br>
				        			Jakarta, Bekasi, Depok, Tangerang Selatan<br><br>
				        			<b>Informasi:</b><br>
				        			Melayani perbaikin Pompa Air anda. Berpengalaman selama 17 tahun memperbaiki bermacam merk pompa air.<br><br>
			        			</h2>
			        		</div>
			        		<div class="company-contact reset">
			        			<i class="fa fa-mobile"></i><b>Contact:</b><br>
			        			<h2>
				        			<a href="tel:+6281380774300">0813-8077-4300</a> (pak Maman)</b><br>
			        				<a href="tel:+6281380774300">0813-8077-4300</a> (pak Enjang)</b><br>
			        				<a href="tel:+6281380774300">wcidaman@yahoo.com</a></b><br>
			        				PIN BB: 12ER09WE<br><br>
			        		</h2>
			        			<div>
			        				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2750688876067!2d106.79817290000001!3d-6.227418899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14b8df1026b%3A0x770d9d5edb75b02c!2sJalan+Asia+Afrika!5e0!3m2!1sen!2s!4v1396693102641" width="100%" height="120" frameborder="0" style="border:0"></iframe>
			        			</div>
			        		</div>
			        		<div class="clear"></div>
			        	</div>
			        
			        	
			        	<div class="disqus spacer-bottom wrapper-content">
			        		<div id="disqus_thread"></div>
			        		    <script type="text/javascript">
			        		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			        		        var disqus_shortname = 'pedallica'; // required: replace example with your forum shortname
			        		
			        		        /* * * DON'T EDIT BELOW THIS LINE * * */
			        		        (function() {
			        		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			        		        })();
			        		    </script>
			        		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			        		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			        	</div>
		        </div>    
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
		$("#btn-map").click(function(){ 
			$("#btn-detail").show(); 
			$(".company-link").hide();
			$(".company-map").show();
			$(this).hide();
			
		});	
	
		$("#btn-detail").click(function(){ 
			$("#btn-map").show();
			$(".company-link").show();
			$(".company-map").hide(); 
			$(this).hide();
		});
	</script>
</body>
</html>