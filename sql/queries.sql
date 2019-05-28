
DROP DATABASE IF EXISTS pizzahouse;
CREATE DATABASE pizzahouse;

USE pizzahouse;

CREATE TABLE menu(
  pizza_name VARCHAR(200) NOT NULL,
  toppings VARCHAR(200) NOT NULL
);



-- DROP DATABASE IF EXISTS pizzahouse;
-- CREATE DATABASE pizzahouse;

USE pizzahouse;

CREATE TABLE orders(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  customer VARCHAR(200) NOT NULL,
  toppings VARCHAR(200) NOT NULL,
  size VARCHAR(200) NOT NULL,
  price VARCHAR(200) NOT NULL
);
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 


INSERT INTO `menu`(`pizza_name`, `toppings`) VALUES ('Pepperoni', 'All them pepperonis');
INSERT INTO `menu`(`pizza_name`, `toppings`) VALUES ('Hawaiian', 'pineapple, ham, pepperoni');
INSERT INTO `menu`(`pizza_name`, `toppings`) VALUES ('Supreme', 'All the toppings!!');
INSERT INTO `menu`(`pizza_name`, `toppings`) VALUES ('Spinach Provalone', 'tomatoes, provalone, spinach');
INSERT INTO `menu`(`pizza_name`, `toppings`) VALUES ('Shruums', 'mushrooms, provalone');