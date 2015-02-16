<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<div class="row">
<div class="col-md-8">


<div class="bbox">
<div class="bc">
<?php include template('menu'); ?>

<p></p>

<?php foreach((array)$arrGroupList as $key=>$item) {?>
<div class="sub-item">
<div class="pic">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>">
<img src="<?php echo $item['photo'];?>" alt="<?php echo $item['groupname'];?>" />
</a>



</div>
<div class="info">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a>  <font color="#999999"><?php echo $item['count_user'];?>人加入</font>             
<p><?php echo t($item['groupdesc'])?></p>
</div>
</div>
<?php }?>
</div>
</div>
</div>

<div class="col-md-4">
<?php include template('userinfo'); ?>
</div>

</div>
</div>
<?php include template('footer'); ?>