<?php defined('IN_TS') or die('Access Denied.'); ?><?php foreach((array)$arrWeibo as $key=>$item) {?>
<li>
<span class="portrait"><a href="<?php echo tsurl('user','space',array('id'=>$item['user']['userid']))?>"><img align="absmiddle" class="SmallPortrait" title="<?php echo $item['user']['username'];?>" alt="<?php echo $item['user']['username'];?>" src="<?php echo $item['user']['face'];?>"></a></span>
<span class="body">
<span class="user"><a href="<?php echo tsurl('user','space',array('id'=>$item['user']['userid']))?>"><?php echo $item['user']['username'];?></a>：</span><span class="log"><?php echo $item['content'];?></span>
<span class="time"><?php echo getTime(strtotime($item['addtime']),time())?> (<a href="<?php echo tsurl('weibo','show',array('id'=>$item['weiboid']))?>"><?php echo $item['count_comment'];?>评</a>)
</span>
</span>
<div class="clear"></div>
</li>
<?php }?>