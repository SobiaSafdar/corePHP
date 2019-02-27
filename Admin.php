<?php
class Admin{
    var $price1 = "100";
    var $price2 ;

    public function set_price(){
        return $this->price2 = "200";
    }
    public function set_price2($num1, $num2){
        echo $num1;
        echo $num2;
    }
}

$admin = New Admin;

echo  $admin->price1;
echo  $admin->set_price();

echo  $admin->price2;

  $admin->set_price2("400","500");


?>