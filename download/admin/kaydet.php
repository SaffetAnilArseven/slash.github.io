<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arama Motoru</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="site">
<center><h1>Arama Motoru</h1></center>
<form action="kaydet.php" method="post">
<?php
include("../baglan.php");
$baslik = $_POST['baslik'];
$aciklama = $_POST['aciklama'];
$link = $_POST['link'];
$kaydet = mysql_query("insert into arama (baslik, aciklama, link) values ('$baslik', '$aciklama', '$link')") or die("<div id='duyuru' class='kirmizi'>Hata: kayıt işlemi gerçekleşemedi.</div><br>");
echo "<div id='duyuru' class='yesil'>Kayıt işlemi başarıyla gerçekleşti.</div><br>";
?>
<label><input type="text" name="baslik" id="search" onFocus="this.value=''" placeholder="Site Başlığı" maxlength="255"/></label><br><br>
<label><input type="text" name="aciklama" id="search" onFocus="this.value=''" placeholder="Site Açıklaması" maxlength="255"/></label><br><br>
<label><input type="text" name="link" id="search" onFocus="this.value=''" placeholder="Site Linki" maxlength="255"/></label><br><br>
<input type="submit" id="searchbutton" value="Site Ekle">
</form> 
</div>
</body>
</html>