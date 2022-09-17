<?php
function qrCode($s, $w = 250, $h = 250){
	$u = 'https://chart.googleapis.com/chart?chs=%dx%d&cht=qr&chl=%s';
	$url = sprintf($u, $w, $h, $s);
  	return $url;
}
function olustur($url) {
   echo $qr = qrCode($url, 500, 500);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .uret {
    height: 50px;
    width: 50%; 
    font-size: 22px;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid cyan;
    box-sizing: border-box;
    box-shadow: 2px 0 15px rgba(0,0,0,0.1);
    display: block;
 }

.btn {
    display: block;
    margin-top: 15px;
    height: 50px;
    font-size:22px;
    width: 100px;
    background-color: cyan;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: 0.3s all;
    box-shadow: 2px 0 15px rgba(0,0,0,0.1);
}
.btn:hover {
    background-color: rgb(211, 174, 246);
}
</style>
<body>

<?php 
 if(isset($_GET['uret'])) {
    $text = $_GET['uret'];

 }
 
?>

<img src="<?php olustur($text);?>">


    <form action="" method="get">
<input type="text" name="uret" class="uret" placeholder="İçerik">
<button type="submit" class="btn">Yükle</button>
    </form>
</body>
</html>
