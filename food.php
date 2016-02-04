<?php
//define('THIS_PAGE', basename($_SEVER['PHP_SELF']))
//food truck.php

class Item{
    public $name = ''; 
    public $description='';
    public $price = 0;
    
public function Item($name,$description,$price){
    
    $this->name = $name;
    $this->description = $description;   
    $this->price = $price;
        
    }  
}

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

?>

<html>
<head>
    <title>food trucker</title>
    
</head>
<form action="<?=THIS_PAGE?>" method="POST">
    
    <!--food item 1-->
    
    <label><h1>Fried Rice</h1></label>
    <p>mixed with other ingredients, such as eggs, vegetables, and meat!</p>
    <input type="text" name="input1" value="0"> Quantity<br>  
    
    <!--food item 2-->
    
    <label><h1>Phat Thai</h1></label>
    <p>stir-fried rice noodle dish!</p>
    <input type="text" name="input2" value="0"> Quantity<br> 
    
      <!--food item 3-->    
    
     <label><h1>Pizza</h1></label>
    <p>topped with a selection of meats, vegetables and condiments</p>
    
    <input type="text" name="input3" value="0"> Quantity<br> 
    
    <!--submit button-->
    
    <input type="submit" name="submit" value="submit">    
</form>   
</html>
    
<?PHP
    if(isset($_POST['submit'])){
    
//post the values from the form to local variables
    
    $item1Quantity= $_POST['input1'];
    $item2Quantity= $_POST['input2'];
    $item3Quantity= $_POST['input3'];        

//create an array using the constructor class

if(is_numeric($item1Quantity) && is_numeric($item2Quantity) && is_numeric($item3Quantity)){      
if ($item1Quantity >=0 && $item2Quantity >=0 && $item3Quantity >=0) {

        $item[] = new Item("Fried rice","mixed with other ingredients, such as eggs, vegetables, and meat!", 8.99);
        echo 'you have ordered ' . $item1Quantity . ' of ' . $item[0]->name;
        
        $item[] = new Item("Phat Thai","stir-fried rice noodle dish!" ,3.99);
        echo 'you have ordered ' . $item2Quantity . ' of ' . $item[1]->name;
    
        $item[] = new Item("Pizza","topped with a selection of meats, vegetables and condiments" ,2.99);
        echo 'you have ordered ' . $item3Quantity . ' of ' . $item[2]->name;
    
    }else {
    
        echo 'something has gone wrong';
        die;
    }
}else {
    
        echo 'something has gone wrong';
        die;
}
        
//calculate the subtotal
    
    $subTotal=($item1Quantity*8.99) + ($item2Quantity*3.99) + ($item3Quantity*2.99);
        
//calculate the tax    
    
    $tax = number_format(($subTotal * 0.095),2);
        
//calculate the total
        
    $total = number_format(($subTotal + $tax),2);
    
    echo"<table><tr><th>Subtotal: </th></tr>
        <tr><th>$subTotal</th></tr><br>";
    echo"<table><tr><th>Tax: </th></tr>
        <tr><th>$tax</th></tr><br>";
    echo"<table><tr><th>Total: </th></tr>
        <tr><th>$total</th></tr><br>";    
}
    
?>
