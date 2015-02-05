<?php

$host     = "localhost";
$username = "miked7_f1";
$password = "f1setups2014";
$database = "miked7_setups_f1_2014";

function PrepSQL( $value )
{
    // Stripslashes
    if( get_magic_quotes_gpc() ) 
    {
        $value = stripslashes( $value );
    }
 
    // Quote
    $value = "'" . mysql_real_escape_string( $value ) . "'";
 
    return( $value );
}

function InsertSetup($id)
{
    $circuit = $_POST['formCircuit'];

    $lap_time = explode(":", $_POST['formLapTimeMinuteSecond']);

    $lap_time_minute_second = $lap_time[0];
    $lap_time_second_fraction = $lap_time[1];
    
    $constructor = $_POST['formConstructor'];
    
    $platform = $_POST['formPlatform'];
    
    $controller = $_POST['formController'];
    
    $assist = $_POST['formAssist'];
    
    $aero_front = $_POST['formAeroFront'];
    $aero_rear = $_POST['formAeroRear'];
    
    $brake_balance_front = $_POST['formBrakeBalanceFront'];
    $brake_balance_rear = $_POST['formBrakeBalanceRear'];
    $brake_pressure = $_POST['formBrakePressure'];
    $brake_size = $_POST['formBrakeSize'];
    
    $balance_roll_front = $_POST['formBalanceRollFront'];
    $balance_roll_rear = $_POST['formBalanceRollRear'];
    
    $suspension_height_front = $_POST['formSuspensionHeightFront'];
    $suspension_height_rear = $_POST['formSuspensionHeightRear'];
    $suspension_spring_front = $_POST['formSuspensionSpringFront'];
    $suspension_spring_rear = $_POST['formSuspensionSpringRear'];
    
    $gearbox_1 = $_POST['formGearbox1'];
    $gearbox_2 = $_POST['formGearbox2'];
    $gearbox_3 = $_POST['formGearbox3'];
    $gearbox_4 = $_POST['formGearbox4'];
    $gearbox_5 = $_POST['formGearbox5'];
    $gearbox_6 = $_POST['formGearbox6'];
    $gearbox_7 = $_POST['formGearbox7'];
    
    $alignment_camber_front = $_POST['formAlignmentCamberFront'];
    $alignment_camber_rear = $_POST['formAlignmentCamberRear'];
    $alignment_toe_front = $_POST['formAlignmentToeFront'];
    $alignment_toe_rear = $_POST['formAlignmentToeRear'];
    
    $comment = "test";

    $errorMessage = "";

    $query = "INSERT INTO setups_car ( id,
                                       circuit,
                                       lap_time_minute_second,
                                       lap_time_second_fraction,
                                       constructor,
                                       platform,
                                       controller,
                                       assist,
                                       aero_front,
                                       aero_rear,
                                       brake_balance_front,
                                       brake_balance_rear,
                                       brake_pressure,
                                       brake_size,
                                       balance_roll_front,
                                       balance_roll_rear,
                                       suspension_height_front,
                                       suspension_height_rear,
                                       suspension_spring_front,
                                       suspension_spring_rear,
                                       gearbox_1,
                                       gearbox_2,
                                       gearbox_3,
                                       gearbox_4,
                                       gearbox_5,
                                       gearbox_6,
                                       gearbox_7,
                                       alignment_camber_front,
                                       alignment_camber_rear,
                                       alignment_toe_front,
                                       alignment_toe_rear,
                                       comment) VALUES ( ". PrepSQL( $id ) . ", " .
                                                            PrepSQL( $circuit ) . ", " .
                                                            PrepSQL( $lap_time_minute_second ) . ", " .
                                                            PrepSQL( $lap_time_second_fraction ) . ", " .
                                                            PrepSQL( $constructor ) . ", " .
                                                            PrepSQL( $platform ) . ", " .
                                                            PrepSQL( $controller ) . ", " .
                                                            PrepSQL( $assist ) . ", " .
                                                            PrepSQL( $aero_front ) . ", " .
                                                            PrepSQL( $aero_rear ) . ", " .
                                                            PrepSQL( $brake_balance_front ) . ", " .
                                                            PrepSQL( $brake_balance_rear ) . ", " .
                                                            PrepSQL( $brake_pressure ) . ", " .
                                                            PrepSQL( $brake_size ) . ", " .
                                                            PrepSQL( $balance_roll_front ) . ", " .
                                                            PrepSQL( $balance_roll_rear ) . ", " .
                                                            PrepSQL( $suspension_height_front ) . ", " .
                                                            PrepSQL( $suspension_height_rear ) . ", " .
                                                            PrepSQL( $suspension_spring_front ) . ", " .
                                                            PrepSQL( $suspension_spring_rear ) . ", " .
                                                            PrepSQL( $gearbox_1 ) . ", " .
                                                            PrepSQL( $gearbox_2 ) . ", " .
                                                            PrepSQL( $gearbox_3 ) . ", " .
                                                            PrepSQL( $gearbox_4 ) . ", " .
                                                            PrepSQL( $gearbox_5 ) . ", " .
                                                            PrepSQL( $gearbox_6 ) . ", " .
                                                            PrepSQL( $gearbox_7 ) . ", " .
                                                            PrepSQL( $alignment_camber_front ) . ", " .
                                                            PrepSQL( $alignment_camber_rear ) . ", " .
                                                            PrepSQL( $alignment_toe_front ) . ", " .
                                                            PrepSQL( $alignment_toe_rear ) . ", " .
                                                            PrepSQL( $comment ) . ")";
    $result = mysql_query( $query );

    return( $result );
}

if( $_POST['formSubmit'] == "submitAddSetup" ) 
{
    $db = mysql_connect( $host, $username, $password );

    if( !$db )
    {
        die( "Error connecting to database." );
    }

    @mysql_select_db( $database, $db ) or die( "Error selecting database." );

    $id = substr(uniqid(),-5);

    $result = InsertSetup($id);

    mysql_close();

    if ( !$result )
    {
        die( "Error querying database." );
    }
    
    session_start();
    
    header( 'Location: ./display-setup.php?id=' . $id ) ;
}
 
?> 