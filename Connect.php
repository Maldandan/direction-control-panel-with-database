<?php
// Database connection
$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
        if(isset($_GET['forward'])){
           $forward='F';
    $stmt = $conn->prepare("insert into valueslist(value) values(?)");
    $stmt->bind_param("s", $forward);
    $execval = $stmt->execute();
    echo $execval;
    echo "F";
    $stmt->close();
    $conn->close();
        }   
        if(isset($_GET['stop'])){
            $stop='S';
     $stmt = $conn->prepare("insert into valueslist(value) values(?)");
     $stmt->bind_param("s", $stop);
     $execval = $stmt->execute();
     echo $execval;
     echo "S";
     $stmt->close();
     $conn->close();
         }  
        if(isset($_GET['backward'])){
            $backward='B';
     $stmt = $conn->prepare("insert into valueslist(value) values(?)");
     $stmt->bind_param("s", $backward);
     $execval = $stmt->execute();
     echo $execval;
     echo "B";
     $stmt->close();
     $conn->close();
         }
         if(isset($_GET['right'])){
            $right='R';
     $stmt = $conn->prepare("insert into valueslist(value) values(?)");
     $stmt->bind_param("s", $right);
     $execval = $stmt->execute();
     echo $execval;
     echo "R";
     $stmt->close();
     $conn->close();
         } 
         if(isset($_GET['left'])){
            $left='L';
     $stmt = $conn->prepare("insert into valueslist(value) values(?)");
     $stmt->bind_param("s", $left);
     $execval = $stmt->execute();
     echo $execval;
     echo "L";
     $stmt->close();
     $conn->close();
         }   

}
?>