<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>

<!--main-->
<div class="midder">

<?php include template("admin/menu");?>

<div class="page"><?php echo $pageUrl;?></div>

<table>


<tr class="old"><td>ID</td><td>UserID</td><td>Content</td><td>操作</td></tr>

<?php foreach((array)$arrWeibo as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['weiboid'];?></td><td><?php echo $item['userid'];?></td><td><?php echo tsDecode($item['content'])?></td><td width="150">


<a href="<?php echo SITE_URL;?>index.php?app=weibo&ac=admin&mg=weibo&ts=isaudit&weiboid=<?php echo $item['weiboid'];?>">
<?php if($item['isaudit']==0) { ?>
[取消审核]
<?php } else { ?>
<font color="red">[审核]</font>
<?php } ?>
</a>


<a href="<?php echo SITE_URL;?>index.php?app=weibo&ac=admin&mg=weibo&ts=delete&weiboid=<?php echo $item['weiboid'];?>">[删除]</a>


</td></tr>
<?php }?>

</table>

</div>

<?php include template("admin/footer");?>