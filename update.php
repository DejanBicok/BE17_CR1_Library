<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        
        
        $title = $data['title'];
        $picture = $data['picture'];              
        $isbn_code = $data['isbn_code'];
        $short_description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
    }
    } else {
        
        header("location: error.php");
    }
  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Search</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style.css">
        <style type= "text/css"> 
            .img-thumbnail{
                width: 120px !important;
                height: 120px !important;
            }     
            legend.h2{
                font-size: 45px;
            }
        </style>
    </head>
    <body class="body_upd">
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='./pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend> 
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Add New" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type= "file" name="picture" step="any"  placeholder="picture"  /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class="form-control" type="number" name= "isbn_code" placeholder ="Add New" value="<?php echo $isbn_code ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text" name= "short_description" placeholder ="Add New" value="<?php echo $short_description ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type="text" name= "type" placeholder ="Add New" value="<?php echo $type ?>"  /></td>

                    </tr>
                    <tr>
                        <th>First name</th>
                        <td><input class="form-control" type="text" name= "author_first_name" placeholder ="Add New" value="<?php echo $author_first_name ?>"  /></td>    

                    </tr>
                    <tr>
                        <th>Last name</th>
                        <td><input class="form-control" type="text" name= "author_last_name" placeholder ="Add New" value="<?php echo $author_last_name ?>"  /></td>
                    
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type="text" name= "publisher_name" placeholder ="Add New" value="<?php echo $publisher_name ?>"  /></td> 
                        
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class="form-control" type="text" name= "publisher_address" placeholder ="Add New" value="<?php echo $publisher_address ?>"  /></td>

                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><input class="form-control" type="date" name= "publish_date" placeholder ="publish_date" value="<?php echo $publish_date ?>"  /></td>
                    </tr>


                        <input type= "hidden" name="id" value="<?=$id?>" />
                                
                        <input type= "hidden" name= "picture" value="<?=$picture ?>" />
                        


                        
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>