<?php  
    include("connection.php");
         $id = $_GET['id'];

        $sql = "SELECT * FROM article_table WHERE id = $id";
            $insert = mysqli_query($conn, $sql);
             
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" text="style/css" href="style.css">
</head>
<body>
<header>
    <nav>
    <a href="index.php"><div class="get"> Go Back</div></a>
    </nav>
 </header>
    <div class= "container">
        <?php
        
        if($insert){
            while ($row = mysqli_fetch_assoc($insert)) {
               $title = $row['title'];
               $cat = $row['category'];
               $tags = $row['tag'];
               $author = $row['author'];
               $text = $row['text'];
               $id = $row['id'];
               echo "
               <h1> $title</h1>
               <h2> $cat</h2>
               <h4> $tags</h4>
               <h2> $author</h2>
               <p> $text</p>
               ";
            }
        }else{
            echo "<script>alert('error: informations not retrieved')</script>";
        }
        
        ?>

    </div>
</body>
</html>

<!-- <style>


*{
        padding:0;
        margin:0;
    }

    body{
        background-color:gray;
    }
header{
    background-color:black;
    min-width:100%;
    padding:20px;
    color:white;
    padding:30px;
}

span{
    padding:10px;
    cursor:pointer;
    border:2px solid black;
}

span:hover{
    border:2px solid white;
    background-color: white;
    color:black;
    border-radius:10px;

}

.container{
    max-width:80%;
    max-height:100vh;
    /* background-color:grey; */
    margin: 0 auto;
}

h1{
    padding:20px 0px 20px 0px;
}


</style> -->


