<?php include('header.php');
buildTitle('Travel Tools');buildMenu('tools');
 ?>

 <div class="container">


    <div class="row search_row border_5px white_box">
        <h1>My Itinerary</h1>
        <div class="col-sm-4">
            <p>
            <ul class="itin_list">
                <li>Aircraft information</li>
                <li>Airport Guide</li>
                <li>Time</li>
                <li>Destinations Guide</li>
                <li>Currency conversion</li>
                <li>Driving directions</li>
                <li>Maps</li>
                <li>Subway map</li>
                <li>Weather</li>
                <li>Meals</li>            
            </ul>
            </p>   
            
<img src="images/itinerary_1.jpg" class="img-responsive centered border_5px">
        </div>

        <div class="col-sm-8">
    
            <div class="welcome_txt">
            <h1>My Itinerary</h1>
            <p>You can find live detail information about your Air ticket reservation on this page including schedule changes.  We recommend monitor your flight before and during your trip for any possible update.
Just enter your Reservation Number and Passenger last name in the following boxes and hit enter.</p>
            

            </div>
       <form action="amadeus.php" target="_blank" method="post" id="amadeus_form">

        <fieldset class="amadeus">
            <div class="col-sm-12">
                <label for="reservationNumber">Reservation Number</label>
                <input type="text" name="reservationNumber" id="reservationNumber" placeholder="Reservation Number" class="amadeus_txt">
                <span class="reservation_number">Enter Reservation Number</span>
            </div>
            <div class="col-sm-12">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="amadeus_txt">
                <span class="last_name">Enter Last Name</span>
            </div>
            <div class="col-sm-6">
            <input type="submit" value="Submit" class="btn submit amadeus_form">
            </div>
        </fieldset>

            </form>
                                            
        </div>

    </div><!-- /row -->

<script type="text/javascript">




</script>



<?php include('bottom_default.php');  include('footer.php'); ?>
