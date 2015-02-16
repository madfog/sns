<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">创建新专辑</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">

<?php include template('menu'); ?>





<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  
<form role="form" method="POST" action="<?php echo tsurl('photo','create',array('ts'=>'do'))?>">
  <div class="form-group">
    <label>相册名称（必填）</label>
    <input type="text" name="albumname" class="form-control" >
  </div>
  
  <div class="form-group">
    <label>相册介绍：</label>
    <textarea class="form-control" rows="3" name="albumdesc"></textarea>
  </div>


<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">创建相册</button> <a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$userid))?>">返回我的相册</a>
</form>

<p>

</p>
  </div>
  <div class="col-md-4"></div>
</div>







</div>
</div>


</div>

<?php include template('footer'); ?>