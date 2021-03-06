<?php
/**
 * The save order record view file of order module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     order
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../../sys/common/view/header.modal.html.php';?>
<?php include '../../../sys/common/view/datepicker.html.php';?>
<?php include '../../../sys/common/view/chosen.html.php';?>
<?php js::set('key', count($details));?>
<form method='post' id='ajaxForm' action='<?php echo inlink('detail', "tradeID={$trade->id}")?>' class='form-table'>
  <table class='table table-bordered'>
    <thead>
      <tr class='text-center'>
        <th class='w-100px'><?php echo $lang->trade->money;?></th>
        <?php if($trade->type == 'in' or $trade->type == 'out'):?>
        <th class='w-200px'><?php echo $lang->trade->category;?></th>
        <?php endif;?>
        <th class='w-200px'><?php echo $lang->trade->handlers;?></th>
        <th><?php echo $lang->trade->desc;?></th>
        <th class='w-80px'></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($details as $key => $detail):?>
      <tr>
        <td><?php echo html::input("money[{$key}]", $detail->money, "class='form-control'")?></td>
        <?php if($trade->type == 'in' or $trade->type == 'out'):?>
        <td><?php if(isset($categories)) echo html::select("category[{$key}][]", array('') + $categories, $detail->category, "class='form-control chosen'")?></td>
        <?php endif;?>
        <td><?php echo html::select("handlers[{$key}][]", $users, $detail->handlers, "class='form-control chosen' multiple")?></td>
        <td><?php echo html::textarea("desc[{$key}]", $detail->desc, "class='form-control'")?></td>
        <td class='text-center text-middle'><i class='btn btn-mini icon icon-plus'></i> <i class='btn btn-mini icon icon-remove'></i></td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <div class='text-center'><?php echo html::submitButton();?></div>
</form>
<table class='hide'>
  <tbody id='hiddenDetail'>  
    <tr>
      <td><?php echo html::input("money[key]", '', "class='form-control'")?></td>
      <?php if($trade->type == 'in' or $trade->type == 'out'):?>
      <td><?php if(isset($categories)) echo html::select("category[key][]", array('') + $categories, '', "class='form-control'")?></td>
      <?php endif;?>
      <td><?php echo html::select("handlers[key][]", $users, $trade->handlers, "class='form-control' multiple")?></td>
      <td><?php echo html::textarea("desc[key]", '', "class='form-control'")?></td>
      <td><i class='btn icon icon-plus'></i> <i class='btn icon icon-remove'></i></td>
    </tr>
  </tbody>
</table>
<?php include '../../../sys/common/view/footer.modal.html.php';?>
