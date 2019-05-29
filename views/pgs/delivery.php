<?php include '../inc/header.php'; ?>
<?php  
include '../../config/connection.php'; ?>

<div class="my-head-space"></div>

</body>
</html>

<div class="container">
   <div class="center">
       <div class="table_header">
            <h2>Deliveries</h2>
       </div>
   </div> 
<?php
 include '../../queries/getOrders.php'; ?>
</div>
