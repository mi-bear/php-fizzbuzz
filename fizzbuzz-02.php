<?php
$max = 100;
$fizz = 3;
$buzz = 5;

for ( $i = 1; $i <= $max; ++$i ) {

	$fb = false;

	if ( $i == $fizz ) {
		$fizz += 3;
		$fb = true;
		echo 'Fizz';
	}

	if ( $i == $buzz ) {
		$buzz += 5;
		$fb = true;
		echo 'Buzz';
	}

	if ( !$fb ) {
		echo $i;
	}

	echo PHP_EOL;
}
