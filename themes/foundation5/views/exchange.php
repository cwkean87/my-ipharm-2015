<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="revisit-after" content="15 days" />
	
	<meta name="description" content="<ion:meta_description />" />
	<meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="language" content="<ion:current_lang />" />

	<title><ion:meta_title /> | <ion:site_title /></title>
  
	<!-- Included CSS Files -->
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
	<link rel="stylesheet" href="<ion:theme_url />assets/css/normalize.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/foundation.min.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/app.css">

	<link rel="stylesheet" href="<ion:theme_url />assets/css/styles.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/demo_table.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/dropdown.css">
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/jquery.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/modernizr.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation.min.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation/foundation.orbit.js"></script>
	<script type="text/javascript" src="<ion:theme_url />javascript/dropdown.js"></script>
	<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- Ionize JS Lang object -->
	<ion:jslang />

	<!-- if JS needs to get the theme URL, we give it to him -->
	<script type="text/javascript">
		var theme_url = '<ion:theme_url />';
	</script>

	<ion:google_analytics />
<style>
.container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container{
width:100%;
}
</style>
</head>

<body>

	<!-- container -->
	<div class="container">

        <div class="contain-to-grid">


			<nav data-topbar="" class="top-bar">
				<ul class="title-area">
					<!--
						Website Logo
					-->
					<li class="name"><h1><a href="<ion:home_url />"><ion:site_title /></a></h1></li>
				</ul>
					<ion:user:logged is="true">
					<div class="right" id="cssmenu">
						<ion:tree_navigation lang_url="true" >
							<li><a class="<ion:active_class />" href="<ion:url />"><ion:title /></a></li>
						</ion:tree_navigation>
					</div>
					</ion:user:logged>
			</nav>
		</div>
<ion:partial view="page_header" />

        <div class="row article">
            <div class="row-fluid">
                <div class="span12">
					<h3>Stocks Exchange List</h3>
                    <ol style="margin-left:-2px; background-color:#CCE6FF; padding:10px; border-radius:10px; font-family:cursive"><strong>Note:</strong>
                    <li>1. Please treat this information with confidentiality.</li>
                    <li>2. Please bear in mind that the information provided might not be 100% accurate. You are very much welcome to update us if you have latest info regarding items exchange.</li>
                    <li>3. Please ensures that the item is in its original packaging. Supplier will not entertain any loose pack.</li>
                    </ol>
						<p style="color:red; font-weight:bold;text-align:center">DO NOT DISCLOSE THIS INFORMATION TO OTHERS. FOR WATSONS PHARMACY USE ONLY.</p>	
                </div>
            </div>

			<div class="span12">
                    <div id="demo"></div>
            </div>
        </div>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.1.0/tabletop.min.js"></script>
        <script src="<ion:theme_url />javascript/tabletop-feed.js"></script>
        <script src="<ion:theme_url />javascript/data-tables-bootstrap.js"></script>
        <script src="<ion:theme_url />javascript/bootstrap-dropdown.js"></script>

        <!-- end analytics -->
        <a href="http://pharmfair.com/directoffline"target="_blank" style="margin-left:10px; background-color:pink; padding:5px;border-radius:3px"><b>Download OFFLINE Softcopy</b></a>&nbsp;
		<h5 style="margin-left:10px">Disclaimer:</h5>
		<p style="margin-left:10px; font-size:10px">Every effort has been made to ensure the information provided is correct and up-to-date. The PLU, Item's Description and other details shown in the tables may,
		from time to time, be changed without notification. <em>Updated 05/05/2014</em></p>
</div>
  <!-- container -->

  <section id="footer">
    <footer class="row">

      <ion:page id="footer">

        <ion:articles limit="1">

          <div class="large-4 columns">
            <ion:article:title tag="h5" />
            <ion:article:content />
          </div>

        </ion:articles>
      </ion:page>

    </footer>
    </section>

</body>
</html>

