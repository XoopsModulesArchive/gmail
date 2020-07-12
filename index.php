<?php
include("../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");

$meta_keywords = "online signature, gmail,";
$meta_description = "Get your own Signature within few swconds";
$pagetitle = "Online Signature";

if(isset($xoTheme) && is_object($xoTheme)) {
    $xoTheme->addMeta( 'meta', 'keywords', $meta_keywords);
    $xoTheme->addMeta( 'meta', 'description', $meta_description);
} else {    // Compatibility for old Xoops versions
    $xoopsTpl->assign('xoops_meta_keywords', $meta_keywords);
    $xoopsTpl->assign('xoops_meta_description', $meta_description);
}

$xoopsTpl->assign('xoops_pagetitle', $pagetitle);

//this will only work if your theme is using this smarty variables
$xoopsTpl->assign( 'xoops_showlblock', 1); //set to 0 to hide left blocks
$xoopsTpl->assign( 'xoops_showrblock', 1); //set to 0 to hide right blocks
$xoopsTpl->assign( 'xoops_showcblock', 1); //set to 0 to hide center blocks
?>

<!--DUMMY HTML CONTENT-->
</head>
<body>
<form method="post">
Enter username: <input name="user" type="text" size="20" class="textbox"> <input type="submit" class="button" value="Create">
<br><br><input type="image" border="0" width="200" height="20" src="gmail1/gmail.php?user=<?php echo $_REQUEST['user'] ?>">
<br><br><input type="image" border="0" width="200" height="20" src="gmail2/gmail.php?user=<?php echo $_REQUEST['user'] ?>">
<br><br><input type="image" border="0" width="220" height="64" src="gmail3/gmail.php?user=<?php echo $_REQUEST['user'] ?>">
</form>
</body>
</html>

<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>
