<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from departments_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'departments_list.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'departments_list','assign' => 'obj'), $this);?>

<div class="box">
  <p class="box-title">Bo'limni tanlang</p>
  <ul>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mDepartments) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <?php $this->assign('selected', ""); ?>
        <?php if (( $this->_tpl_vars['obj']->mSelectedDepartment == $this->_tpl_vars['obj']->mDepartments[$this->_sections['i']['index']]['department_id'] )): ?>
      <?php $this->assign('selected', "class=\"selected\""); ?>
    <?php endif; ?>
    <li>
            <a <?php echo $this->_tpl_vars['selected']; ?>
 href="<?php echo $this->_tpl_vars['obj']->mDepartments[$this->_sections['i']['index']]['link_to_department']; ?>
">
        <?php echo $this->_tpl_vars['obj']->mDepartments[$this->_sections['i']['index']]['name']; ?>

      </a>
    </li>
  <?php endfor; endif; ?>
    <?php $this->assign('selected', ""); ?>
    <?php if ($this->_tpl_vars['obj']->mAmazonSelected): ?>
      <?php $this->assign('selected', "class=\"selected\""); ?>
    <?php endif; ?>
    <li>
      <a <?php echo $this->_tpl_vars['selected']; ?>
 href="<?php echo $this->_tpl_vars['obj']->mLinkToAmazonDepartment; ?>
">
        <?php echo $this->_tpl_vars['obj']->mAmazonDepartmentName; ?>

      </a>
    </li>
  </ul>
</div>