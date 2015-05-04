<?php if (isset($login_fail)) : ?>
  <div class="error"><?php echo 'Form submission failed. Please try again' ; ?></div>
<?php endif ; ?>

<div class="contact-form">
<?php echo validation_errors(); ?>
<?php echo form_open('contact/index') ; ?>
  <fieldset>
    <legend>Your Contact Details</legend>
    <div>
      <label for="name">Name: <em class="required">(Required)</em></label>
      <input name="name" id="name" type="text" />
    </div>

    <div>
      <label for="email">Email Address: <em class="required">(Required)</em></label>
      <input name="email" id="email" type="text" />
    </div>

  </fieldset>

  <fieldset>
    <legend>Comments</legend>
    <div>
      <label for="message">Message: <em class="required">(Required)</em></label>
      <textarea name="message" id="message" cols="20" rows="10"></textarea>
    </div>
  </fieldset>

  <div>
    <input id="submit" class="submit" name="submit" type="submit"/>
  </div>

<?php echo form_close() ; ?>

</div>
