<?php
require_once('C:/xampp/htdocs/WURFL/Application.php');
$configFile = 'C:/xampp/htdocs/resources/wurfl-config.xml';

$wurflConfig = new WURFL_Configuration_XmlConfig($configFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);

$wurflManager = $wurflManagerFactory->create();

$device = $wurflManager->getDeviceForHttpRequest($_SERVER);
?>

<?php
function displayArrayContentFunction($arrayname,$tab="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",$indent=0) {
 $curtab ="";
 $returnvalues = "";
 while(list($key, $value) = each($arrayname)) {
  for($i=0; $i<$indent; $i++) {
   $curtab .= $tab;
   }
  if (is_array($value)) {
   $returnvalues .= "$curtab$key : Array: <br />$curtab{<br />\n";
   $returnvalues .= displayArrayContentFunction($value,$tab,$indent+1)."$curtab}<br />\n";
   }
  else $returnvalues .= "$curtab$key => $value<br />\n";
  $curtab = NULL;
  }
 return $returnvalues;
}

if ($device->getCapability('is_wireless_device')=='false') {
	// It is a pc!
	//header('location: http://www.google.com');
	header('location: /ses_website/index.php');
} else if ($device->getCapability('xhtml_support_level') < 3 ) {
	header('location: /dev/ses_wap/home.php');
} else {
	header('location: /ses_mobile/index.php');
	// $arr = array();
	// $arr = $device->getAllCapabilities();
	// echo displayArrayContentFunction($arr);
	//echo $device->getCapability('xhtml_support_level');
}
?>