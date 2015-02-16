<?php defined('IN_TS') or die('Access Denied.'); ?><h2>管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=weibo&ac=admin&mg=options">配置</a></li>

<li <?php if($mg=='weibo' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=weibo&ac=admin&mg=weibo&ts=list">列表</a></li>

</ul>
</div>