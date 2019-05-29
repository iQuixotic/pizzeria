
<?php 
//  include '../config/connection.php'; ?>
<?php include 'inc/functionsAndVariables.php'; ?>
<?php include 'inc/switchPrice.php'; ?>
<?php include 'inc/header.php';?>



<div class="my-head-space"></div>
    <div class="center marg-bottom padding">
        <div class="table_header">
            <h2>Peep's Specials</h2>
        </div>
    </div> 

    <?php echo header('Location: '); ?>


<div class="pretty-pizza">

    <?php  

            if (isset( $_POST["pizza_name"])) {
            echo "<br>";
            $src= $_POST["pizza_name"];
            get_image($src);
            echo "<br>";
        }  else {
            get_image('public/img/pepperoniPizza.jpg');
        }
    ?>
    <div class="choice-form">
        
        <?php include '../queries/getSpecials.php'; ?>
            
        <div class="form-header">Size: </div> <br>
        <select name='size' class='pizza_size'>
            <option <?php if ( $size==='SM') { echo "selected='selected'"; }  ?> value='SM'>SM</option>
            <option <?php if ( $size==='MED') { echo "selected='selected'"; }  ?> value='MED'>MED</option>
            <option <?php if ( $size==='LG') { echo "selected='selected'"; }  ?> value='LG'>L</option>
            <option <?php if ( $size==='XL') { echo "selected='selected'"; }  ?> value='XL'>XL</option>
        </select>

        <div class="form-header">Name: </div><br>  <input type="text" Name="customer" value=""><br>

        <div class="center">
            <input class="submit-btn" type="Submit" value="GIMME" name="Submit">
        </div>

<?php
   echo "</form>";
   $toppings = $specials_toppings[$price_by_size]; ?>
  
<?php  include '../queries/postSpecial.php'; ?>

   <?php include 'inc/footer.php'; ?>


