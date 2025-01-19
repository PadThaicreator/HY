<?php
   // echo "call PersonController" ;
?>

<?php
class PersonController
{   
    public function index()
    {   //echo "call index Personnnn  " ;
              
       // echo "after call getAll" ;
        require_once('views/person/indexPerson.php');  
    }
    public function wish()
    {   //echo "call wish" ;
        $id = $_GET['nickname'] ;
        $order = Person::get($id);
        require_once('views/person/wish.php');  
    }
    
}
?>