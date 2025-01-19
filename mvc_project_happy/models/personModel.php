<?php
   // echo "call Person Model" ;
?>


<?php   class Person{

public $nickname,$sentence,$typeId ,$status;

public function __construct($nickname,$sentence,$typeId ,$status)
{   
    $this->	nickname        = $nickname ;
    $this->	sentence     = $sentence ;
    $this->	typeId            = $typeId ;
    $this->	status          = $status ;
}

public static function getAll()
{   
    //echo "call getAll" ;
    $satffList = [] ;
    

    require("connection_connect.php");
    
    
    $sql = "select  * from person ";
    $result = $conn->query($sql);



    while($my_row = $result->fetch_assoc())
    {   
        $nickname         = $my_row['nickname'];
        $sentence      = $my_row['sentence'];
        $typeId             = $my_row['typeId'];
        $status           = $my_row['status'];
       
        $staffList[] = new Person($nickname,$sentence,$typeId ,$status);
    }

    require("connection_close.php");

    return  $staffList;
}



public static function get($id)
{   
    
    
    // echo "ID is $id";

    require("connection_connect.php");
    $sql2 = "UPDATE person 
            SET sentence = 'viewed' 
            WHERE nickname = '$id';
            ";
    $result = $conn->query($sql2);
    
    $sql = "select  * from person where nickname = '$id' ";
    $result = $conn->query($sql);

    $my_row = $result->fetch_assoc();

    
    $nickname         = $my_row['nickname'];
    $sentence         = $my_row['sentence'];
    $typeId           = $my_row['typeId'];
    $status           = $my_row['status'];    
       
     //echo "Nickname is $nickname";   
    

    require("connection_close.php");

    return  new Person($nickname,$sentence,$typeId ,$status);
}


}
?>