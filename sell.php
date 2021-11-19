<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <?php include "header.html" ?>
  </head>
  <body>
  <h1 class="sitetitle">Sell out your old or new books here</h1>

  <form action="" method ="POST">
        <label for="Dbookname">Book Name:</label>
        <input type="text"  name="Dbookname"><br>
        <label for="Dauthorname">Author Name:</label><br>
        <input type="text"  name="Dauthorname"><br>
        <label for="Dpublisher">Publisher Name:</label><br>
        <input type="text"  name="Dpublisher"><br>
        <label for="Dcondition">Condition Name:</label><br>
        
            <input type="radio"  name="Dcondition" value="New">
            <label for="New">Brand New</label><br>
            <input type="radio"  name="Dcondition" value="Good">
            <label for="Good">Good</label><br>
            <input type="radio"  name="Dcondition" value="Fine">
            <label for="Fine">Fine</label><br><br>
            
        <label>Select Image File:</label>
        <input type="file" name="image"><br><br>
         
        <input type="submit" value="submit" name="submit" />  
        
    


    <?php  
            
            if(isset($_POST["submit"])){   
                
                
                $dbookname=$_POST['Dbookname'];  
                $dauthor=$_POST['Dauthorname'];
                $dpublisher=$_POST['Dpublisher'];
                $dpic=$_POST['image'];
                 
                $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
                
                 
                
            mysqli_select_db($con,'oldbooks') or die("cannot select DB");

            
            $sql="INSERT INTO  books(bookname,author,publisher,price) VALUES('$dbookname','$dauthor','$dpublisher',$dpic)";  
            
                $result=mysqli_query($con,$sql);  
                    if($result){  
                print "Request placed Successfully";  
                  
            }}
        
        ?>
  

  </body>
</html>