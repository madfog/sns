<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<div class="bbox mh400">


<div class="bc tstheme">
<ul>
<?php foreach((array)$arrTheme as $key=>$item) {?>
<li>
<a href="javascript:void('0');" onclick="selectTheme('<?php echo $item;?>')"><img src="<?php echo SITE_URL;?>theme/<?php echo $item;?>/preview.jpg"></a>
 <p><?php echo $item;?></p>
</li>
<?php if(is_int(($key+1)/7)) { ?>
<div class="clear"></div>
<?php } ?>
<?php }?>
</ul>
</div>

</div>


</div>
<?php include template('footer'); ?>