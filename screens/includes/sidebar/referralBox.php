 
<?php

 if($proposal_enable_referrals == "yes"){ ?>
<?php if($proposal_seller_id != @$login_seller_id){ ?>	

<div class="card mb-5 referral-box">
<div class="card-header">Referral Link</div>
<div class="card-body">
<h6 class="line-height-full font-weight-normal mb-3">
<?= str_replace('{proposal_referral_money}', $proposal_referral_money, $lang['affiliate']);?>
</h6>
<?php if(isset($_SESSION['seller_user_name'])){ ?>
<input class="form-control mt-2" readonly="" value="<?= $site_url . "/referral.php?proposal_id=$proposal_id&referral_code=" . $proposal_referral_code . "&referrer_id=$login_seller_id"; ?>">
<?php }else{ ?>
<button class="btn btn-order referral" data-toggle="modal" data-target="#login-modal">Get referral link</button>
<?php } ?>
</div>
</div>

<?php } ?>
<?php } ?>