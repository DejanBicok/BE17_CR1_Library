<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    
    
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $picture = $data['picture'];
        $ISBN_code = $data['isbn_code'];
        $short_description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];

    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style.css">
        <style type= "text/css">
            /* fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }      */
            .img-thumbnail{
                width: 100px !important;
                height: 120px !important;
            }    
            
            legend.h2{
                font-size: 45px;
            }
        </style>
    </head>
    <body class="body_del">
        <fieldset class="fieldset_del">
            <legend class='h2 mb-3_del'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <h5 class="h5_del">You have selected the book below:</h5>
            <table class="mt-3_del">
                
                    <td class="td_del"><?php echo $title?></td>
                
            </table>

            <h3 class="h3_del">Do you really want to delete this book?</h3>
            <form class="form_del" action ="actions/a_delete.php" method="post">
               <input type="hidden" name="id" value="<?php echo $id ?>" />
               <input type="hidden" name="picture" value="<?php echo $picture ?>" />
               <button class="btn btn-danger" type="submit">Yes, delete it.</button>
               <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
           </form>
       </fieldset>
    </body>
</html>