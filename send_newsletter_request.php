
<?php
// process.php

 //var_dump($_POST);
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if ( isset( $_POST['newsletter_name']  )  &&   isset( $_POST['newsletter_email'] ) ){

             $to = "info@atlas.travel";
            //  $to = "kamy99@gmail.com";
             $subject = "Newsletter Subscription";
             $txt = "There is a Newsletter sign up:  ".$_POST['newsletter_name']." --  ".$_POST['newsletter_email'];
             $headers = "From: webmaster@atlas.travel";
             mail($to,$subject,$txt,$headers);
            $data['success'] = true;
            $data['message'] = 'Thank you for Signing up !';
}
else
{

}

    echo json_encode($data);



//  //echo "Name is  newsletter_name ".$_POST['newsletter_name'];



// // validate the variables ======================================================
//     // if any of these variables don't exist, add an error to our $errors array

//     if ($_POST['newsletter_name'] == "")
//      //   $errors['newsletter_name'] = 'Name is required.';

//     // if (empty($_POST['newsletter_email']))
//          $errors['newsletter_email'] = 'Email is required.';


// // return a response ===========================================================

//     // if there are any errors in our errors array, return a success boolean of false
//     if ( ! empty($errors)) {

//         // if there are items in our errors array, return those errors
//         $data['success'] = false;
//         $data['errors']  = $errors;
//     } else {

//              $to = "kamy99@gmail.com";
//              $subject = "Newsletter Subscription";
//              $txt = $_POST['newsletter_name']." --  ".$_POST['newsletter_email'];
//              $headers = "From: webmaster@atlas.travel";

//            // mail($to,$subject,$txt,$headers);

//         // if there are no errors process our form, then return a message

//         // DO ALL YOUR FORM PROCESSING HERE
//         // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

//         // show a message of success and provide a true success variable
//         $data['success'] = true;
//         $data['message'] = 'Success!';
//         $data['name'] = $_POST['newsletter_name'];
//         $data['email'] = $_POST['newsletter_email'];

//     }
// var_dump($data);
// echo "<hr>";
// var_dump("Errors dump   ".$errors."<hr>");
//     // return all our data to an AJAX call

// var_dump($data);
    ?>
