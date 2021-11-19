<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Donate a Book</title>
    <?php include "header.html" ?>
  </head>
  <body>
    <h1>Make a donation Bring difference to the mankind</h1>
        
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

            
            $sql="INSERT INTO donations(Dbookname,Dauthor,Dpublisher,Dpic) VALUES('$dbookname','$dauthor','$dpublisher',$dpic)";  
            
                $result=mysqli_query($con,$sql);  
                    if($result){  
                print "Request placed Successfully";  
                  
            }}
        
        ?>
   
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>