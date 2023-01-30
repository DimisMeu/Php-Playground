<?php

$city = "Istiaia"; //Calculate the sunrise time for Istiaia Grab lan lon from GMaps
$lat = 38.9540673; //Latitude: 38.9540673 North
$lon = 23.1492695; //Longitude: 23.1492695 West
$zen = 90; //Zenith ~= 90
$gtm = +3; //offset: +3 GMT

echo $city;
echo(" Date: " . date("D M d Y"));
echo(" Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,$lat,$lon,$zen,$gtm));
echo(" Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,$lat,$lon,$zen,$gtm));

echo ("\n\n");

$refdate = "2020-05-30";
echo "Date: . $refdate.";
$sun_info=date_sun_info(strtotime("$refdate"),$lat,$lon);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "\n";
  }

?>
