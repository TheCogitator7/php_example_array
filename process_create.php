<?php 
    //variable dec
    $title=$_POST['title'];
    $description=$_POST['description'];
    
    //connect
    $link=mysqli_connect('localhost', 'port12345', 'ca11com1!');
    if(!$link){
        echo 'Not connected'.mysqli_error($link);
    }

    //select DB
    $select_DB=mysqli_select_db($link, 'port12345');
    if(!$select_DB){
        echo 'Not selected DB'.mysqli_error($select_DB);
    }

    //run sql query
    $sql="INSERT INTO topic
        (title, description, date) VALUES
        ('$title', '$description', NOW())
    ";

    $result=mysqli_query($link, $sql);
    if(!$result){
        echo "call to the administrator.";
        error_log(mysqli_error($link));
    }else{
        echo "Success. <a href='index.php'>Back to the main.</a>";
    }

    mysqli_close($link);

?>