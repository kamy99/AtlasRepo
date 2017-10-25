<?php  function buildSearchBox(
  $search_box,
  $slider_name ="",
  $promo_box = "" // set side promo box

 ){ // now we have the option of using a specifc slider name OR use passed value/page

  ?>

<section id="reservation-form" class="home_hero slide_<?php if (isset($slider_name)){echo $slider_name."_";} ?><?php // randomize bg
$a=array("1","2","3"); echo array_rand(array_flip($a), 1);?> slide_<?php if (isset($search_box)){echo $search_box."_";} ?><?php // randomize bg
$a=array("1","2","3"); echo array_rand(array_flip($a), 1);?>">
  <div class="container">
    <div class="row search_bx_row">
      <div class="col-md-6">
        <!-- starts tabs  -->

          <?php // start new layout ?>
          <div class="search_box_wrapper">

          <ul class="nav nav-tabs">
            <li <?php if ( ($search_box == 'flights') || ($search_box == 'home') ){ ?>class="active"<?php } else {?> class=""<?php }?>><a data-toggle="tab" href="#home" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Flights Tab"><i class="fa fa-plane">&nbsp;</i>Flights</a></li>
            <li <?php if ($search_box == 'hotels') { ?>class="active"<?php } else {?> <?php }?>><a data-toggle="tab__" href="hotels.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Hotels Tab"><i class="fa fa-hotel">&nbsp;</i>Hotels</a></li>
            <li <?php if ($search_box == 'packages') { ?>class="active"<?php } else {?> <?php }?>><a data-toggle="tab__" href="vacations.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Vacations Tab"><i class="fa fa-suitcase">&nbsp;</i>Vacations</a></li>
            <li <?php if ($search_box == 'cars') { ?>class="active"<?php } else {?> <?php }?>><a id="cars_tab" data-toggle="tab__" href="cars.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Cars Tab"><i class="fa fa-car">&nbsp;</i>Cars</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade <?php if (($search_box == 'flights') || ($search_box == 'home')){echo "in active";}?>">
              <?php include('form_search_box_clean.php');?>
              <?php //include('form_flights_date_picker.php');?>
            </div>
            <div id="menu1" class="tab-pane fade <?php if ($search_box == 'hotels'){echo "in active";}?>  ">
              <?php // Had to remove Tabs due to SSL confilcts with SV images & iframe ?>
              <?php //include('form_hotels.php'); ?>
            </div>
            <div id="menu2" class="tab-pane fade <?php if ($search_box == 'packages'){echo "in active";}?>">
              <?php //include('form_packages.php'); ?>
            </div>
            <div id="menu3" class="tab-pane fade <?php if ($search_box == 'cars'){echo "in active";}?>">
              <?php //include('form_cars.php'); ?>
            </div>

          </div>

          </div>
          <?php // eof new layout ?>
        <!-- eof tabs -->
      </div>

      <div class="col-md-6">
        <!-- start side promos  -->
          <?php //include('section_side_promo.php') ; ?>

          <div id="home_promos" class="">
          <?php if (isset($promo_box)){
                  if ($promo_box == 'business_promo_box'){
                  ?>
                  <div class="business_promo_box">
                    <h2 class="fly_cheap">FLY There Cheap !</h2>
                    <p>Don't miss our low season prices.</p>
                    <p>October &amp; November are great times to buy cheap tickets.</p>
                    <h2>Business Class is on Sale!</h2>
                  </div>
                  <?php
                  }
                  elseif ( $promo_box == '' ) {
                  ?>
                  <a class="home_business_promo" href="/promotions/business_class.php" title="" data-category="Search_Box" data-action="Click" data-label="Side Promotions" >
                  </a>
                  <?php }
                  elseif ($promo_box == 'business_promo_box_home') {
                    ?>
                    <a class="home_business_promo" href="/promotions/business_class.php" title="" data-category="Search_Box" data-action="Click" data-label="Side Promotions" >
                    </a>
                      <?php
                  }
              }
          ?>
          </div>

        <!-- eof side promos -->
      </div>
    </div>
  </div>
</section>


<?php } ?>
<?php  function buildSearchBox_NonSSL(
  $search_box,
  $slider_name ="",
  $promo_box = "" // set side promo box

 ){ // now we have the option of using a specifc slider name OR use passed value/page

  ?>

<section id="reservation-form" class="home_hero slide_<?php if (isset($slider_name)){echo $slider_name."_";} ?><?php // randomize bg
$a=array("1","2","3"); echo array_rand(array_flip($a), 1);?> slide_<?php if (isset($search_box)){echo $search_box."_";} ?><?php // randomize bg
$a=array("1","2","3"); echo array_rand(array_flip($a), 1);?>">
  <div class="container">
    <div class="row search_bx_row">
      <div class="col-md-6">
        <!-- starts tabs  -->

          <?php // start new layout ?>
          <div class="search_box_wrapper">

          <ul class="nav nav-tabs">
            <li <?php if ( ($search_box == 'flights') || ($search_box == 'home') ){ ?>class="active"<?php } else {?> class=""<?php }?>><a data-toggle="tab" href="#home" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Flights Tab"><i class="fa fa-plane">&nbsp;</i>Flights</a></li>
            <li <?php if ($search_box == 'hotels') { ?>class="active"<?php } else {?> <?php }?>><a data-toggle="tab__" href="hotels.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Hotels Tab"><i class="fa fa-hotel">&nbsp;</i>Hotels</a></li>
            <li <?php if ($search_box == 'packages') { ?>class="active"<?php } else {?> <?php }?>><a data-toggle="tab__" href="vacations.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Vacations Tab"><i class="fa fa-suitcase">&nbsp;</i>Vacations</a></li>
            <li <?php if ($search_box == 'cars') { ?>class="active"<?php } else {?> <?php }?>><a id="cars_tab" data-toggle="tab__" href="cars.php" class="ga_event" data-category="Search_tabs" data-action="Click" data-label="Cars Tab"><i class="fa fa-car">&nbsp;</i>Cars</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade <?php if (($search_box == 'flights') || ($search_box == 'home')){echo "in active";}?>">
              <?php include('form_search_box_clean.php');?>
              <?php //include('form_flights_date_picker.php');?>
            </div>
            <div id="menu1" class="tab-pane fade <?php if ($search_box == 'hotels'){echo "in active";}?>  ">
                <?php include('form_hotels.php'); ?>
            </div>
            <div id="menu2" class="tab-pane fade <?php if ($search_box == 'packages'){echo "in active";}?>">
              <?php include('form_packages.php'); ?>
            </div>
            <div id="menu3" class="tab-pane fade <?php if ($search_box == 'cars'){echo "in active";}?>">
              <?php include('form_cars.php'); ?>
            </div>

          </div>

          </div>
          <?php // eof new layout ?>
        <!-- eof tabs -->
      </div>

      <div class="col-md-6">
        <!-- start side promos  -->
          <?php //include('section_side_promo.php') ; ?>

          <div id="home_promos" class="">
          <?php if (isset($promo_box)){
                if ($promo_box == 'business_promo_box'){
                ?>
                  <div class="business_promo_box">
                    <h2 class="fly_cheap">FLY There Cheap !</h2>
                    <p>Don't miss our low season prices.</p>
                    <p>October &amp; November are great times to buy cheap tickets.</p>
                    <h2>Business Class is on Sale!</h2>
                  </div>
              <?php
              }

          elseif ( $promo_box == '' ) {

            ?>

            <a class="home_business_promo" href="/promotions/business_class.php" title="" data-category="Search_Box" data-action="Click" data-label="Side Promotions" >
            </a>

      
          <?php }
        }


          ?>
          </div>





        <!-- eof side promos -->
      </div>
    </div>
  </div>
</section>


<?php } ?>
