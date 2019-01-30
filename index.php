<script type="text/javascript" src="http://www.sandcomp.com/sandphoto/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://www.sandcomp.com/sandphoto/sandphoto.js"></script>
<form id="sandphotoform" action="/sandphoto/sandphoto.php" method="POST" enctype="multipart/form-data"><strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：
<?php
include('sandphoto/sandphoto.inc');
$parser = new PhotoTypeParser();
$parser->parse('sandphoto/phototype.txt');
$parser->render_select('target_type', 0, 8);
echo '[br /]';
print('[strong]第二步[/strong], 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:[br /]');
$parser->render_select('container_type', 8);
?>
<strong>第三步</strong>, 选择背景颜色：
<input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked" /> 蓝色 <input id="bgcolorid" type="radio" name="bgcolorid" value="white" />白色

将来的照片就是这个样子的：

<img id="previewImg" alt="" />

<strong>第四步</strong>, 选择你的证件照片：

<input id="filename" type="file" name="filename" />

<strong>最后一步</strong>, 点击下载，照片就可以去冲印了：

<input type="submit" value="下载" />

如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。

</form>
