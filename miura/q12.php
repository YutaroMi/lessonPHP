<!DOCTYPE html>
<html>
<head>
	<title>Q12</title>
</head>
<body>
<?php  


function toFizzBuzz($n)
{
    $s = '';
    if ($n % 3 == 0) {
        $s .= 'Fizz';
    }
    if ($n % 5 == 0) {
        $s .= 'Buzz';
    }
    if ($s === '') {
        $s = "{$n}";
    }

    return $s;
}

for ($i = 1; $i <= 100; $i++) {
    
    echo toFizzBuzz($i), "\n";
}
echo "<br>";
$i=1;
while($i<=100){
	echo toFizzBuzz($i), "\n";
	$i++;
}
echo "<br>";






?>
</body>
</html>