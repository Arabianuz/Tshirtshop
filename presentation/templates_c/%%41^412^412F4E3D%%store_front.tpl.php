<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),array('function', 'load_presentation_object', 'store_front.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet"
     href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/tshirtshop.css" />
    <script type="text/javascript"
     src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/ajax.js"></script>
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="header" class="yui-g">
              <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
">
                <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/images/tshirtshop.png"
                 alt="tshirtshop logo" />
              </a>
            </div>
            <div id="contents" class="yui-g">
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
          </div>
        </div>
        <div class="yui-b">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mLoginOrLoggedCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php if (! $this->_tpl_vars['obj']->mHideBoxes): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "departments_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCategoriesCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCartSummaryCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </body>
</html>