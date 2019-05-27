<nav>
    <div class="logo"></div>
    <h1 class="peeps"><em>Peep's Pizzeria</em></h1>
    <div class="nav_links-all">
        <div class="nav_left-links">
            <a  href="/php_pizza_crud/php/delivery.php" class=<?php echo $_SERVER['REQUEST_URI'] == "/php_pizza_crud/php/delivery.php" ? 'active' : ''; ?>>Deliveries</a>
        </div>
        <div class="nav_links">
            <a href="/php_pizza_crud" class=<?php echo $_SERVER['REQUEST_URI'] == "/php_pizza_crud/" ? 'active' : ''; ?> 
            >Home</a>
            <a href="/php_pizza_crud/php/custom.php" class=<?php echo $_SERVER['REQUEST_URI'] == "/php_pizza_crud/php/custom.php" ? 'active' : ''; ?> >Customize</a>
        </div>
    </div>
</nav>
