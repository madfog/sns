<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">
<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">我的相册</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">

<?php include template('menu'); ?>

<?php foreach((array)$arrAlbum as $key=>$item) {?>
<div class="box albumlst">
<a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>" class="album_photo"><img src="<?php if($item['albumface'] == '') { ?><?php echo SITE_URL;?>app/<?php echo $app;?>/skins/<?php echo $skin;?>/photo_album.png<?php } else { ?><?php echo tsXimg($item['albumface'],'photo',170,'170',$item['path'],1)?><?php } ?>" width="170" alt="<?php echo $item['albumname'];?>" /></a>
<div class="albumlst_r">
<p class="pd05"><a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>"><?php echo $item['albumname'];?></a></p>
<p class="pd05">
<?php echo $item['count_photo'];?>张照片&nbsp;
<?php echo $item['addtime'];?>创建<br>
</p>

</div>
</div>
<?php if(is_int(($key+1)/5)) { ?>
<div class="clear"></div>
<?php } ?>
<?php }?>


<div class="page"><?php echo $pageUrl;?></div>
</div>

</div>

</div>

<?php include template('footer'); ?>