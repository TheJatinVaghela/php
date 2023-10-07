<?php








class accessmodifire
{
    // Public       -   it is accessible for all/ it is like water
    // Protected    -   it is not very accessible to everyone / it is like juice
    // Private      -   it is not accessible by anyone except their own class / it is like black water

    // public   function water()
    public static  function water()
    {
        echo "Water<br>";
    }
    protected function juice()
    {
        echo "Juice<br>";
    }
    private function blackwater()
    {
        echo "Black Water<br>";
    }

    

}


$obj = new accessmodifire;

$obj->water();
// $obj->juice();
// $obj->blackwater();

accessmodifire::water();





?>

<?php


class bjp 
{
    public function modi()
    {
        echo "Modiji<br>";
    }
    public function amit()
    {
        echo "Amitji<br>";
    }

    protected  function hardik()
    {
        echo "Hardik<br>";
        $this->arvind();
    }

    private  function arvind()
    {
        echo "Arvindji <br>";
    }
    private function oveshi()
    {
        echo "Oveshi<br>";
    }
}

class congress extends bjp
{
    public function rahul()
    {
        echo "Rahulji<br>";
        $this->hardik();
        bjp::modi();
        bjp::hardik();
        // bjp::oveshi();
        // $this->oveshi();
        // $this->arvind();
        
    }
}


$sircar = new congress;

$sircar->amit();
$sircar->modi();
$sircar->rahul();
// $sircar->hardik();














?>