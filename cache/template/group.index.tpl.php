<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">小组</li>
</ol>

<div class="row">

<div class="col-md-8">

<div class="bbox mh500">
<div class="btitle">全部小组</div>

<div class="bc">
<div id="group_content">

<?php foreach((array)$arrGroup as $key=>$item) {?>
<div class="sub-item">
<div class="pic">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>">
<img src="<?php if($item['photo']) { ?><?php echo tsXimg($item['photo'],'group','120','120',$item['path'],1)?><?php } else { ?><?php echo SITE_URL;?>public/images/group.jpg<?php } ?>" alt="<?php echo $item['groupname'];?>" />
</a>
<div style="background:#F0F0F0;text-align:center;padding:3px 0;">

<?php if(in_array($item['groupid'],$myGroup)) { ?>
已加入
<?php } else { ?>
<a href="javascript:void('0')" onclick="joinGroup('<?php echo $item['groupid'];?>')">+加入</a>
<?php } ?>

</div>
</div>
<div class="info">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a>  <font color="#999999"><?php echo $item['count_user'];?>人加入</font>             
<p><?php echo $item['groupdesc'];?></p>
</div>
</div>
<?php }?>



<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
</div>

<div class="col-md-4">


<?php if($TS_APP['options'][iscreate]==0 || $TS_USER['user'][isadmin]==1) { ?>
<a class="btn btn-info btn-block btn-lg" href="<?php echo tsurl('group','create')?>">
<span class="glyphicon glyphicon-plus-sign"></span> 创建小组</a>
<p></p>
<?php } ?>


<div class="bbox">

<div class="btitle">热门帖子</div>
<ul class="bc titles">
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>
<h3><a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>" target="_blank"><?php echo $item['title'];?></a></h3>
<span class="titles-r-grey"><?php echo $item['count_comment'];?></span>
<p class="titles-b">
<span class="titles-b-l">来自：<a title="<?php echo $item['group']['groupname'];?>" target="_blank" href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['group']['groupname'];?></a>&nbsp;小组
</span>
</p>
</li>
<?php }?>
</ul>

</div>


<div class="bbox">

<div class="btitle">最新创建小组</div>

<div class="bc line23">
<?php if($arrNewGroup) { ?>
<?php foreach((array)$arrNewGroup as $key=>$item) {?>
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a> (<?php echo $item['count_user'];?>)<br>
<?php }?>
<?php } ?>
</div>
</div>

<!--广告位-->
<?php doAction('gobad','300')?>

</div>
</div>
</div>
<?php include template('footer'); ?>