<?php
/**
 * 1から100までの数をプリントするプログラム
 * 3の倍数のときは数の代わりに`Fizz`をプリント
 * 5の倍数のときは`Buzz`をプリント
 * 3と5両方の倍数の場合には`FizzBuzz`をプリント
 */

$max = 100;
$list = range( 0, $max );

for ( $i = 0; $i <= $max; $i = $i + 3 ) {
	$list[ $i ] = 'Fizz';
}

for ( $i = 0; $i <= $max; $i = $i + 5 ) {
	$pre = is_numeric( $list[ $i ] ) ? '' : $list[ $i ];
	$list[ $i ] = $pre . 'Buzz';
}

unset( $list[0] );

echo implode( PHP_EOL, $list ) . PHP_EOL;
