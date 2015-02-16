<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">


<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li><a href="<?php echo tsurl('photo')?>">相册</a></li>
  <li class="active"><?php echo $strAlbum['albumname'];?></li>
</ol>


<div class="panel panel-default">
  <div class="panel-body">
  
  
<h1><?php echo $title;?></h1>



<div>
<?php if($strAlbum['userid'] == $TS_USER['user'][userid] || $TS_USER['user'][isadmin]==1) { ?>    &nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=edit&albumid=<?php echo $strAlbum['albumid'];?>">修改相册属性</a>
    &nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=upload&albumid=<?php echo $strAlbum['albumid'];?>">添加照片</a>
    <?php if($strAlbum['count_photo']>'0') { ?>&nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=info&albumid=<?php echo $strAlbum['albumid'];?>">批量修改</a><?php } ?><?php } ?>
    &nbsp;&gt;&nbsp;<a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$strAlbum['userid']))?>">返回<?php if($strAlbum['userid'] == $TS_USER['user'][userid]) { ?>我<?php } else { ?><?php echo $strUser['username'];?><?php } ?>的相册首页</a>
</div>

  

<div class="row">


<?php if($arrPhoto) { ?>

<?php foreach((array)$arrPhoto as $key=>$item) {?>
  <div class="col-sm-6 col-md-2">
    <div class="thumbnail">
      <a href="<?php echo tsurl('photo','show',array('id'=>$item['photoid']))?>"><img src="<?php echo tsXimg($item['photourl'],'photo',170,'170',$item['path'],1)?>" alt="<?php echo $strAlbum['albumname'];?><?php echo $item['photoname'];?>" width="170" height="170"></a>
      <div class="caption">
        
        <p><?php echo $item['count_view'];?>浏览</p>

      </div>
    </div>
  </div>
<?php }?>

<?php } else { ?>
<br>
<div class="pl">这个相册现在还没有照片
<?php if($strAlbum['userid'] == $TS_USER['user'][userid]) { ?>, 你可以<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=upload&albumid=<?php echo $strAlbum['albumid'];?>">添加照片</a><?php } ?>
</div>
<br>
<?php } ?>
</div>


<div class="page"><?php echo $pageUrl;?></div>

<div><?php echo $strAlbum['albumdesc'];?></div>

<div>

    <?php echo $strAlbum['count_view'];?> 人浏览

<?php echo $strAlbum['count_photo'];?>&nbsp;张照片
&nbsp;<?php echo $strAlbum['addtime'];?>&nbsp;创建

<?php if($strAlbum['userid'] == $TS_USER['user'][userid] || $TS_USER['user'][isadmin]==1) { ?>
&nbsp;&gt;&nbsp;<a  class="j a_confirm_link" rel="nofollow" href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=del&albumid=<?php echo $strAlbum['albumid'];?>">删除相册</a>
<?php } ?>
</div>


</div>
</div>
</div>

<?php include template('footer'); ?>