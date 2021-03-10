<?php

function rgbString( $r, $g, $b ){
	if( $r > 255 ) $r = 255;
	if( $g > 255 ) $g = 255;
	if( $b > 255 ) $b = 255;
	if( $r < 0 ) $r = 0;
	if( $g < 0 ) $g = 0;
	if( $b < 0 ) $b = 0;
	$r = str_pad( dechex($r), 2, '0', STR_PAD_LEFT);
	$g = str_pad( dechex($g), 2, '0', STR_PAD_LEFT);
	$b = str_pad( dechex($b), 2, '0', STR_PAD_LEFT);
	return "#{$r}{$g}{$b}";
}

function rgbStringPersent( $r, $g, $b ){
	if( $r > 100 ) $r = 100;
	if( $g > 100 ) $g = 100;
	if( $b > 100 ) $b = 100;
	if( $r < 0 ) $r = 0;
	if( $g < 0 ) $g = 0;
	if( $b < 0 ) $b = 0;

	$r *= 2.5; //255/100;
	$g *= 2.5; //255/100;
	$b *= 2.5; //255/100;

	$r = str_pad( dechex($r), 2, '0', STR_PAD_LEFT);
	$g = str_pad( dechex($g), 2, '0', STR_PAD_LEFT);
	$b = str_pad( dechex($b), 2, '0', STR_PAD_LEFT);
	//return "#{$r}{$g}{$b}";
	return "#".($r).($g).($b);
}