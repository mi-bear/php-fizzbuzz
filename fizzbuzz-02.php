<?php
/**
 * 1から100までの数をプリントするプログラム
 * 3の倍数のときは数の代わりに`Fizz`をプリント
 * 5の倍数のときは`Buzz`をプリント
 * 3と5両方の倍数の場合には`FizzBuzz`をプリント
 */

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
