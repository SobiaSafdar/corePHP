<?php
   class Books {
      /* Member variables */
      public $str = "abc";
      var $price;
      var $title;
      public static $my_static = 'foo';
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
   }

   print Books::$my_static . "\n";

   $physics = new Books;
   $physics->setPrice("Physics Book");
echo $physics->str;
   $physics->getPrice();


   class Foo {
      public static $my_static = 'foo';
      
      public function staticValue() {
         return $this->$my_static;
      //   return self::$my_static;
      }
   }
	
   print Foo::$my_static . "\n";
   $foo = new Foo();
   
   print $foo->staticValue() . "\n";

?>