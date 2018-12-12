<!DOCTYPE html>
<html>
<head>
	<title>Q8</title>
</head>
<body>
	<?php 
	$kanto = array('東京都' => 新宿区,
		  '千葉県' => 千葉市,
    	  '神奈川県'=> 横浜市,
	      '埼玉県' => さいたま市,
	      '群馬県' => 前橋市,
	      '栃木市' => 宇都宮市,
	      '茨城県' => 水戸市,
			);
	foreach ($kanto as $key => $value) {
		if ($key=="埼玉県") {
			echo $key."の県庁所在地は、".$value."です。";
		}
	}

	?>

</body>
</html>