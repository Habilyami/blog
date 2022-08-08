<?php  
    include("connection.php");
          
        $sql = "SELECT * FROM article_table";
            $insert = mysqli_query($conn, $sql);
             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" text="style/css" href="style.css">
</head>
<body>
 <header>
    <nav>
        <center>
            <span class="blog" style=" border:2px solid white;
    background-color: white;
    color:black;
    border-radius:10px;">Articles</span>
            <a href = "new_blog.php"><span class="newblog">New Article</span></a>
        </center>
    </nav>
 </header>
    <div class= "container">
        <h1>All Articles</h1>
        <input type="text" placeholder = "Search">
        <?php 
        
        if($insert){
            while ($row = mysqli_fetch_assoc($insert)) {
               $title = $row['title'];
               $cat = $row['category'];
               $id = $row['id'];
               echo "
               <a href='file.php?id=$id'>
               <div class='box'>
                <h1>$title</h1>
                <p>$cat</p>
                </div> 
           </a>  
               ";
            }
        }else{
            echo "<script>alert('Error: informations not retrieved')</script>";
        } 

        ?>
       
</div>

</body>
</html>













