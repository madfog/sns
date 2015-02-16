<?php defined('IN_TS') or die('Access Denied.'); ?><div class="user_info">
<div class="photo"><img src="<?php echo $strUser['face'];?>" width="48" /></div>
<div class="info">
<div class="username"><a target="_blank" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['username'];?></a></div>
<div class="rolename"><a target="_blank" class="btn btn-default btn-sm" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>">访问空间</a></div>
</div>
</div>

<div class="stats-mod">
<ul class="user-stats clearfix">
<li><a href="<?php echo tsurl('my','score')?>"><strong><?php echo $strUser['count_score'];?></strong>积分</a></li>
<!--<li><a href="#"><strong>1</strong>T币</a></li>-->
</ul>
</div>



<div class="menu-mod clearfix">
<ul class="menus">
<li <?php if($app=='my' && $ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my')?>"><i class="feature-icon feature-icon-home"></i>我的社区</a></li>
<!--<li><a href="<?php echo tsurl('feed','my')?>"><i class="feature-icon feature-icon-feed"></i>好友动态<span class="counter" id="feed-counter"><span title="有2条未读的动态" class="badge badge-warning">2</span></span></a></li>-->
<li <?php if($app=='group') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','my')?>"><i class="feature-icon feature-icon-learn"></i>小组</a></li>
<li <?php if($app=='photo') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo','my')?>"><i class="feature-icon feature-icon-teach"></i>相册</a></li>
<li <?php if($app=='attach') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('attach','my')?>"><i class="feature-icon feature-icon-note"></i>资料</a></li>
<li <?php if($app=='article') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','my')?>"><i class="feature-icon feature-icon-faq"></i>文章</a></li>
<li <?php if($app=='weibo') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('weibo','my')?>"><i class="feature-icon feature-icon-faq"></i>唠叨</a></li>
<li><a href="<?php echo tsurl('redeem','my')?>"><i class="feature-icon feature-icon-faq"></i>积分兑换</a></li>


</ul>



<ul class="menus">
<li <?php if($app=='my' && $ac=='friend') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','friend',array('ts'=>'follow'))?>"><i class="feature-icon feature-icon-friend"></i>好友</a></li>
<li <?php if($app=='message' && $ac=='my' || $app=='message' && $ac=='system') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','my')?>"><i class="feature-icon feature-icon-notification"></i>通知</a></li>
<li <?php if($app=='message' && $ac=='friend') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','friend')?>"><i class="feature-icon feature-icon-message"></i>私信</a></li>
</ul>



<ul class="menus">
<!--<li><a href="#"><i class="feature-icon feature-icon-coin"></i>金币</a></li>-->
<li <?php if($app=='my' && $ac=='setting') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','setting',array('ts'=>'base'))?>"><i class="feature-icon feature-icon-setting"></i>账户设置</a></li>
<li <?php if($app=='my' && $ac=='score') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','score')?>"><i class="feature-icon feature-icon-setting"></i>积分</a></li>
</ul>
</div>
