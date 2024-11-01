=== ZonaW Maps ===
Contributors: zonaw
Tags: geolocation, maps, latitude, longitude
Requires at least: 2.0
Tested up to: 3.0
Stable tag: trunk

This Plugin insert a image with a map in your posts using the Static Google Maps Api.

== Description ==

This Plugin insert a image with a map in your posts using the Static Google Maps Api.
The user can set the exact coords or insert the address. If you want to insert a map in a posts you must to generate two personalized fields (called 'latitude' and 'longitude') with the coordinates or a personalized field called 'location' with the address. 
http://www.zonaw.com/2010/12/20/plugin-de-geolocalizacion-de-puntos-para-wordpress/

== Installation ==

1. Upload `zonaw_maps.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php showMapPoint(); ?>` in your templates

== Frequently Asked Questions ==

= Who does generate the map? =

The map image is generated using Static Google Maps API.  

= Can get the map in differents sizes? =

You can set the size of the map setting the width and the height in the showMapPoint function. Example:

`<?php 
	$width = 300;
	$height = 400;
	showMapPoint($width, $height); 
?>`

= Can customize the map? =

You can customize the zoom and the type of the map in the showMapPoint function. Example:

`<?php 
	$width = 300;
	$height = 400;
	$zoom = 14;
	$maptype = "roadmap";
	showMapPoint($width, $height, $zoom, $maptype); 
?>`

Map types:

roadmap
satellite
hybrid

== Changelog ==

= 0.5 =
* First release

== Upgrade Notice ==

= 0.5 =
* First release
