<?php
/**
 * The thread module zh-tw file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     thread
 * @version     $Id: zh-tw.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
$lang->thread->common    = '主題';

$lang->thread->id         = '編號';
$lang->thread->title      = '標題';
$lang->thread->board      = '版塊';
$lang->thread->author     = '作者';
$lang->thread->content    = '內容';
$lang->thread->file       = '附件: ';
$lang->thread->postedDate = '發表於';
$lang->thread->replies    = '回帖';
$lang->thread->views      = '閲讀';
$lang->thread->lastReply  = '最後回帖';

$lang->thread->post         = '發貼';
$lang->thread->postTo       = '發佈貼子到';
$lang->thread->browse       = '主題列表';
$lang->thread->stick        = '置頂';
$lang->thread->edit         = '編輯主題';
$lang->thread->view         = '查看主題';
$lang->thread->delete       = '刪除主題';
$lang->thread->status       = '狀態';
$lang->thread->hide         = '隱藏';
$lang->thread->show         = '顯示';
$lang->thread->transfer     = '轉移';
$lang->thread->switchStatus = '切換狀態';
$lang->thread->deleteFile   = '刪除附件';

$lang->thread->sticks[0] = '不置頂';
$lang->thread->sticks[1] = '版塊置頂';
$lang->thread->sticks[2] = '全局置頂';

$lang->thread->statusList['hidden'] = '已隱藏';
$lang->thread->statusList['normal'] = '正常';

$lang->thread->confirmDeleteThread = "您確定刪除該主題嗎？";
$lang->thread->confirmHideReply    = "您確定隱藏回帖嗎？";
$lang->thread->confirmHideThread   = "您確定隱藏該主題嗎？";
$lang->thread->confirmDeleteReply  = "您確定刪除該回帖嗎？";
$lang->thread->confirmDeleteFile   = "您確定刪除該附件嗎？";

$lang->thread->lblEdited       = '%s 最後編輯, %s';
$lang->thread->message         = '%s在論壇#%s回覆了主題：%s，內容為：%s';
$lang->thread->readonly        = '只讀';
$lang->thread->successStick    = '成功置頂';
$lang->thread->successUnstick  = '成功取消置頂';
$lang->thread->successHide     = '成功隱藏帖子';
$lang->thread->successShow     = '顯示成功';
$lang->thread->readonlyMessage = '該帖已被設置為 <strong>只讀</strong>，您暫時無法發表新的回覆。';
$lang->thread->successTransfer = '轉移成功';

/* Adjust the pager. */
if(!isset($lang->pager->settedInForum))
{
    $lang->pager->noRecord = '';
    $lang->pager->digest   = str_replace('記錄', '回貼', $lang->pager->digest);
}
