<?php
/**
 * The doc module english file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     doc
 * @version     $Id: en.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        http://www.ranzhico.com
 */
if(!isset($lang->doc)) $lang->doc = new stdclass();
$lang->doc->common         = 'Document';
$lang->doc->id             = 'ID';
$lang->doc->product        = 'Product';
$lang->doc->project        = 'Project';
$lang->doc->lib            = 'Library';
$lang->doc->category       = 'Category';
$lang->doc->title          = 'Title';
$lang->doc->digest         = 'Summary';
$lang->doc->comment        = 'Comment';
$lang->doc->type           = 'Type';
$lang->doc->content        = 'Content';
$lang->doc->keywords       = 'Keywords';
$lang->doc->url            = 'URL';
$lang->doc->files          = 'File';
$lang->doc->views          = 'Views';
$lang->doc->createdBy      = 'Created by';
$lang->doc->createdDate    = 'Created on';
$lang->doc->editedBy       = 'Edited by';
$lang->doc->editedDate     = 'Edited on';
$lang->doc->basicInfo      = 'Basic Info';
$lang->doc->deleted        = 'Deleted';

$lang->doc->index          = 'Index';
$lang->doc->create         = 'Create';
$lang->doc->edit           = 'Edit';
$lang->doc->delete         = 'Delete';
$lang->doc->browse         = 'Documents';
$lang->doc->view           = 'Documents';
$lang->doc->manageType     = 'Manage Categories';

$lang->doc->libName        = 'Name';
$lang->doc->createLib      = 'Create a Library';
$lang->doc->editLib        = 'Edit';
$lang->doc->deleteLib      = 'Delete';

$lang->doc->allProduct     = 'All products';
$lang->doc->allProject     = 'All projects';

$lang->doc->private        = 'Private';
$lang->doc->users          = 'Users';
$lang->doc->groups         = 'Groups';

$lang->doc->systemLibs = array();
//$lang->doc->systemLibs['product'] = 'Product doc';
//$lang->doc->systemLibs['project'] = 'Project doc';

$lang->doc->types['file'] = 'File';
$lang->doc->types['url']  = 'Link';
$lang->doc->types['text'] = 'Html';

$lang->doc->confirmDelete      = "Do you want to delete this doc?";
$lang->doc->confirmDeleteLib   = "Do you want to delete this doc library?";
$lang->doc->errorEditSystemDoc = "System doc library cannot be edited.";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = 'url';

$lang->doc->notFound    = 'The document does not exist';
$lang->doc->libNotFound = 'The document library does not exist';
$lang->doc->libNotFound = 'Doc Lib is not found.';
