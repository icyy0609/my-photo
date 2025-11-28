<?php
$album_folder = 'images/album11';
$images = glob($album_folder.'/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>相册1</title>
<style>
body { margin:0; font-family: Arial, sans-serif; background:#f0f0f0; padding:20px; text-align:center;}
img { width:260px; height:180px; object-fit:cover; margin:5px; border-radius:8px;}
a.back { display:inline-block; margin-bottom:20px; padding:8px 12px; background:#333; color:#fff; text-decoration:none; border-radius:5px;}
</style>
</head>
<body>
<a class="back" href="index.html">返回首页</a>
<h1>相册1</h1>
<div>
<?php
foreach($images as $img){
    echo '<img src="'.$img.'" alt="">';
}
?>
</div>
</body>
</html>
