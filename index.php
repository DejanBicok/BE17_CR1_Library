<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM library"; 
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            
            <td>" .$row['title']."</td>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
            <td>" .$row['isbn_code']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['author_first_name']."</td>
            <td>" .$row['author_last_name']."</td>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publisher_address']."</td>
            <td>" .$row['publish_date']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";



    };
} else {
    $tbody =  "<tr><td colspan='10'class='text-center'>No Data Available</td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library</title>
        <?php require_once 'components/boot.php'?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
      
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add another book</button></a>
            </div>
            <p class='h2'> - Books - </p>
            <table class='table table-hover'> <!-- table table-striped -->
                <thead class='tablehead'>
                    <tr>
                        
                        <th>Title</th>
                        <th>Picture</th>
                        <th>ISBN Code</th>
                        <th>Short Description</th>
                        <th>Type</th>
                        <th>Author First Name</th>
                        <th>Author Last Name</th>
                        <th>Publisher Name</th>
                        <th>Publisher Address</th>
                        <th>Publish Date</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php echo $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>