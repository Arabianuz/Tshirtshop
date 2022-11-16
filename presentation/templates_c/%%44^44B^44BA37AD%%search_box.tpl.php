<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from search_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'search_box.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'search_box','assign' => 'obj'), $this);?>

<div class="box">
  <p class="box-title">Katalogdan qidirish</p>
  <form class="search_form" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToSearch; ?>
">
    <p>
      <input maxlength="100" id="search_string" name="search_string"
       value="<?php echo $this->_tpl_vars['obj']->mSearchString; ?>
" size="19" />
      <input type="submit" value="Qidir!" /><br />
    </p>
    <p>
      <input type="checkbox" id="all_words" name="all_words"
       <?php if ($this->_tpl_vars['obj']->mAllWords == 'on'): ?> checked="checked" <?php endif; ?>/>
      Barcha so'zlarni qidirish
    </p>
  </form>
</div>