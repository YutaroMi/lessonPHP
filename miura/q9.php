<!DOCTYPE html>
<html>
<head>
	<title>Q9</title>
</head>
<body>
	<?php 
		$kanto = array(
		  '東京都' => '新宿区',
		  '千葉県' => '千葉市',
    	  '神奈川県'=> '横浜市',
	      '埼玉県' => 'さいたま市',
	      '群馬県' => '前橋市',
	      '栃木市' => '宇都宮市',
	      '茨城県' => '水戸市',
	      '沖縄県' => '那覇市',
	      '北海道' => '札幌市',
			);

		foreach ($kanto as $key => $value) {
			if($key=="沖縄県"){
				echo $key."は関東地方ではありません".'<br>';
			}else if ($key=="北海道") {
				echo $key."は関東地方ではありません".'<br>';
			}
		}

	?>
</body>
</html>