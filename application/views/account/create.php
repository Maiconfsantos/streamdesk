<div class="container">
  <form action="<?php echo base_url()?>Account/new" method='Post'>
    <div class="form-group">
      <label for="Email"><?php echo($email)?></label>
      <input type="email" class="form-control" id="email" name="email" required="true">
      <small id="emailHelp" class="form-text text-muted"><?php echo($new_email_tip)?></small>
    </div>

    <div class="form-group">
      <label for="name"><?php echo($full_name)?></label>
      <input type="text" class="form-control" id="name" name="name" required="true">
      <small id="nameHelp" class="form-text text-muted"><?php echo($full_name_tip)?></small>
    </div>

    <div class="form-group">
      <label for="pass"><?php echo($pass)?></label>
      <input type="password" class="form-control" id="pass" name="pass" required="true">
      <small id="passHelp" class="form-text text-muted"><?php echo($pass_tip)?></small>
    </div>

    <div class="form-group">
      <label for="pass2"><?php echo($pass)?></label>
      <input type="password" class="form-control" id="pass2" name="pass2" required="true">
      <small id="pass2Help" class="form-text text-muted"><?php echo($pass_again_tip)?></small>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo($create_accounte_buttom)?></button>
  </form>
</div>

<script type="text/javascript">
  var password = document.getElementById("pass")
  , confirm_password = document.getElementById("pass2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("<?php echo($not_equal_password_warning)?>");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>