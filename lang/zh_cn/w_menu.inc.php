<?php
/**
 * 框架菜单
 */

$wmenu = array();

// ----- 管理中心 -----
$wmenu['admin']                            = array('name'=>'后台', 'display'=>1);

$wmenu['admin/home']                       = array('name'=>'后台', 'display'=>1);
$wmenu['admin/home/index']                 = array('name'=>'默认页', 'display'=>1);

$wmenu['admin/system']                     = array('name'=>'系统管理', 'display'=>1);
$wmenu['admin/system/config']              = array('name'=>'网站配置', 'display'=>1);
$wmenu['admin/system/configupdate']        = array('name'=>'网站配置更新', 'display'=>0);
$wmenu['admin/system/adminlog']            = array('name'=>'管理日志', 'display'=>1);
$wmenu['admin/system/adminlogdelete']      = array('name'=>'管理日志删除', 'display'=>0);
$wmenu['admin/system/errorlog']            = array('name'=>'错误日志', 'display'=>1);
$wmenu['admin/system/errorlogread']        = array('name'=>'错误日志查看', 'display'=>0);
$wmenu['admin/system/errorlogdelete']      = array('name'=>'错误日志删除', 'display'=>0);
$wmenu['admin/system/cleardata']           = array('name'=>'清理数据', 'display'=>1);

$wmenu['admin/user']                       = array('name'=>'用户管理', 'display'=>1);
$wmenu['admin/user/role']                  = array('name'=>'角色管理', 'display'=>1);
$wmenu['admin/user/roleadd']               = array('name'=>'角色添加', 'display'=>0);
$wmenu['admin/user/roleupdate']            = array('name'=>'角色更新', 'display'=>0);
$wmenu['admin/user/roledelete']            = array('name'=>'角色删除', 'display'=>0);
$wmenu['admin/user/rolepermissioncontrol'] = array('name'=>'角色权限控制', 'display'=>1);
$wmenu['admin/user/rolepermissionassign']  = array('name'=>'角色权限分配', 'display'=>0);
$wmenu['admin/user/rolepermissionupdate']  = array('name'=>'角色权限更新', 'display'=>0);
$wmenu['admin/user/list']                  = array('name'=>'用户列表', 'display'=>1);
$wmenu['admin/user/add']                   = array('name'=>'用户添加', 'display'=>1);
$wmenu['admin/user/update']                = array('name'=>'用户更新', 'display'=>0);
$wmenu['admin/user/delete']                = array('name'=>'用户删除', 'display'=>0);
$wmenu['admin/user/self']                  = array('name'=>'个人信息修改', 'display'=>1);

$wmenu['admin/article']                    = array('name'=>'文章管理', 'display'=>1);
$wmenu['admin/article/categoryadd']        = array('name'=>'文章分类添加', 'display'=>1);
$wmenu['admin/article/categorylist']       = array('name'=>'文章分类列表', 'display'=>1);
$wmenu['admin/article/categoryupdate']     = array('name'=>'文章分类更新', 'display'=>0);
$wmenu['admin/article/categorydelete']     = array('name'=>'文章分类删除', 'display'=>0);
$wmenu['admin/article/add']                = array('name'=>'文章添加', 'display'=>1);
$wmenu['admin/article/list']               = array('name'=>'文章列表', 'display'=>1);
$wmenu['admin/article/update']             = array('name'=>'文章更新', 'display'=>0);
$wmenu['admin/article/delete']             = array('name'=>'文章删除', 'display'=>0);

$wmenu['admin/singlepage']                 = array('name'=>'单页管理', 'display'=>1);
$wmenu['admin/singlepage/add']             = array('name'=>'单页添加', 'display'=>1);
$wmenu['admin/singlepage/list']            = array('name'=>'单页列表', 'display'=>1);
$wmenu['admin/singlepage/update']          = array('name'=>'单页更新', 'display'=>0);
$wmenu['admin/singlepage/delete']          = array('name'=>'单页删除', 'display'=>0);

$wmenu['admin/nav']                        = array('name'=>'导航菜单', 'display'=>1);
$wmenu['admin/nav/add']                    = array('name'=>'导航添加', 'display'=>1);
$wmenu['admin/nav/list']                   = array('name'=>'导航列表', 'display'=>1);
$wmenu['admin/nav/update']                 = array('name'=>'导航更新', 'display'=>0);
$wmenu['admin/nav/delete']                 = array('name'=>'导航删除', 'display'=>0);
$wmenu['admin/nav/generate']               = array('name'=>'导航生成', 'display'=>1);

// ----- 通用应用 -----
$wmenu['general']                          = array('name'=>'通用应用', 'display'=>1);

$wmenu['general/upload']                   = array('name'=>'上传文件', 'display'=>1);
$wmenu['general/upload/admin']             = array('name'=>'后台图片/文件上传', 'display'=>1);

$wmenu['general/ueditor']                  = array('name'=>'UEditor编辑器', 'display'=>1);
$wmenu['general/ueditor/controlleradmin']  = array('name'=>'后台上传/涂鸦/远程图片抓取...', 'display'=>1);
$wmenu['general/ueditor/controllermember'] = array('name'=>'会员上传/涂鸦/远程图片抓取...', 'display'=>1);

// ----- 会员中心 -----
$wmenu['member']                           = array('name'=>'会员中心', 'display'=>1);

$wmenu['member/home']                      = array('name'=>'会员家园', 'display'=>1);
$wmenu['member/home/index']                = array('name'=>'会员首页', 'display'=>1);

$wmenu['member/finance']                   = array('name'=>'财务信息', 'display'=>1);
$wmenu['member/finance/list']              = array('name'=>'消费列表', 'display'=>1);
$wmenu['member/finance/log']               = array('name'=>'充值记录', 'display'=>1);

$wmenu['member/profile']                   = array('name'=>'我的资料', 'display'=>1);
$wmenu['member/profile/edit']              = array('name'=>'编辑资料', 'display'=>1);
$wmenu['member/profile/authentication']    = array('name'=>'认证信息', 'display'=>1);

// ----- 前台内容 -----
//$wmenu['content']                          = array('name'=>'前台内容', 'display'=>1);
//$wmenu['content/home']                     = array('name'=>'前台主页', 'display'=>1);
//$wmenu['content/home/index']               = array('name'=>'前台默认页', 'display'=>1);

// ----- APP api -----
$wmenu['appapi']                           = array('name'=>'手机api', 'display'=>1);
$wmenu['appapi/user']                      = array('name'=>'用户中心', 'display'=>1);
$wmenu['appapi/user/myprofile']            = array('name'=>'个人信息', 'display'=>1);
