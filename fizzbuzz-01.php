<?php
/**
 * 1から100までの数をプリントするプログラム
 * 3の倍数のときは数の代わりに`Fizz`をプリント
 * 5の倍数のときは`Buzz`をプリント
 * 3と5両方の倍数の場合には`FizzBuzz`をプリント
 */

$max = 100;

for ( $i = 1; $i <= $max; ++$i ) {

	$fizz = (bool)( $i % 3 == 0 );
	$buzz = (bool)( $i % 5 == 0 );

	if ( $fizz && $buzz ) {
		echo 'FizzBuzz';
	} elseif ( $fizz ) {
		echo 'Fizz';
	} elseif ( $buzz ) {
		echo 'Buzz';
	} else {
		echo $i;
	}

	echo PHP_EOL;
}

