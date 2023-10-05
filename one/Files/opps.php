<?php
// A Class
    class JATIN_MOBILE {
        function call(){
            echo "calling <br>";
        }
        function sms(){
            echo "sms <br>";
        } 
    }

    $mobile_of_jatin = new JATIN_MOBILE();
    $mobile_of_jatin->call(); 
    $mobile_of_jatin->sms();

    ?> 

// encapsulation

<h1>WElcome to lecture of PHP encapsulation</h1>
<!-- 
<pre>
    rice
    oil
    tomato
    chili
    masala


    paneer 

</pre> -->

<?php 


//encapuslation wrapping up the data in a single unit
class mobile
{
    function sms()
    {
        echo "<br>sms";
    }
    function call()
    {
        echo "<br>call";
    }
    function youtube()
    {
        echo "<br>youtube";
    }
    function google()
    {
        echo "<br>google";
    }
    function msuic()
    {
        echo "<br>msuic";
    }
}



$object = new mobile;
$object->call();
$object->google();
$object->msuic();
$object->sms();
?>

<?php


// you cannot create object of abstract class 
// abstract function are compulsory for the reciever class to implement
//abstract  = compulsar 
abstract class rbi
{
    abstract function interest();
    abstract function withdraw();
    function sms()
    {
        echo "sms chartge";
    }
}


 class bank extends rbi
{
    function interest()
    {
        echo "150 rupya dega";
    }
    function withdraw()
    {
        echo "You can withdraw";
    }
}




$obj = new bank;
$obj->interest();
$obj->withdraw();



?>
<?php
//interface on can creates fuction ex:- function call();
// if interface is ectended by the reciver class then the reciver class has to impliment all the functction
// in the interface its similer to abstract
interface pizzahut
{
    function location();
    function price();
    function deposit();
//     function staff();
//     function saman();
//     function decoration();
}



class pizza implements pizzahut
{
  
    function location()
    {
        echo "location<br>";
    }
    function price()
    {
        echo "price<br>";
    }
    function deposit()
    {
        echo "deposit<br>";
    }
}

$shop =  new pizza;
$shop->location();
$shop->price();
$shop->deposit();
?>

<?php



// in php there is only one inheritence and its single inheritance

// class dada
// {
//     function zameen()
//     {
//         echo "Zameen<br>";
//     }
// }

// class papa extends dada
// {
//     function house()
//     {
//         echo "house";
//     }
// }

// $papa = new papa;

// $papa->zameen();
// $papa->house();






class petrolcar
{
    function tyre()
    {
        echo "tyre<br>";
    }
    function body()
    {
        echo "body<br>";
    }
    function accessoirie()
    {
        echo "accessories<br>";
    }
}


class evcar extends petrolcar
{
    function battery()
    {
        echo "battery<br>";
    }
}


$evcar = new evcar;
$evcar->battery();
$evcar->body();

?>

<?php

// polymorphism
    // compile time
    // run time
        // overloading
        // overrridng

// i php there is only one polymorph and its overriding

class friend
{
    function party()
    {
        echo "small party";
    }
}


class friend2 extends friend
{
    function party()
    {
        echo "badi party";
    }
}


$obj = new friend2;
$obj->party(); //badi party







?>

<?php
//function __construct is automatically called when the class is created  
//function __destruct is automatically called when the class ends 
class HERO {
   function __construct()
   {
     echo "<br>ME AAYA <br>";
   }
   function hellow(){
    echo "ME YAHA HU <br> ";
   }
   function __destruct()
   {
    echo "ME GAYA <br>";
   }
}

$saver = new HERO;
$saver->hellow();
?>