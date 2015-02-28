<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<div class="row">

<div class="col-md-8">


<div class="bbox bbox-nbt">

<div class="bc">

<?php include template('menu'); ?>

<div class="commlist">
<ul>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>

<?php if($item['appkey'] != 'group' && $item['appkey']!='') { ?>
<a target="_blank" style="color:#999999;font-size: 12px;margin-right: 5px;" class="titles-type" href="<?php echo SITE_URL;?><?php echo tsUrl($item['appkey'])?>">[<?php echo $item['appname'];?>]</a>
<a title="<?php echo $item['title'];?>" href="<?php echo SITE_URL;?><?php echo tsUrl($item['appkey'],$item['appaction'],array('id'=>$item['appid']))?>"><?php echo $item['title'];?></a>
<?php } else { ?>
<a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo htmlspecialchars($item['title'])?></a> <i><?php echo $item['count_comment'];?></i>
<?php } ?>

</li>
<?php }?>
</ul>
</div>

<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>

<div class="col-md-4">
<?php include template('userinfo'); ?>
</div>

</div>
</div>
<?php include template('footer'); ?>