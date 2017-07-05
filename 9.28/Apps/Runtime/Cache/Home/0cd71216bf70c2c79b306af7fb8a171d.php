<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<center>
    <h3 style="color: red;">相册展示</h3>
    <div style="width: 600px;">
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><div style="width: 180px; float: left;">
                <div><a href="/php4/lianxi/9.28/index.php/Home/Photo/show?id=<?php echo ($v["a_id"]); ?>"><img src="/php4/lianxi/9.28/Public/Uploads/<?php echo ($v["a_img"]); ?>" width="140"/></a></div>
                <div><a href="/php4/lianxi/9.28/index.php/Home/Photo/show?id=<?php echo ($v["a_id"]); ?>"><?php echo ($v["a_name"]); ?></a>&nbsp;&nbsp;
                    <a href="/php4/lianxi/9.28/index.php/Home/Photo/show?id=<?php echo ($v["a_id"]); ?>"><?php echo ($v["num"]); ?></a></div>
            </div><?php endforeach; endif; ?>
    </div>
</center>
</body>
</html>