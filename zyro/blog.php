<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.14" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1449240618" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1449240618" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://verticeinteractive.esy.es/gallery/logothingy-ts1447268901.png" type="image/png" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 290px;">
	
<div id="wb_element_instance98" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Products/" target="_self" title="Products">Products</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li><li><a href="People/" target="_self" title="People">People</a></li><li><a href="Bugs/" target="_self" title="Bugs">Bugs</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance98'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance99" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Vertice Interactive</h4>
</div><div id="wb_element_instance100" class="wb_element"><a href="Home/"><img alt="" src="gallery_gen/2e72f4594ab17727c12f776b8d965f0b_128x115.png"></a></div><div id="wb_element_instance101" class="wb_element"><div></div></div><div id="wb_element_instance102" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">VERTICE INTERACTIVE</h4>
</div><div id="wb_element_instance103" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://verticeinteractive.esy.es">verticeinteractive.esy.es</a></p></div><div id="wb_element_instance104" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Member of <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "e1fe0694047690eb22dc8e62f5b55529", cont: "wb_element_instance104"});

				(function() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.async = true;
					script.src = "http://zyro.com/examples/getjs/";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance105" class="wb_element"><div></div></div><div id="wb_element_instance106" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance106");
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
					$("#wb_element_instance106").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance107" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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