<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from products_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'products_list.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'products_list','assign' => 'obj'), $this);?>

<?php if ($this->_tpl_vars['obj']->mSearchDescription != ""): ?>
  <p class="description"><?php echo $this->_tpl_vars['obj']->mSearchDescription; ?>
</p>
<?php endif; ?>
<?php if (count ( $this->_tpl_vars['obj']->mProductListPages ) > 0): ?>
<p>

  <?php if ($this->_tpl_vars['obj']->mLinkToPreviousPage): ?>
  <a href="<?php echo $this->_tpl_vars['obj']->mLinkToPreviousPage; ?>
">Previous page</a>
  <?php endif; ?>

  <?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProductListPages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
    <?php if ($this->_tpl_vars['obj']->mPage == $this->_sections['m']['index_next']): ?>
    <strong><?php echo $this->_sections['m']['index_next']; ?>
</strong>
    <?php else: ?>
    <a href="<?php echo $this->_tpl_vars['obj']->mProductListPages[$this->_sections['m']['index']]; ?>
"><?php echo $this->_sections['m']['index_next']; ?>
</a>
    <?php endif; ?>
  <?php endfor; endif; ?>

  <?php if ($this->_tpl_vars['obj']->mLinkToNextPage): ?>
  <a href="<?php echo $this->_tpl_vars['obj']->mLinkToNextPage; ?>
">Next page</a>
  <?php endif; ?>

</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mProducts): ?>
<table class="product-list" border="0">
  <tbody>
  <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
    <?php if ($this->_sections['k']['index'] % 2 == 0): ?>
    <tr>
    <?php endif; ?>
      <td valign="top">
        <h3 class="product-title">
          <a href="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_product']; ?>
">
            <?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['name']; ?>

          </a>
        </h3>
        <p>
          <?php if ($this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['thumbnail'] != ""): ?>
          <a href="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_product']; ?>
">
            <img src="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['thumbnail']; ?>
"
             alt="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['name']; ?>
" />
          </a>
          <?php endif; ?>
          <?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['description']; ?>

        </p>
        <p class="section">
          Price:
          <?php if ($this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['discounted_price'] != 0): ?>
            <span class="old-price"><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['price']; ?>
</span>
            <span class="price"><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['discounted_price']; ?>
</span>
          <?php else: ?>
            <span class="price"><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['price']; ?>
</span>
          <?php endif; ?>
        </p>

                <form class="add-product-form" target="_self" method="post"
         action="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_add_product']; ?>
"
         onsubmit="return addProductToCart(this);">

                <p class="attributes">

                <?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>

                    <?php if ($this->_sections['l']['first'] || $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index_prev']]['attribute_name']): ?>
            <?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_name']; ?>
:
          <select name="attr_<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_name']; ?>
">
          <?php endif; ?>

                        <option value="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_value']; ?>
">
              <?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_value']; ?>

            </option>

                    <?php if ($this->_sections['l']['last'] || $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['attributes'][$this->_sections['l']['index_next']]['attribute_name']): ?>
          </select>
          <?php endif; ?>

        <?php endfor; endif; ?>
        </p>

                <p>
          <input type="submit" name="add_to_cart" value="Savatga qo'shish" />
        </p>
        </form>

            <?php if ($this->_tpl_vars['obj']->mShowEditButton): ?>
        <form action="<?php echo $this->_tpl_vars['obj']->mEditActionTarget; ?>
" target="_self"
         method="post" class="edit-form">
          <input type="hidden" name="product_id"
           value="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['product_id']; ?>
" />
          <input type="submit" name="submit" value="Mahsulotni Tahrirlash" />
        </form>
      <?php endif; ?>
      </td>
    <?php if ($this->_sections['k']['index'] % 2 != 0 && ! $this->_sections['k']['first'] || $this->_sections['k']['last']): ?>
    </tr>
    <?php endif; ?>
  <?php endfor; endif; ?>
  </tbody>
</table>
<?php endif; ?>