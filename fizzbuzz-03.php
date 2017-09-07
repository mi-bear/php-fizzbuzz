<?php
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
