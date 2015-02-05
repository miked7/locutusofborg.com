<?php

$host     = "localhost";
$username = "miked7_f1";
$password = "f1setups2014";
$database = "miked7_setups_f1_2014";

session_start();

$db = mysql_connect( $host, $username, $password );

if( !$db )
{
    die( "Error connecting to database." );
}

@mysql_select_db( $database, $db ) or die( "Error selecting database." );

$query = "SELECT * FROM setups_car WHERE id='". $_GET['id'] . "'";

$result = mysql_query( $query );

mysql_close();

if ( !$result )
{
    echo $query;
    die( "Error querying database." );
}

?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="import" href="./header.html">
      <title>F1 2013 Setups - Display</title>
   </head>
   <body>

      <script>
      </script>

      <?php include 'nav-bar.html'; ?>
      
      <div class="container">
      
         <!-- Main hero unit for a primary marketing message or call to action -->
         <div class="jumbotron" style="background-image: url(../img/jumbo-f1-2013-setups-add.png);">
         </div>
         
         <div class="section rounded-corner" style="background-color: #87D37C;">

         <div class="row">
            <div class="col-md-6">
               <h4>Circuit</h4>
               <h2>
                  <?php echo mysql_result($result,0,"circuit"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Time</h4>
               <h2>
                  <?php echo mysql_result($result,0,"lap_time_minute_second") . "." . mysql_result($result,0,"lap_time_second_fraction"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <h4>Constructor</h4>
               <h2>
                  <?php echo mysql_result($result,0,"constructor"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Platform</h4>
               <h2>
                  <?php echo mysql_result($result,0,"platform"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <h4>Controller</h4>
               <h2>
                  <?php echo mysql_result($result,0,"controller"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Assist</h4>
               <h2>
                  <?php echo mysql_result($result,0,"assist"); ?>
               </h2>
            </div>
         </div>

         </div>
         <div class="section rounded-corner" style="background-color: #05beff;">
            
         <h2 style="color: #ffffff;">Aero</h2>
         <div class="row">
            <div class="col-md-6">
               <h4>Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"aero_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"aero_rear"); ?>
               </h2>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <h2 style="color: #ffffff;">Brakes</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <h4>Balance Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"brake_balance_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Balance Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"brake_balance_rear"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <h4>Pressure</h4>
               <h2>
                  <?php echo mysql_result($result,0,"brake_pressure"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Size</h4>
               <h2>
                  <?php echo mysql_result($result,0,"brake_size"); ?>
               </h2>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <h2 style="color: #ffffff;">Balance</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <h4>Roll Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"balance_roll_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Roll Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"balance_roll_rear"); ?>
               </h2>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <h2 style="color: #ffffff;">Suspension</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <h4>Height Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"suspension_height_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Height Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"suspension_height_rear"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <h4>Spring Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"suspension_spring_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Spring Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"suspension_spring_rear"); ?>
               </h2>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <h2 style="color: #ffffff;">Gearbox</h2>
         <br>
         <div class="row">
            <div class="col-md-2">
               <h4>Gear 1</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_1"); ?>
               </h2>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <h4>Gear 2</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_2"); ?>
               </h2>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <h4>Gear 3</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_3"); ?>
               </h2>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <h4>Gear 4</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_4"); ?>
               </h2>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <h4>Gear 5</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_5"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">
               <h4>Gear 6</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_6"); ?>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">
               <h4>Gear 7</h4>
               <h2>
                  <?php echo mysql_result($result,0,"gearbox_7"); ?>
               </h2>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <h2 style="color: #ffffff;">Alignment</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <h4>Camber Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"alignment_camber_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Camber Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"alignment_camber_rear"); ?>
               </h2>
            </div>
         </div>
            <div class="row">
            <div class="col-md-6">
               <h4>Toe Front</h4>
               <h2>
                  <?php echo mysql_result($result,0,"alignment_toe_front"); ?>
               </h2>
            </div>
            <div class="col-md-6">
               <h4>Toe Rear</h4>
               <h2>
                  <?php echo mysql_result($result,0,"alignment_toe_rear"); ?>
               </h2>
            </div>
         </div>

      </div>

         <footer>
           <p>&copy; Michael Thompson 2014</p>
         </footer>

      </div> <!-- /container -->

   </body>
</html>