<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Tue Aug 02 2016 15:46:32 GMT+0000 (UTC) -->
<html data-wf-page="57744cf268c0c2b60e611f78" data-wf-site="577440f9dee5efd30ed38e59">
<head>
  <meta charset="utf-8">
  <title>Map</title>
  <meta content="Map" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/open-data-impact-map.webflow.css" rel="stylesheet" type="text/css">
      <meta charset="UTF-8">
    <title>Open Data Enterprise</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script>
    <script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-image/v0.0.3/leaflet-image.js'></script>
    <script src="app/includes/react/react.js"></script>
    <!-- Foundation Includes -->
    <link rel="stylesheet" href="app/includes/foundation/css/foundation.css">
    <script src="app/includes/foundation/js/vendor/modernizr.js"></script>
    <script src="app/includes/foundation/js/vendor/jquery.js"></script>
    <script src="app/includes/foundation/js/foundation.min.js"></script>
    <script src="app/includes/html2canvas.js"></script>
    <script src="app/includes/canvas-toBlob.js"></script>

    <script src="app/includes/sheetjs/xlsx.full.min.js"></script>
    <script src="app/includes/FileSaver.min.js"></script>
    <!--<script src="app/includes/sheetjs/xlsx.full.min.map"></script>-->

    <script type="text/javascript" src="app/includes/griddle/griddle.js"></script>
    <!--Backbone JS-->
    <script src="app/includes/backbone/underscore.js"></script>
    <script src="app/includes/backbone/backbone.js"></script>

    <script src="app/includes/leaflet/leaflet.js"></script>
    <script src="app/includes/markercluster/js/leaflet.markercluster-src.js"></script>

    <script src="app/bootloader.js"></script>
<!-- 
    <script type="text/javascript" src="app/includes/regions_q.js"></script>  -->

    <!-- ESRI Includes -->
    
    <!--<link rel="stylesheet" href="http://js.arcgis.com/3.11/esri/css/esri.css">
    <script src="http://js.arcgis.com/3.11/"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojo/dojo.js"></script>
    
    <!-- This is how you would link your custom stylesheet -->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Palanquin'>
    <link rel="stylesheet" href="app/css/app.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic%7CMontserrat:400,700%7CVarela:400">
      <!-- Load Leaflet from CDN-->
      <!-- Change by Vinayak 07.28.16 -->
<!--     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" /> -->
    <link rel="stylesheet" href="app/includes/leaflet/leaflet.css" />

    <link rel="stylesheet" href="app/includes/markercluster/css/MarkerCluster.css"/>
    <link rel="stylesheet" href="app/includes/markercluster/css/MarkerCluster.Default.css"/>
<!--     <link rel="icon" type="image/png" href="favicon.png"> -->

    <script type="text/javascript">var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-59933587-1'], ['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
</head>

<body class = "br" style="overflow: scroll;">

<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>  -->


</body>
</html>