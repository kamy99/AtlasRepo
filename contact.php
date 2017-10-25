<?php include('functions.php');
buildTitle('Contact Us');
buildMenu('contact', 'default');
?>

<section id="about2" class="about-section-top">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
               <div class="page-title pull-left">
                    <h2 class="title-about">Contact Us</h2>
                </div>
              
             </div>
          </div>
      </div>
    </section>
<section id="top-info-contact">
   <div class="container">
      <div class="row">
         <div class="contact-page col-md-12 effect-5 effects">
                 
                 <div class="contact-square info-square col-sm-4">
                     <i class="fa fa-home"></i>
                     <h3>Address</h3>
                     <p>6075 Yonge St., 2nd Floor, Toronto , Ontario, M2M 3W2 Canada</p>
                     <h3>Business Hours (Eastern Standard Time)</h3>
                     <p>Monday to Friday: 8:00 AM TO 8:00 PM</p>
                     <p>Saturday: 10:00 AM TO 5:00 PM</p>
                     <p>Sunday, and statutory Holidays: CLOSED</p>
                 </div>
                 <div class="contact-square info-square col-sm-4">
                     <i class="fa fa-phone"></i>
                     <h3>Phone</h3>
                     <p>Local: (416) 222.0717</p>
                     <p>Toll Free: 1.877.600.5454</p>
                     <p>Fax: 416-222-9084</p>
                 </div>
                 <div class="contact-square info-square col-sm-4 last-contact">
                     <i class="fa fa-envelope-o"></i>
                     <h3>E-Mail</h3>
                     <p><a href="mailto:agent@atlas.travel"></a>agent@atlas.travel</p>
                     
                 </div>
              </div>
          </div>
     </div>
</section>


<section id="contact-msg-info">
   <div class="container">
      <div class="row">
         <div class="contact-page col-md-12 effect-5 effects">
                    <div class="text-center">
                        <h2>Contact Us </h2>
                     </div>

                <!-- FIFTH EXAMPLE -->
                <div class="box-information">
                    <div class="box-content contact">
                        
                        <form id="contact_form" class="form email-form" name="contact_form" method="post" autocomplete="off" action="">
                          <div class="col-md-6 fc-content">
                            <input name="name" id="name" class="input-contact" placeholder="Name" type="text">
                            <input name="email" class="input-contact" id="email" placeholder="E-mail" type="email">
                          </div>
                          <div class="col-md-6 fc-content2">
                            <textarea name="message" id="message" class="input-contact" placeholder="Message" cols="30" rows="7"></textarea>
                            <button type="submit" class="btn submit-contact"><i class="fa fa-envelope-o"></i>SUBMIT</button>
                            <p class="success">Your message has been sent successfully.</p>
                            <p class="error">E-mail must be valid and message must be longer than 20 characters.</p>
                          </div>
                        </form>
                    </div>
                </div>
            </div><!--Close col 12 -->

          </div>
        </div>
</section>



<?php

    if ( ($_POST["name"]) && ($_POST["email"]) && ($_POST["message"]) ) {


        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Atlas.Travel Contact Form'; 
        $to = 'ben@atlas.travel'; 
        $subject = 'Atlas: Website Message';
        
        $body = "From: $name\n\n\n E-Mail: $email\n\n\n Message:\n\n\n $message";
 
        // Check if name has been entered
        // if (!$_POST['name']) {
        //     $errName = 'Please enter your name';
        // }
        
        // Check if email has been entered and is valid
        // if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //     $errEmail = 'Please enter a valid email address';
        // }
        
        //Check if message has been entered
        // if (!$_POST['message']) {
        //     $errMessage = 'Please enter your message';
        // }
        //Check if simple anti-bot test is correct
        // if ($human !== 5) {
        //     $errHuman = 'Your anti-spam is incorrect';
        // }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
        


<?php buildFooter();?>