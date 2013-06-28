<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("includes/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('rmufandaedza@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?><?php include 'includes/header.php'; ?>

<style>
   .spmhidip { display: none; }
</style>
<body>

<!--Logo and nav section-->
<?php include 'includes/nav.php'; ?>
 <!--End of Logo and nav section-->

<div class="container_12">

<section class="grid_7">
    
<div class="main-content">
<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Book an Artist</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text' class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>*required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div><br />
<div class='field-container'>
   <label for='name'>Name*: </label><br/>
   <span id='contactus_name_errorloc' class='error'></span>
   <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' /><br/>
</div>
<div class='field-container'>
    <label for='email'>Email*:</label><br/>
    <span id='contactus_email_errorloc' class='error'></span>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' /><br/>
</div>

<div class='field-container'>
    <label for='company'>Company*:</label><br/>
    <span id='contactus_company_errorloc' class='error'></span>
    <input type='text' name='company' id='company' value='<?php echo $formproc->SafeDisplay('company') ?>' /><br/>
</div>
		
<div class='field-container'>
   <label>Artist:</label><br />
   <select>
      <option>DJ Xtrio</option>
      <option>DJ Dyce</option>
   </select>
</div>

<div class='field-container'>
    <label for='message'>Message*:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea type='text' name='message' id='message' value=''><?php echo $formproc->SafeDisplay('message') ?></textarea><br/>
</div>

<div class='field-container'>
    <input type='submit' name='Submit' value='Submit' class="book-artist-button" />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide address");
	
	frmvalidator.addValidation("email","email","Please enter a valid email address");
	
	frmvalidator.addValidation("company","req","Please provide your company name");
	
    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>
    </div>
</section>

<section class="grid_5 hidden-phone">
      <div class="right-section">
    <a class="twitter-timeline" href="https://twitter.com/dycejones" data-widget-id="310687370896871424">Tweets by @dycejones</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 	</div>
    
    <div class="grid_5">
        <div class="publishing-right-section">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FDJS-4-Africa%2F268391103221284&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;appId=245571628891608" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height: 756px;" allowTransparency="true" class="right-section hidden-phone"></iframe>
        </div>    
    </div>
</section>
  
<br id="clear" />

<!--Mobile fb and twitter -->

<div class="fb-twitter visible-phone">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.djs4africa.com&amp;send=false&amp;layout=box_count&amp;width=50&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=245571628891608" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50%; height:70px;" allowTransparency="true"></iframe>


<span class="left-float">
<a href="https://twitter.com/dycejones" class="twitter-follow-button visible-phone" data-show-count="false" data-size="large" style="height: 90px;">Follow @dycejones</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</span>
<!--<p class="pull-right"><a href="#">Back to top</a></p>-->
</div>

</div>
</body>
</html>