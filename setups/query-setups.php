<?php

$host     = "localhost";
$username = "miked7_f1";
$password = "f1setups2014";
$database = "miked7_setups_f1_2014";

$db = mysql_connect( $host, $username, $password );

if( !$db )
{
    die( "Error connecting to database." );
}

@mysql_select_db( $database, $db ) or die( "Error selecting database." );

$query = "SELECT * FROM setups_car WHERE circuit='". $_POST['_circuit'] . "' AND constructor='" . $_POST['_constructor'] . "'";

$result = mysql_query( $query );

mysql_close();

if ( !$result )
{
    echo $query;
    die( "Error querying database." );
}

$num_rows = mysql_numrows( $result );

$i = 0;
while ($i < $num_rows)
{
    echo "<a href=\"./display-setup.php?id=" . mysql_result($result,$i,"id") . "\" class=\"list-group-item\">
             <h4 class=\"list-group-item-heading\">"
                . mysql_result($result,$i,"lap_time_minute_second") . "." . mysql_result($result,$i,"lap_time_second_fraction") . "
             </h4>
          </a>";
    $i++;
}

?>