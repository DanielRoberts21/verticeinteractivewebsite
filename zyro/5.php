<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Bugs</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.14" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1449240618" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1449240618" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://verticeinteractive.esy.es/gallery/logothingy-ts1447268901.png" type="image/png" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance74" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Products/" target="_self" title="Products">Products</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li><li><a href="People/" target="_self" title="People">People</a></li><li class="active"><a href="Bugs/" target="_self" title="Bugs">Bugs</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance74'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance75" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Vertice Interactive</h4>
</div><div id="wb_element_instance76" class="wb_element"><a href="Home/"><img alt="" src="gallery_gen/2e72f4594ab17727c12f776b8d965f0b_128x115.png"></a></div><div id="wb_element_instance77" class="wb_element"><div></div></div><div id="wb_element_instance78" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">VERTICE INTERACTIVE</h4>
</div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance82" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacts</h1></div><div id="wb_element_instance83" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="e22011f5"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th>Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn">Submit</button></td></tr></table></form><script type="text/javascript">
			var formValues = <?php echo json_encode($_POST); ?>;
			var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
			wb_form_validateForm("e22011f5", formValues, formErrors);
			<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
				setTimeout(function() {
					alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
				}, 1);
			<?php } ?>	
			</script></div><div id="wb_element_instance84" class="wb_element" style=" line-height: normal;"></div><div id="wb_element_instance85" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">If you find any bugs or glitches, could you please send us the bug and the exact steps to reproduce it. If you don't tell me how to produce it, i cant fix it.</p>
</div><div id="wb_element_instance86" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(5);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance86");
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
					$("#wb_element_instance86").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 130px;">
	
<div id="wb_element_instance79" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://verticeinteractive.esy.es">verticeinteractive.esy.es</a></p></div><div id="wb_element_instance80" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Member of <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "e1fe0694047690eb22dc8e62f5b55529", cont: "wb_element_instance80"});

				(function() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.async = true;
					script.src = "http://zyro.com/examples/getjs/";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance81" class="wb_element"><div></div></div><div id="wb_element_instance87" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(70);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>