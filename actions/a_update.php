<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {  
    $id = $_POST['id'];
    $title = $_POST['title'];
    $picture = file_upload($_FILES['picture']);
    $isbn_code = $_POST['isbn_code'];
    $short_description = $_POST['short_description'];
    $type = $_POST['type'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];

    //variable for upload pictures errors is initialised
    $uploadError = '';

     
    if($picture->error===0){
        ($_POST['picture'] == "nobook.png" ?: unlink("../pictures/$_POST[picture]"));           // zagrade ?
        $sql = "UPDATE library SET title = '$title', picture = '$picture->fileName',  isbn_code = '$isbn_code', short_description = '$short_description', type = '$type',
        author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name ='$publisher_name',
        publisher_address = '$publisher_address', publish_date = '$publish_date' WHERE id = $id"; 
    }else{
        $sql = "UPDATE library SET title = '$title', isbn_code = '$isbn_code', short_description = '$short_description', type = '$type',
        author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name ='$publisher_name',
        publisher_address = '$publisher_address', publish_date = '$publish_date'
        WHERE id = $id"; 
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";                         // msg i class dole sa html
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error(); 
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <?php require_once "../components/boot.php";?>               
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo $message;  ?></p>                  
                <p><?php echo $uploadError;  ?></p>
                <a href='../update.php?id=<?=$id?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>