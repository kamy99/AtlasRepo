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
                <li class="home first">
                    6075 Yonge St., 2nd Floor, Toronto , Ontario, M2M 3W2
                Canada</li>
                <li class="phone">
                    <a href="tel:14162220717" title="1-416-222-0717">Phone: 1-416-222-0717</a><hr>
                    <a href="tel:18776005454" title="1-877-600-5454">Toll Free: 1-877-600-5454</a><hr>
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

<?php
    if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Atlas.Travel Contact Form'; 
        $to = 'ben@atlas.travel'; 
        $subject = 'Atlas.Web Message';
        
        $body = "From: $name\n\n\n E-Mail: $email\n\n\n Message:\n\n\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
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
        
<div class="row search_row border_5px white_box">
            <div class="col-sm-12">
                                <div class="innerTitle noBorder"><h2>CONTACT <span>Form</span></h2></div>

<form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form>

            </div><!-- /col -->
        </div><!-- /row -->

    </div>


<?php include('bottom_default.php');  include('footer.php'); ?>