<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from first_page_contents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'first_page_contents.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'first_page_contents','assign' => 'obj'), $this);?>

<p class="description">
  Bizning Onlayn Do'konimizga Xush kelibsiz!
</p>
<p class="description">
  We have the largest collection of t-shirts with postal stamps on Earth!
  Browse our departments and cateogories to find your favorite!
</p>
<p>Access the <a href="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">admin sahifasi</a>.</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>