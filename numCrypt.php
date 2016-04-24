function numCrypt($num, $reverse = false, $digits = 8) {
	$key = 'b*2m*tSB081y|e~4paxxMgl#TAAApE@F';
	$num = str_pad($num, $digits, '0', STR_PAD_LEFT); // str_pad faster than sprintf when i <≈ 1000
	$iterations = 3; // don't use 1
	$reverse = $reverse ? -1 : 1;
	for ($i=0; $i < $iterations; $i++)
		for ($d=0; $d < $digits; $d++)
			$num[$d] = ($num[$d] + 300 + (ord($key[($i+$d)%32]) + $num[($d+$digits-1)%$digits]) * $reverse) % 10;
	return $num;
}
