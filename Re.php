<?php 
$ch = curl_init();
$source = 'http://static.kodcloud.com/update/download/kodexplorer4.46.zip';
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);
$destination = './kod.zip';

$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);
$zip = new ZipArchive();
if ($zip->open('kod.zip') === true) {
    $zip->extractTo("kod/");
    $zip->close();
}
$file_path = './kod.zip';
if (is_file($file_path)) {
    if (unlink($file_path)) {
    }
}
echo '<a href="./kod" target="_blank">执行成功点击进入</a>';
?>
