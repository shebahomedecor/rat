<?php
if(isset($_GET['cmd'])) {
$data = $_GET['cmd'];
$f = fopen("ng.txt", "w");
fwrite($f, $data."\n");
fclose($f);
}
?>