<?php
/**
 * 設定ファイル
 */
$app_version = "1.0.0";
$app_dir = __DIR__;
$app_prefix_uri = "/event/lottery/";
$template_dir = $app_dir.'/template';
$sql_dir = $app_dir.'/sql';

require_once $app_dir.'/libs/common.php';
require_once $app_dir.'/libs/db.php';