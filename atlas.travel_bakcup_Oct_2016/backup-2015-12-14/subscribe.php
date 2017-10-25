<?php include('header.php');
buildTitle('Contact us');buildMenu('tools');
 ?>
<div class="container">
        
     <div class="row search_row border_5px white_box">
        <h1>Contact us</h1>

        <form novalidate="novalidate" id="contactForm" class="generalForm">
        <div class="col-sm-6">
             <div class="innerTitle noBorder"><h2>CONTACT <span>INFO</span></h2></div>
                <ul class="contactInfo">
                <li class="home first">6087A Yonge St.
                Toronto , Ontario, M2M 3W2
                Canada</li>
                <li class="phone">
                    <a href="tel:84936682236" title="">Phone: 1-416-222-0717</a><hr>
                    <a href="tel:84936682236" title="">Toll Free: 1-877-600-5454</a><hr>
                    <a href="#">Fax: 416-222-9084</a>
                </li>
                <li class="mail last">
                    <a href="mailto:agent@atlas.travel">agent@atlas.travel</a><br>
                </li>
                </ul>
        </div>

        <div class="col-sm-6">
                         <div class="innerTitle noBorder"><h2>Business Hours (Eastern Standard Time)</h2></div>
            <p>Monday to Friday: 8:00 AM TO 8:00 PM</p>
            <p>Saturday: 10:00 AM TO 5:00 PM</p>
            <p>Sunday, and statutory Holidays: CLOSED</p>
           
        </div>
    </form>

     </div>   



    </div>

<?php
    if ($_POST["submit"]) {
        $email = $_POST['email'];
        $from = 'Atlas.Travel Contact Form'; 
        $to = 'ben@atlas.travel'; 
        //$to = "kamy99@yahoo.com";
        $subject = 'Atlas.Web Newsletter Subscription';
        
        $body = "E-Mail: $email\n\n\n";
 
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
 
// If there are no errors, send the email
if (!$errEmail) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will add you to our newsletter</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>



<?php include('bottom_default.php');  include('footer.php'); ?>