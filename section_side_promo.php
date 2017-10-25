<div id="home_promos" class="">
<?php if (isset($promo_box)){
  //if ($promo_box == 'business_promo_box'){
  ?>
    <!-- <div class="business_promo_box">
      <h2 class="fly_cheap">FLY There Cheap !</h2>
      <p>Don't miss our low season prices.</p>
      <p>October &amp; November are great times to buy cheap tickets.</p>
      <h2>Business Class is on Sale!</h2>
    </div> -->
<?php
//}
}
elseif ( $promo_box == '' ) {
echo "NOT SET";
  ?>
  <a class="home_promo" href="/promotions/cathay_airlines.php" title="" data-category="Search_Box" data-action="Click" data-label="Side Promotions" >
  </a>
<?php }

echo ">>>>>".$promo_box;

?>
</div>
