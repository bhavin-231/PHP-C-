<?php
class myclass{
    
   private $var;
   protected $var1;
   public $x, $y, $z;
   public function __construct(){
      $this->var="private variable";
      $this->var1=TRUE;
      $this->x=20;
      $this->y=30;
      $this->z=40;
      echo "<pre>";
   }
   public function iterate(){
      foreach ($this as $key => $value) {
         print "$key => $value\n";
      }
      
   }

}
$obj = new myclass();
foreach($obj as $key => $value) {
   print "$key => $value
";
}

$obj->iterate();
?>