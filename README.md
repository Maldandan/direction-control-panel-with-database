# direction control panel with database
To understand more about GET and POST Functions, check my other repository [here](https://github.com/Maldandan/PHP-GET-and-POST-with-database)

## PHP Code

```
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
```

Similarly to my other repository, you can see that GET function was used here, except this time its being used multiple times for each button, and each button takes new to a page and will print unique word or letter to the database, unlike in my other repository where it used to print the values that were inputted.

## HTML Code

```
<html>
<title>Control Panel</title>
<link rel="stylesheet" type="text/css" href="nnn.css">
<body>
        <form action="connect.php" method="get">
 
        <button class="bt_f" name="forward">Forward</button></br></br>
        <button class="bt_l" name="left">Left</button> 
        <button class="bt_s" name="stop">Stop</button>
        <button  class="bt_r"name="right">Right</button>
        </br> </br><button class="bt_b" name="backward">Backward</button>
</form>
</body>
</html>
```
Nothing much to say here except that the buttons were added here and its linked to PHP file with get method ,and to the CSS for the styles

## CSS Code

```

body{
	font-family: arial;
	font-size: 18px;
	margin: 0;
	background-color: rgb(230, 196, 196);
	color: #000;
	display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}
.bt_f{
	margin-left: 125;
	width: 120px;
	padding: 8px 20px;
	background: #f1530a;
	border: 2px solid #7b3af3;
	color: rgb(0, 0, 0);
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  .bt_f:hover {
	background-color:#be9aff;
	transition: 0.7s;
  }
.bt_l{
	width: 120px;
	padding: 8px 20px;
	background: #f1530a;
	border: 2px solid #7b3af3;
	color: rgb(0, 0, 0);
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  .bt_l:hover {
	background-color:#be9aff;
	transition: 0.7s;
  }
  .bt_s{
	width: 120px;
	padding: 8px 20px;
	background:#f1530a;
	border: 2px solid #050505;
	color: rgb(0, 0, 0);
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  .bt_s:hover {
	background-color:#ffaeae;
	transition: 0.7s;
  }
  .bt_r{
	width: 120px;
	padding: 8px 20px;
	background: #f1530a;
	border: 2px solid #7b3af3;
	color: rgb(0, 0, 0);
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  .bt_r:hover {
	background-color:#be9aff;
	transition: 0.7s;
  }
  .bt_b{
	margin-left: 125;
	width: 120px;
	padding: 8px 20px;
	background: #f1530a;
	border: 2px solid #7b3af3;
	color: rgb(0, 0, 0);
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  .bt_b:hover {
	background-color:#be9aff;
	transition: 0.7s;
  }
```

Fixing some positioning and changing styles and colors of the buttons and background .

## Results

![Screenshot 2022-08-03 203825](https://user-images.githubusercontent.com/109004035/182673579-ac3d5983-633f-49c4-a973-5e7655e0cc9f.jpg)

**Clicking Forward,**

![Screenshot 2022-08-03 203843](https://user-images.githubusercontent.com/109004035/182673622-63c89fc7-0c7f-41f1-b76f-f978051cc251.jpg)

**being saved in database** 

![Screenshot 2022-08-03 203904](https://user-images.githubusercontent.com/109004035/182673722-aebf8348-af21-434a-8dac-19ede4266806.jpg)

