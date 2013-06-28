<div class="licence-form-wrapper" id="slickbox">
                    	<div id="c_form">	
                          <?php
                        if ((isset($_GET['page'])) && ($_GET['page'] == "thanks")) {
                    ?>
                        <div id="thanksMessage"><h3 class="headline padd">Your request has been successfully sent.</h3></div>
                        <?php
                        } else {
                    ?>	
                        
                  	<form method="get" action="<?php echo($_SERVER["PHP_SELF"]); ?>#submitForm" id="contactForm" name="contactForm">
                     <input type="hidden" name="formSubmit"/>
                        <label for="name">Your Name</label>
                        	<br />
      <div id="nameValidation" class="formValidationNotice"><?php echo(getFormError("name")); ?></div>
       <input type="text" name="name" value="<?php echo(getFormValue("name")); ?>" />
                            <br /><br />
                        <label for="email">E-mail</label>
                        	<br />
       <div id="emailValidation" class="formValidationNotice"><?php echo(getFormError("email")); ?></div>
                        <input type="text" name="email" value="<?php echo(getFormValue("email")); ?>" />
                            <br /><br />
                        <label for="company">Company</label>
                        	<br />
       <div id="companyValidation" class="formValidationNotice"><?php echo(getFormError("company")); ?></div>
                        <input type="text" name="company" value="<?php echo(getFormValue("company")); ?>" />
                            <br /><br />
                        <label for="owner">Owner</label>
                        	<br />
                        <select>
                              <option value="dyce">Lorem Ipsum</option>
                              <option value="dyce2">Lorem Ipsum</option>
                              <option value="dyce3">Lorem Ipsum</option>
                              <option value="dyce4">Lorem Ipsum</option>
                        </select>
                            <br /><br />
                        <label for="song">Song</label>
                        	<br />
                        <select>
                              <option value="dyce">Lorem Ipsum</option>
                              <option value="dyce2">Lorem Ipsum</option>
                              <option value="dyce3">Lorem Ipsum</option>
                              <option value="dyce4">Lorem Ipsum</option>
                        </select>
                            <br /><br />
                        <label for="message">Message</label>
                        	<br />
          <div id="messageValidation" class="formValidationNotice"><?php echo(getFormError("message")); ?></div>
                        <textarea name="message"><?php echo(getFormValue("message")); ?></textarea>
                    		<br /><br />
                         <a name="send" class="licence-song-button" id="submitFormButton">SUBMIT</a>
                        </fieldset>
                    </form>
                    <?php } ?>
                    </div>
</div>