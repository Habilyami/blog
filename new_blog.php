<?php  
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $title =  $_POST['title'];
        $cat =  $_POST['categories'];
        $tag =  $_POST['tags'];
        $author =  $_POST['Author'];
        $text =  $_POST['Text'];
        
        $sql = "INSERT INTO article_table (title,category,tag,author,text) VALUES ('$title','$cat','$tag','$author','$text')";
        // echo $title; echo $cat; echo $tag; echo $author; echo $text;

        if(isset($_POST["submit"])){
            // echo "yo"
            $insert = mysqli_query($conn, $sql);
            if($insert){
                echo "<script>alert('new rec    ord created')</script>";
            }
        }
        
    }

    // if(mysqli_query($conn, $sql)){
    //     echo "<script>alert('new record created')</script>";
    // }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New write-up</title>
    <link rel="stylesheet" text="style/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <center>
            <a href="index.php"><span class="blog">Articles</span></a>
            <span class="newblog" style=" border:2px solid white;
    background-color: white;
    color:black;
    border-radius:10px;">New Article</span>
        </center>
    </nav>
 </header>

 <div class= "container">
        <h1>Add New Article</h1>
        <form  action="" method="post">

            <h2> Submit an article</h2>
            <br/>

        <label>
            Article Title
            <input type="text" id="title" name="title" required>
        </label>
        <br/>
        <br/>
        <label>
            Categories
            <select class="cat" name="categories" required>
                <option>health</option>
                <option>technology</option>
                <option>poem</option>
            </select>
        </label>
        <br/>
        <br/>
        <label>
            Tags
            <input type="text" placeholder = "e.g mental health" name="tags" required>
        </label>
        <br />
        <br />
        <label>
            Author
            <input type="text" name="Author" required >
        </label>
        <br/>
        <br/>
        <label>
            Text
    
            <br/>
            <textarea class="textarea" name="Text" required></textarea>
        </label>
        
            <input type="submit" class="post" name="submit" value="submit">
            <br/>
            <br/>
        </form>
       
</div>


</body>
</html>

<!-- 

<style>
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
    box-sizing:border-box;

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

input[type=text] {
    
    padding:15px;
    min-width:100%;
}

.box{
    min-width:100%;
    background-color:white;
    padding:17px;
    margin-top:20px;
    min-height:30px;
}
.cat{
    min-width:103%;
    padding: 10px;
}
.textarea{
    width:97%;
    min-height:200px;
    padding:30px;
}
.post{
    padding:10px;
}
label{
    /* margin:10px 0 10px 0 */
}
 -->
