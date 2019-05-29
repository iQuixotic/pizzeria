<?php 
  include '../config/connection.php'; 
   
   $sqlGet = "SELECT * FROM menu";
   $sqlData = mysql_query($sqlGet);

   $selected='';
   $radio_select='';
   $page_header = ' 
    <div class="center">
        <div class="table_header">
            <h3><em>#LovesIt</em></h3>
        </div>
    </div> ';
    echo $page_header;   
   
   echo "<form method='POST'><table class='all_current_orders'>";
   echo "<col width='5%'/><col width='35%'/><col width='55%'/>";
   echo "<tr><th></th><th>PIZZA</th><th>TOPPINGS</th> </tr>";
   while($row = mysql_fetch_assoc($sqlData)) {
   
       echo "<tr><td>" . radio_btn_mkr() . "</td><td>" 
       . $row["pizza_name"] . "</td><td class='table_toppings'>" . $row["toppings"]
       . "</td></tr>";
   }
   echo "</table>";
?>