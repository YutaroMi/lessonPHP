<!DOCTYPE html>
<html>
<head>
	<title>Q7</title>
</head>
<body>
<?php  
$kanto = array('tokyo' => 新宿区,
		  'chiba' => 千葉市,
    	  'kanagawa'=> 横浜市,
	      'saitama' => さいたま市,
	      'gunma' => 前橋市,
	      'tochigi' => 宇都宮市,
	      'ibaraki' => 水戸市,
			);
foreach ($kanto as $key => $value) {
	echo $key."の県庁所在地は".$value."です"."<br>";
}

?>
</body>
</html>