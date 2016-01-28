<?php

class Item{

    public $name = ''; 
    public $price = 0;
    public $description='';
    
public function __construct($name,$description,$price){
    
    $this->name = $name;
    $this->description = $description;   
    $this->price = $price;

        
$items[] = new Item("Fried rice","mixed with other ingredients, such as eggs, vegetables, and meat!" ,8.99);
$items[] = new Item("phat Thai","stir-fried rice noodle dish!" ,3.99);
$items[] = new Item("pizza","topped with a selection of meats, vegetables and condiments. !" ,2.99);
    
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>food trucker</title>
    
</head>
<form action="" method="post">
    
    <label><input type="checkbox" name="FriedRice" value="Fried rice">Fried Rice</label><input type="text" name="input1" value=""> Quantity<br>    
    <label><input type="checkbox" name="PhatThai" value="Phat Thai">Phat Thai</label><input type="text" name="input2" value=""> Quantity<br> 
    <label><input type="checkbox" name="Pizza" value="Pizza">Pizza</label><input type="text" name="input3" value=""> Quantity<br> 
    
    <input type="submit" name="submit" value="submit">
</form>   
</html>