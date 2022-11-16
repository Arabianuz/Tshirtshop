<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from cart_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'cart_summary.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'cart_summary','assign' => 'obj'), $this);?>

<div class="box" id="cart-summary">
  <p class="box-title">Cart Summary</p>
  <div id="updating">Updating...</div>
<?php if ($this->_tpl_vars['obj']->mEmptyCart): ?>
  <p class="empty-cart">Your shopping cart is empty!</p>
<?php else: ?>
  <table class="cart-summary">
    <tbody>
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mItems) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <tr>
        <td width="30" valign="top" align="right">
          <?php echo $this->_tpl_vars['obj']->mItems[$this->_sections['i']['index']]['quantity']; ?>
 x 
        </td>
        <td>
          <?php echo $this->_tpl_vars['obj']->mItems[$this->_sections['i']['index']]['name']; ?>
 (<?php echo $this->_tpl_vars['obj']->mItems[$this->_sections['i']['index']]['attributes']; ?>
)
        </td>
      </tr>
  <?php endfor; endif; ?>
      <tr>
        <td colspan="2" class="cart-summary-subtotal">
          <span class="price">$<?php echo $this->_tpl_vars['obj']->mTotalAmount; ?>
</span>
          <span>
            [ <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCartDetails; ?>
">View details</a> ]
          </span>
        </td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>
</div>