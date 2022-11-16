<?php /* Smarty version 2.6.31, created on 2021-03-30 17:04:07
         compiled from customer_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_login.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_login','assign' => 'obj'), $this);?>

<div class="box">
  <p class="box-title">Kirish</p>
  <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToLogin; ?>
">
    <?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
    <p>
      <label for="email">E-mail :</label>
      <input type="text" maxlength="50" name="email" size="22"
       value="<?php echo $this->_tpl_vars['obj']->mEmail; ?>
" />
    </p>
    <p>
      <label for="password">Parol:</label>
      <input type="password" maxlength="50" name="password" size="22" />
    </p>
    <p>
      <input type="submit" name="Login" value="Login" /> |
      <a href="<?php echo $this->_tpl_vars['obj']->mLinkToRegisterCustomer; ?>
">Ro'yxatdan o'tish</a>
    </p>
  </form>
</div>