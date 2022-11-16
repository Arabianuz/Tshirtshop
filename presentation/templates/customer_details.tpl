{* customer_details.tpl *}
{load_presentation_object filename="customer_details" assign="obj"}
<form method="post" action="{$obj->mLinkToAccountDetails}">
  <h2>Iltimos ma'lumotlaringizni kiriting:</h2>
  <table class="customer-table">
    <tr>
      <td>Elektron pochta manzili:</td>
      <td>
        <input type="text" name="email" value="{$obj->mEmail}"
         {if $obj->mEditMode}readonly="readonly"{/if} size="32" />
        {if $obj->mEmailAlreadyTaken}
        <p class="error">Ushbu elektron pochta manziliga ega foydalanuvchi allaqachon mavjud.</p>
        {/if}
        {if $obj->mEmailError}
        <p class="error">Siz elektron pochta manzilingizni kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Ism:</td>
      <td>
        <input type="text" name="name" value="{$obj->mName}" size="32" />
        {if $obj->mNameError}
        <p class="error">Siz ismingizni kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Parol:</td>
      <td>
        <input type="password" name="password" size="32" />
        {if $obj->mPasswordError}
        <p class="error">Siz parolingizni kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Parolni takroran kiriting:</td>
      <td>
        <input type="password" name="passwordConfirm" size="32" />
        {if $obj->mPasswordConfirmError}
        <p class="error">Siz parolingizni takroran kiritishingiz kerak.</p>
        {elseif $obj->mPasswordMatchError}
        <p class="error">Siz parolingizni takroran kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    {if $obj->mEditMode}
    <tr>
      <td>Kunduzgi telefon:</td>
      <td>
        <input type="text" name="dayPhone" value="{$obj->mDayPhone}"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Tungi telefon:</td>
      <td>
        <input type="text" name="evePhone" value="{$obj->mEvePhone}"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Mobil telefon:</td>
      <td>
        <input type="text" name="mobPhone" value="{$obj->mMobPhone}"
         size="32" />
      </td>
    </tr>
    {/if}
  </table>
  <input type="submit" name="sended" value="Confirm" /> |
  <a href="{$obj->mLinkToCancelPage}">Cancel</a>
</form>
