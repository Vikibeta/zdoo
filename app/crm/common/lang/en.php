<?php
/**
 * The en file of crm common module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     common 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
$lang->app = new stdclass();
$lang->app->name = 'CRM';

$lang->menu->crm = new stdclass();
$lang->menu->crm->dashboard = 'Home|dashboard|index|';
$lang->menu->crm->order     = 'Order|order|index|';
$lang->menu->crm->contract  = 'Contract|contract|browse|mode=unfinished';
$lang->menu->crm->customer  = 'Customer|customer|index|';
$lang->menu->crm->provider  = 'Supplier|provider|browse|';
$lang->menu->crm->contact   = 'Contact|contact|index|';
$lang->menu->crm->leads     = 'Leads|leads|browse|';
$lang->menu->crm->product   = 'Product|product|index|';
$lang->menu->crm->setting   = 'Settings|setting|lang|module=product&field=statusList';

<<<<<<< HEAD
/* Menu of customer module. */
if(!isset($lang->customer)) $lang->customer = new stdclass();
$lang->customer->menu = new stdclass();
$lang->customer->menu->browse       = 'All Customers|customer|browse|mode=all';
$lang->customer->menu->assignedTo   = 'Assigned To Me|customer|browse|mode=assignedtome';
$lang->customer->menu->past         = 'Urgent|customer|browse|mode=past';
$lang->customer->menu->today        = 'Today|customer|browse|mode=today';
$lang->customer->menu->tomorrow     = 'Tomorrow|customer|browse|mode=tomorrow';
$lang->customer->menu->thisweek     = 'This Week|customer|browse|mode=thisweek';
$lang->customer->menu->thismonth    = 'This Month|customer|browse|mode=thismonth';
$lang->customer->menu->public       = 'Public Customers|customer|browse|mode=public';
$lang->customer->menu->report       = 'Report|report|browse|module=customer';

/* Menu of provider module. */
if(!isset($lang->provider)) $lang->provider = new stdclass();
$lang->provider->menu = new stdclass();
$lang->provider->menu->browse = array('link' => 'All Providers|provider|browse|', 'alias' => 'create,edit,view');

/* Menu of product module. */
if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse     = 'All Products|product|browse|mode=all';
$lang->product->menu->normal     = 'Normal|product|browse|mode=normal';
$lang->product->menu->developing = 'Developing|product|browse|mode=developing';
$lang->product->menu->offline    = 'Offline|product|browse|mode=offline';

=======
>>>>>>> ff7adfb781a62c0bbf4cf55ba210ca3fe366e25b
/* Menu of order module. */
if(!isset($lang->order)) $lang->order = new stdclass();
$lang->order->menu = new stdclass();
$lang->order->menu->browse       = 'All|order|browse|mode=all';
$lang->order->menu->assignedTo   = 'Assigned To Me|order|browse|mode=assignedtome';
$lang->order->menu->past         = 'Urgent|order|browse|mode=past';
$lang->order->menu->today        = 'Today|order|browse|mode=today';
$lang->order->menu->tomorrow     = 'Tomorrow|order|browse|mode=tomorrow';
$lang->order->menu->thisweek     = 'This Week|order|browse|mode=thisweek';
$lang->order->menu->thismonth    = 'This Month|order|browse|mode=thismonth';
$lang->order->menu->public       = 'Public|order|browse|mode=public';
$lang->order->menu->report       = 'Report|report|browse|module=order';

/* Menu of contact module. */
if(!isset($lang->contact)) $lang->contact = new stdclass();
$lang->contact->menu = new stdclass();
$lang->contact->menu->browse    = 'All Contacts|contact|browse|mode=all';
$lang->contact->menu->past      = 'Urgent|contact|browse|mode=past';
$lang->contact->menu->today     = 'Today|contact|browse|mode=today';
$lang->contact->menu->tomorrow  = 'Tomorrow|contact|browse|mode=tomorrow';
$lang->contact->menu->thisweek  = 'This Week|contact|browse|mode=thisweek';
$lang->contact->menu->thismonth = 'This Month|contact|browse|mode=thismonth';

if(!isset($lang->leads)) $lang->leads = new stdclass();
$lang->leads->menu = new stdclass();
$lang->leads->menu->assignedTo  = 'Assigned To Me|leads|browse|mode=assignedTo';
$lang->leads->menu->next        = 'Next contact|leads|browse|mode=next';
$lang->leads->menu->ignoredBy   = 'Ignored By Me|leads|browse|mode=ignoredBy&status=ignore';
$lang->leads->menu->public      = 'Public|leads|browse|mode=all&status=ignore';
$lang->leads->menu->setting     = 'Settings|leads|setting|';

/* Menu of contract module. */
if(!isset($lang->contract)) $lang->contract = new stdclass();
$lang->contract->menu = new stdclass();
$lang->contract->menu->browse       = 'All|contract|browse|mode=all';
$lang->contract->menu->unfinished   = 'Unfinished|contract|browse|mode=unfinished';
$lang->contract->menu->unreceived   = 'Receiving|contract|browse|mode=unreceived';
$lang->contract->menu->undeliveried = 'Delivering|contract|browse|mode=undeliveried';
$lang->contract->menu->finished     = 'Finished|contract|browse|mode=finished';
$lang->contract->menu->canceled     = 'Cancelled|contract|browse|mode=canceled';
$lang->contract->menu->expired      = 'Expired|contract|browse|mode=expired';
$lang->contract->menu->expire       = 'Expire Soon|contract|browse|mode=expire';
$lang->contract->menu->report       = 'Report|report|browse|module=contract';

/* Menu of setting module. */
$lang->setting = new stdclass();
$lang->setting->menu = new stdclass();
$lang->setting->menu->product        = 'Product Status|setting|lang|module=product&field=statusList';
$lang->setting->menu->productLine    = 'Product Line|setting|lang|module=product&field=lineList';
$lang->setting->menu->customerType   = 'Customer Status|setting|lang|module=customer&field=typeList';
$lang->setting->menu->customerSize   = 'Customer Size|setting|lang|module=customer&field=sizeNameList';
$lang->setting->menu->customerLevel  = 'Customer Level|setting|lang|module=customer&field=levelNameList';
$lang->setting->menu->customerStatus = 'Customer Status|setting|lang|module=customer&field=statusList';
$lang->setting->menu->area           = 'Area|tree|browse|type=area|';
$lang->setting->menu->industry       = 'Industry|tree|browse|type=industry|';
$lang->setting->menu->currency       = 'Currency|setting|lang|module=common&field=currencyList';
$lang->setting->menu->salesGroup     = array('link' => 'Sales Group|sales|browse|', 'alias' => 'create,edit');
$lang->setting->menu->customerPool   = 'Customer Pool|setting|customerpool||';

/* Menu of sales module. */
if(!isset($lang->sales)) $lang->sales = new stdclass();
$lang->sales->menu = $lang->setting->menu;

$lang->dashboard = new stdclass();
if(!isset($lang->resume))  $lang->resume  = new stdclass();
if(!isset($lang->address)) $lang->address = new stdclass();
