<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/4/25
 * Time: 18:28
 */
header('Access-Control-Allow-Origin:*');
// 防止恶意调用
define('IN_TG', true);
//引入
require dirname(__FILE__).'/includes/common.inc.php';
require ROOT_PATH.'includes/mentalTest.func.php';

$send_id = $_POST['send_id'];
$score = $_POST['score'];
$scores = $_POST['scores'];

?>