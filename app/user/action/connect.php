<?php
/**
 * Created by JetBrains PhpStorm.
 * User: a2014
 * Date: 15-2-17
 * Time: 下午12:08
 * To change this template use File | Settings | File Templates.
 */

defined('IN_TS') or die('Access Denied.');

switch($ts){
    case "":        // 第一步，判断登录状态
        // 判断当前登录状态，
        $userid = aac('user')->isLogin();
        if(!empty($userid)) {
            // 如果已经登录，就继续跳转到之前的页面
            getJson('已经登录，不需互联！',$js,2,SITE_URL);
        }
        else {
            // 如果没有登录，跳转到互联页面
            getJson('未登录，需要互联！',$js,2,SITE_URL);
        }

        break;
    case "callback":
        // 互联页面确认后的回调
        //  如果openid已经存在对应的 user_id 直接登录
        //  如果openid 不存在就注册并登录
        break;
}