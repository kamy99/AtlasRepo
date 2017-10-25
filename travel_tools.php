<?php include('functions.php');
include('search_functions.php');
buildTitle('Travel Tools');
buildMenu('travel_tools', 'default');
?>
<div class="clear"></div>
<section class="services-parallax">
       <div class="about-color-parallax">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="about-symbol"><i class="fa fa-suitcase"></i></div>
                 <h3>TRAVEL <span>TOOLS</span> </h3>
              </div>
            </div>
          </div>
       </div>
</section>


    <section id="top-offerts">
   <div class="container">
      <div class="row">
         <div class="about-page-2 col-md-12 effect-5 effects">

                <ul class="tools_list">
                    <li><a href=""><i class="fa fa-h-square"></i>Health Documents</a></li>
                    <li><a href="faq.php"><i class="fa fa-question-circle"></i>FAQ</a></li>
                    <li><a href=""><i class="fa fa-suitcase"></i>Visa &amp; Travel Documents</a></li>
                    <li><a href="itinerary.php"><i class="fa fa-bars"></i>My Itinerary</a></li>
                    <li><a href="/assets/contents/credit-card-form.pdf" target="_blank"><i class="fa fa-download"></i>Credit Card Form <span class="download_pdf">(PDF file)</span></a></li>
                    <li><a href="bonus.php"><i class="fa fa-usd"></i>Bonus</a></li>
                </ul>

            </div>
        </div>


    </div>
</section>

<?php  include('section_promotions.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php  include('section_last_minute.php'); ?>


<?php buildFooter();?>