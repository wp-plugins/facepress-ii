<?php
echo 'Sending a test message to facebook...';

$testEmail = $_GET["testEmail"];
$subjEmail = $_GET["subjEmail"];

mail($testEmail,$subjEmail,'test');
?>
<SCRIPT LANGUAGE="JavaScript">
<!--hide
window.close();
//-->
</SCRIPT>