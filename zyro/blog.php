<?php if ($lang == 'es') { ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.8" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1426732047" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1426732047" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = 'es';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 2350px;">
	
<div id="wb_element_instance123" class="wb_element"><ul class="hmenu"><li><a href="http://cyberahorro.pe.hu/es/Contactenos" target="_self" title="Contactenos">Contactenos</a></li></ul></div><div id="wb_element_instance124" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Cyberahorro</h4>

<p class="wb-stl-normal"><strong>Control del presupuesto personal</strong></p>
</div><div id="wb_element_instance125" class="wb_element"><a href="5"><img alt="" src="gallery/a861cd4e17c6fa48f7b81ffab9db2044_87x108.png"></a></div><div id="wb_element_instance126" class="wb_element"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance126");
						var ll = new google.maps.LatLng(6.24841,-75.56551000000002);
						var map = new google.maps.Map(div, {
							zoom: 5,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance127" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Miembro de <i class="icon-wb-logo"></i><a href="http://zyro.com/catalog/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "95877835ad13296c3817ee81800dbbc7", cont: "wb_element_instance127"});

				(function() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.async = true;
					script.src = "http://zyro.com/catalog/getjs/";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance128" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://cyberahorro.pe.hu">cyberahorro.pe.hu</a></p></div><div id="wb_element_instance129" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance129");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance129").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance130" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>

<?php } ?>
