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
<label><input type="text" name="baslik" id="search" onFocus="this.value=''" placeholder="Site Başlığı"/></label><br><br>
<label><input type="text" name="aciklama" id="search" onFocus="this.value=''" placeholder="Site Açıklaması"/></label><br><br>
<label><input type="text" name="link" id="search" onFocus="this.value=''" placeholder="Site Linki"/></label><br><br>
<input type="submit" id="searchbutton" value="Site Ekle">
</form> 
</div>
</body>
</html>
