<?php
include("connect_db.php");

//get results from database
$result = mysqli_query($conn,"SELECT * FROM administrator");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table" border="2" bgcolor="red" width="500">
        <tr class="data-heading" style="color:white;">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<th style="color:white;">' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo '<tr style="color:white;">';
    foreach ($all_property as $item) {
        echo '<th>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
echo '<br> <br><a href="administrator.php"> Return </a>';
?>