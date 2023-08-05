<?php 

trait GrandParent{
    public function callGrandparent(){
        echo "mehedi";
    }
}
trait Parentclass{
    public function callparent(){
        echo "ggg";
    }
}
class child{
    use GrandParent;
   use Parentclass;

}

$cal = new child;

$cal->callGrandparent();
echo "<br>";
$cal->callparent();




?>