<?php
require_once "./private/smaller.php";

//くじの番号を乱数で決める
$lottery = rand(0,6);

//くじの画像ファイル名を作成する
$img = "img/kuji_".str_pad($lottery, 2, '0', STR_PAD_LEFT ).".png";

$data = [
	'lottery_img' => $img,
];

view( 'draw.html', $data );