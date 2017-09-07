<?php
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

