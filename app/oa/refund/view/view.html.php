<?php 
/**
 * The view file for the method of view of refund module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     customer 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../common/view/header.html.php'; ?>
<?php js::set('mode', $mode == 'review' ? $status : $mode);?>
<?php js::set('createTradeTip', $lang->refund->createTradeTip);?>
<div class='row-table'>
  <div class='col-main'>
    <div class='panel'>
      <div class='panel-heading'><strong><?php echo $refund->name?></strong></div>
      <div class='panel-body'>
        <p><?php echo sprintf($lang->refund->descTip, zget($users, $refund->createdBy), zget($currencySign, $refund->currency) . $refund->money)?></p>
        <?php if(!empty($refund->reason)):?>
        <p><?php echo "{$lang->refund->statusList[$refund->status]}{$lang->refund->reason}:{$refund->reason}"?></p>
        <?php endif;?>
        <p><?php echo $refund->desc?></p>
        <div><?php echo $this->fetch('file', 'printFiles', array('files' => $refund->files, 'fieldset' => 'false'))?></div>
      </div>
    </div> 
    <?php if(!empty($refund->detail)):?>
    <div class='panel'>
      <div class='panel-heading'><strong><?php echo $lang->refund->detail?></strong></div>
      <div class='panel-body no-padding'>
        <table class='table table-fixed table-hover text-center'>
          <tr class="text-center">
            <th class='w-50px'><?php echo $lang->refund->id;?></th>
            <th class='w-100px'><?php echo $lang->refund->money;?></th>
            <th class='w-100px'><?php echo $lang->refund->date;?></th>
            <th class='w-100px'><?php echo $lang->refund->category;?></th>
            <th class='w-100px'><?php echo $lang->refund->related;?></th>
            <th class='w-100px'><?php echo $lang->refund->status;?></th>
            <th><?php echo $lang->refund->desc;?></th>
          </tr>
          <?php foreach($refund->detail as $d):?>
          <tr>
            <td><?php echo $d->id;?></td>
            <td><?php echo zget($currencySign, $d->currency) . $d->money;?></td>
            <td><?php echo formatTime($d->date, DT_DATE1);?></td>
            <td><?php echo zget($categories, $d->category, '');?></td>
            <?php $related = ''; foreach(explode(',', trim($d->related, ',')) as $account) $related .= ' ' . zget($users, $account);?>
            <td title='<?php echo $related;?>'><?php echo $related;?></td>
            <td><span data-toggle='tooltip' data-original-title="<?php echo $d->reason;?>"><?php echo zget($lang->refund->statusList, $d->status);?></span></td>
            <td><?php echo $d->desc;?></td>
          </tr>
          <?php endforeach;?>
        </table>
      </div>
    </div> 
    <?php endif;?>
    <?php echo $this->fetch('action', 'history', "objectType=refund&objectID={$refund->id}");?>
    <div class='page-actions'>
      <?php
      $switchLabel = $refund->status == 'wait' ? $lang->refund->cancel : $lang->refund->commit;
      if($this->app->user->admin == 'super' or $refund->createdBy == $this->app->user->account)
      {
          if(strpos(',wait,draft,', ",$refund->status,") !== false)
          {
              commonModel::printLink('refund', 'switchstatus', "id=$refund->id", $switchLabel, "class='btn reload'");
          }
          if(strpos(',wait,draft,reject,', ",$refund->status,") !== false)
          {
              echo "<div class='btn-group'>";
              commonModel::printLink('refund', 'edit', "refundID=$refund->id", $lang->edit, "class='btn btn-default'");
              commonModel::printLink('refund', 'delete', "refundID=$refund->id", $lang->delete, "class='btn btn-default deleter'");
              echo '</div>';
          }
      }
      if(strpos(',wait,doing,', $refund->status) !== false) 
      {
          commonModel::printLink('refund', 'review', "refundID={$refund->id}", $lang->refund->review, "class='btn btn-default' data-toggle='modal' data-width='800'");
      }
      if($refund->status == 'pass')
      {
          commonModel::printLink('refund', 'reimburse', "refundID={$refund->id}", $lang->refund->common, "class='btn btn-default refund'");
      }
      $browseLink = $this->session->refundList ? $this->session->refundList : inlink('personal');
      commonModel::printRPN($browseLink, $preAndNext);
      ?>
    </div>
  </div>
  <div class='col-side'>
    <div class='panel'>
      <div class='panel-heading'><strong><i class='icon-file-text-alt'></i> <?php echo $lang->refund->baseInfo;?></strong></div>
      <div class='panel-body'>
        <table class='table table-info'>
          <tr>
            <th class='w-80px'><?php echo $lang->refund->dept;?></th>
            <td><?php echo zget($deptList, $refund->dept, '')?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->category;?></th>
            <td><?php echo zget($categories, $refund->category, '')?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->money;?></th>
            <td><?php echo zget($currencySign, $refund->currency) . $refund->money?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->status;?></th>
            <td><?php echo zget($lang->refund->statusList, $refund->status)?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->date;?></th>
            <td><?php echo formatTime($refund->date, DT_DATE1);?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->related;?></th>
            <?php
            $related = '';
            if(!empty($refund->detail))
            {
                $relatedList = array();
                foreach($refund->detail  as $detail)
                {
                    foreach(explode(',', trim($detail->related, ',')) as $account)
                    {
                        if(!$account) continue;
                        $relatedList[$account] = zget($users, $account);
                    }
                }
                $related = implode(' ', $relatedList);
            }
            else
            {
                foreach(explode(',', trim($refund->related, ',')) as $account)
                {
                    $related .= ' ' . zget($users, $account);
                }
            }
            ?>
            <td><?php echo $related;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->createdBy;?></th>
            <td><?php echo zget($users, $refund->createdBy) . $lang->at . $refund->createdDate;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->editedBy;?></th>
            <td><?php if($refund->editedBy) echo zget($users, $refund->editedBy) . $lang->at . $refund->editedDate;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->firstReviewer;?></th>
            <td><?php if($refund->firstReviewer) echo zget($users, $refund->firstReviewer) . $lang->at . $refund->firstReviewDate;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->secondReviewer;?></th>
            <td><?php if($refund->secondReviewer) echo zget($users, $refund->secondReviewer) . $lang->at . $refund->secondReviewDate;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->refund->refundBy;?></th>
            <td><?php if($refund->refundBy) echo zget($users, $refund->refundBy) . $lang->at . $refund->refundDate;?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
