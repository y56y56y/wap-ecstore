<?php
header("Content-Type: text/vnd.wap.wml");
echo "<?xml version=\"1.0\"?>";
?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card id="hello">
<p>Today is
<?php
echo date("m/d/Y");
?>
</p>
</card>
</wml>