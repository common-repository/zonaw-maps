<?php
/**
 * @package ZonaW Maps
 * @version 1.0.0
 */
/*
Plugin Name: ZonaW Maps
Plugin URI: http://www.zonaw.com/
Description: This Plugin insert a image with a map in your posts
Version: 1.0.1
Author URI: http://www.zonaw.com/
*/

function showMapPoint ($width=300, $height=300, $zoom=14, $maptype = 'roadmap' )
{
	if (is_single())
	{
		
		$temp_longitude = get_post_custom_values("longitude");
		$longitude = $temp_longitude[0];
		$temp_latitude = get_post_custom_values("latitude");
		$latitude =  $temp_latitude[0];
		$temp_location = get_post_custom_values("location");
		$location =  urlencode($temp_location[0]);

		
		if ($latitude != 0 && $longitude != 0)
		{
		?>
			<img src='http://maps.google.com/maps/api/staticmap?size=<?php echo $width; ?>x<?php echo $height; ?>&amp;center=<?php echo $latitude; ?>,<?php echo $longitude; ?>&amp;markers=<?php echo $latitude; ?>,<?php echo $longitude; ?>&amp;sensor=false&amp;zoom=<?php echo $zoom; ?>&amp;maptype=<?php echo $maptype; ?>' />
		<?php
		}
		else if ($location != "")
		{
		?>
			<img src='http://maps.google.com/maps/api/staticmap?size=<?php echo $width; ?>x<?php echo $height; ?>&amp;center=<?php echo $location; ?>&amp;markers=<?php echo $location; ?>&amp;sensor=false&amp;zoom=<?php echo $zoom; ?>&amp;maptype=<?php echo $maptype; ?>' />
		<?php	
		
		}
	}
}


?>
