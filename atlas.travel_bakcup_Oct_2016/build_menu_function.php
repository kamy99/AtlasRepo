<?php  function buildMenu($target){ ?>


<div class="mainMenuContainer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mainMenu clearfix">
                        <em class="mobDropdown">Home</em>
                        <ul>
                            <li class="first"><a href="/" title="Home">Home</a></li>
                            <li <?php if ($target == "flights") { ?> class="active" <?php }?>><a href="flights.php" title="Flights">Flights</a></li>
                            <li <?php if ($target == "vacations") { ?> class="active" <?php }?>><a href="vacations.php" title="Vacations">Vacations</a></li>
                            <li<?php if ($target == "flighthotel") { ?> class="active" <?php }?>><a href="#" title="Flight + Hotel">Flight + Hotel</a></li>
                            <li<?php if ($target == "hotels") { ?> class="active" <?php }?>><a href="hotels.php" title="Hotels">Hotels</a></li>
                            <li<?php if ($target == "cars") { ?> class="active" <?php }?>><a href="cars.php" title="Cars">Cars</a></li>
                            <li<?php if ($target == "cruise") { ?> class="active" <?php }?>><a href="cruise.php" title="Cruise">Cruise</a></li>
                            <li <?php if ($target == "groups") { ?> class="active" <?php }?> ><a href="groups.php" title="Groups">Groups</a></li>
                            <li <?php if ($target == "insurance") { ?> class="active" <?php }?> ><a href="insurance.php" title="Insurance">Insurance</a></li>

                            <li class="last <?php if ($target == "tools") { echo  " active";} ?>">
                                <a href="travel_tools.php" title="Travel Tools">Travel Tools</a>
                            </li>
                        </ul>
                    </div><!-- /mainMenu -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

<?php }   ?>




