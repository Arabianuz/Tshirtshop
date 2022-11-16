{* customer_credit_card.tpl *}
{load_presentation_object filename="customer_credit_card" assign="obj"}
<form method="post" action="{$obj->mLinkToCreditCardDetails}">
  <h2>Iltimos karta ma'lumotlaringizni kiriting:</h2>
  <table class="customer-table">
    <tr>
      <td>Karta Egasi:</td>
      <td>
        <input type="text" name="cardHolder" size="32"
         value="{$obj->mPlainCreditCard.card_holder}" />
        {if $obj->mCardHolderError}
        <p class="error">Siz kerta egasini kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Karta Raqami (faqat raqam):</td>
      <td>
        <input type="text" name="cardNumber" size="32"
         value="{$obj->mPlainCreditCard.card_number}" />
        {if $obj->mCardNumberError}
        <p class="error">Siz karta raqamini kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Amal qilish sanasi (OY/Yil):</td>
      <td>
        <input type="text" name="expDate" size="32"
         value="{$obj->mPlainCreditCard.expiry_date}" />
        {if $obj->mExpDateError}
        <p class="error">Siz amal qilish sanasini kiritishingiz kerak</p>
        {/if}
      </td>
    </tr>
    <tr>
      <td>Berilgan Sanasi (OY/Yil Agar mumkin bo'lsa):</td>
      <td>
        <input type="text" name="issueDate" size="32"
         value="{$obj->mPlainCreditCard.issue_date}" />
      </td>
    </tr>
    <tr>
      <td>Ishlab chiqarish raqami (Agar mumkin bo'lsa):</td>
      <td>
        <input type="text" name="issueNumber" size="32"
         value="{$obj->mPlainCreditCard.issue_number}" />
      </td>
    </tr>
    <tr>
      <td>Karta Turi:</td>
      <td>
        <select name="cardType">
          {html_options options=$obj->mCardTypes
           selected=$obj->mPlainCreditCard.card_type}
        </select>
        {if $obj->mCardTypesError}
        <p class="error">Siz karta turini kiritishingiz kerak.</p>
        {/if}
      </td>
    </tr>
  </table>
  <input type="submit" name="sended" value="Confirm" /> |
  <a href="{$obj->mLinkToCancelPage}">Bekor qilish</a>
</form>
