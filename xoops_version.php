<?php
if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}
$modversion['dirname'] = basename(dirname(__FILE__));
$modversion['name'] = ucfirst(basename(dirname(__FILE__)));
$modversion['version'] = '0.1';
$modversion['description'] = '';
$modversion['author'] = "Mariane Antoun ";
$modversion['credits'] = "MAITSCO(www.maitsco.com)";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "gmail.png";

// Menu
$modversion['hasMain'] = 1;
//Bellow you can set your submenus
/*
$modversion['sub'][0]['name'] = 'Dummy Page';
$modversion['sub'][0]['url'] = "dummy_page.php";
$modversion['sub'][1]['name'] = 'Dummy Page 2';
$modversion['sub'][1]['url'] = "dummy_page_2.php";
*/
?>
