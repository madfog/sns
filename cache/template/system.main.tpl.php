<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script src="public/js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$.getJSON("http://www.thinksaas.cn/index.php?app=notice&ac=new&callback=?", 
	function(data){
		$.each(data, function(i,item){
			$("#admindex_msg table").append("<tr><td width='100'>"+item.time+"</td><td><a href=\""+item.url+"\" target=\"_blank\">"+item.title+"</a></td></tr>");
		});
		return false;
	}); 

	$.getJSON("http://www.thinksaas.cn/index.php?app=service&ac=auth&ts=isauth&url=<?php echo $theAuthUrl;?>&version=<?php echo $TS_CF['info'][version];?>&callback=?", 
	function(rs){
		
		if(rs){
			if(rs.isaudit==1){
				$("#authurl").html('当前域名已获得商业授权');
				return false;
			}else{
				$("#authurl").html('当前域名未被授权 <a target=\"_blank\" href=\"http://www.thinksaas.cn/service/\">【购买商业授权】</a>');
				return false;
			}
		}else{
			
			$("#authurl").html('当前域名未被授权 <a target=\"_blank\" href=\"http://www.thinksaas.cn/service/\">【购买商业授权】</a>');
			return false;
		}
	});
	
});
</script>

<style>
.fbox{float:left;width:45%;margin-right:10px;}
</style>

<div class="midder">

<div class="fbox">
<h2>目录权限</h2>
<table>
<tr><td width="100">cache目录</td><td><?php if(iswriteable('cache')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>
<tr><td>data目录</td><td><?php if(iswriteable('data')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>
<tr><td>tslogs目录</td><td><?php if(iswriteable('tslogs')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>
<tr><td>plugins目录</td><td><?php if(iswriteable('plugins')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>
<tr><td>upgrade目录</td><td><?php if(iswriteable('upgrade')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>
<tr><td>uploadfile目录</td><td><?php if(iswriteable('uploadfile')==0) { ?><font color="red">不可写</font>(请设置为可写777权限)<?php } else { ?>可写<?php } ?></td></tr>

</table>
</div>

<div class="fbox">
<h2>软件信息</h2>
<table>
<tr><td width="100">系统支持：</td><td><?php echo $TS_CF['info'][name];?></td></tr>
<tr><td>程序版本：</td><td><?php echo $TS_CF['info'][version];?>  <span id="upgrade"></span></td></tr>
<tr><td>联系方式：</td><td><?php echo $TS_CF['info'][email];?></td></tr>
<tr><td>官方网址：</td><td><a href="<?php echo $TS_CF['info'][url];?>" target='_blank'><?php echo $TS_CF['info'][url];?></a></td></tr>
<tr><td>域名授权：</td><td><?php echo $theAuthUrl;?><span id="authurl"></span></td></tr>
<tr><td>捐助我们：</td><td><a target="_blank" href="http://www.thinksaas.cn/service/donate/">【赞助ThinkSAAS开源软件开发】</a></td></tr>
</table>
</div>

<div class="fbox"> 
<h2>服务器信息</h2>
<table>
    <tr><td width="100">服务器软件：</td><td><?php echo $systemInfo['server'];?></td></tr>
    <tr><td>操作系统：</td><td><?php echo $systemInfo['phpos'];?></td></tr>
    <tr><td>PHP版本：</td><td><?php echo $systemInfo['phpversion'];?></td></tr>
    <tr><td>MySQL版本：</td><td><?php echo $systemInfo['mysql'];?></td></tr>
    <tr><td>物理路径：</td><td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td></tr>
	 <tr><td>附件上传限制：</td><td><?php echo $systemInfo['upload'];?></td></tr>
    <tr><td>图像处理：</td><td><?php echo $systemInfo['gd'];?> </td></tr>
    <tr><td>语言：</td><td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?></td></tr>
    <tr><td>gzip压缩：</td><td><?php if($_SERVER['HTTP_ACCEPT_ENCODING']) { ?><?php echo $_SERVER['HTTP_ACCEPT_ENCODING'];?><?php } else { ?>不支持<?php } ?></td></tr>
</table>
</div>

<div class="fbox" id="admindex_msg">
<h2>ThinkSAAS官方消息</h2>
<table>

</table>
</div>

</div>
<?php include template('footer'); ?>