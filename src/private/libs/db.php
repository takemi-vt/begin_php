<?php
/**
 * DB関連
 */

$mypdo = null;

function mydb_connect() 
{
	Global $app_dir;
	Global $mypdo;

	$file = "{$app_dir}/my_sqlite.db";
	$flag = file_exists( $file );
	$mypdo = new PDO("sqlite:{$file}");

	if( !$flag ) {
		mydb_init();
	}
}

/**
 * DBを初期化する
 * @return void
 */
function mydb_init()
{
	Global $sql_dir;
	Global $mypdo;

	$file = $sql_dir.'/create.sql';
	if( !file_exists($file) ){
		die("db::mydb_init {$file}が存在しない");
	}

	$sql = file_get_contents( $file );

	$mypdo->query( $sql );
}