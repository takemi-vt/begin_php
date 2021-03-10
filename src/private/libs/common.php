<?php
/**
 * このファイルは共通関数群のファイルです。
 */

/**
  * $fileで指定したテンプレートファイルを出力する
  * @param [string] $file
  * @param array $page_data
  * @return void
 */
function view( $file, $page_data = [] ){
	Global $template_dir;
	Global $app_prefix_uri;
	Global $app_version;

	$template_file = $template_dir.'/'.$file;
	if( !file_exists( $template_file ) ){
		die("Error Common::view {$template_file}テンプレートが存在しない" );
	}

	try {
		if( $page_data ){
			extract( $page_data, EXTR_OVERWRITE );
		}
		include ( $template_file );
	}catch( Exception $e ) {
		die( $e->getMessage() );
	}
}