<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/1/11
 * Time: 上午10:34
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
</head>
<body>
<ul>
	<?php foreach ($list as $user){?>
		<li><?php echo $user->id.",".$user->username?></li>
		<a href="user/del_user/<?php echo $user->id?>">删除</a>
		<a href="user/update_user/<?php echo $user->id?>">修改</a>
	<?php }?>
	
</ul>
</body>
</html>
