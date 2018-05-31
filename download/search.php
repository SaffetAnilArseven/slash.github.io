<?php
@$arama = $_GET["arama"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arama Motoru</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
body{
	background-color: #FFF;
	background-image: none;
	color: #333;
}
#header {
	background-color: #f1f1f1;
	border-bottom: 1px solid #666;
	border-color: #e5e5e5;
	height: 52px;
	padding-top: 10px;
	margin-bottom: 20px;
}
#sonuc {
	width: 600px;
	margin-bottom: 20px;
}
#baslik {
	font-size: 18px;
	margin: 0px;
	padding: 0px;
	font-weight: normal;
}
#baslik a {
	color: #0C0098;
	text-decoration: none;
}
#link {
	color: #006621;
	text-decoration: none;
	font-size: 13px;
	margin-top: 5px;
	margin-bottom: 5px;
}
#icerik {
	font-size: 14px;
	margin-top: 10px;
}
#ortala {
	margin-right: 100px;
	margin-left: 100px;
}
#search {
	line-height: 40px;
	height: 40px;
}
#searchbutton {
	line-height: 42px;
	height: 42px;
}
#ortala #sonuc p {
	margin-top: 5px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<div id="header">
  <div id="ortala">
    <form action="search.php" method="get">
      <input type="text" name="arama" id="search" placeholder="<?php echo "$arama" ; ?>">
      <input type="submit" id="searchbutton" value="Arama Yap">
    </form>
  </div>
</div>
<div id="ortala">
<?php
include("baglan.php");
if($arama==""){
header("Location:index.php");
} else {
$bul=mysql_query("SELECT * FROM arama WHERE baslik LIKE '%$arama%' or aciklama LIKE '%$arama%' or link LIKE '%$arama%'");
while($getir=mysql_fetch_array($bul)){
	$baslik=$getir['baslik'];
	$aciklama=$getir['aciklama'];
	$link=$getir['link'];
echo("<div id='sonuc'>");
echo("<h2 id='baslik'><a href='$link' target='_blank'>$baslik</a></h2>");
echo("<a href='$link' id='link' target='_blank'>$link</a>");
echo("<p><span id='icerik'>$aciklama</span></p>");
echo("</div>");
}

}
?>
</div>
</body>
</html>