{* customer_logged.tpl *}
{load_presentation_object filename="customer_logged" assign="obj"}
<div class="box">
  <p class="box-title">Xush kelibsiz, {$obj->mCustomerName}</p>
  <ul>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'account'} class="selected" {/if}
         href="{$obj->mLinkToAccountDetails}">
        Anketani Tahrirlash
      </a>
    </li>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'credit-card'} class="selected" {/if}
         href="{$obj->mLinkToCreditCardDetails}">
        {$obj->mCreditCardAction} Karta ma'lumotlari
      </a>
    </li>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'address'} class="selected" {/if}
         href="{$obj->mLinkToAddressDetails}">
        {$obj->mAddressAction} Manzil
      </a>
    </li>
    <li>
      <a href="{$obj->mLinkToLogout}">
        Chiqish
      </a>
    </li>
  </ol>
</div>
