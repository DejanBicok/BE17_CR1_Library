<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style.css">
        <title>Books |  Search the Book</title>
      
    </head>
    <body class="body1">
        <fieldset>
            <legend class='h2'>Insert Book Details</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text"  name="title" placeholder ="Add Title" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type= "file" name="picture" step="any"  placeholder="picture" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class="form-control" type="number" name= "isbn_code" placeholder ="Add ISBN Code" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text" name= "short_description" placeholder ="Add Short Description" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type="text" name= "type" placeholder ="Add Type" /></td>

                    </tr>
                    <tr>
                        <th>First name</th>
                        <td><input class="form-control" type="text" name= "author_first_name" placeholder ="Add Author First Name" /></td>    

                    </tr>
                    <tr>
                        <th>Last name</th>
                        <td><input class="form-control" type="text" name= "author_last_name" placeholder ="Add Author Last Name" /></td>
                    
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type="text" name= "publisher_name" placeholder ="Add Publisher Name" /></td> 
                        
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class="form-control" type="text" name= "publisher_address" placeholder ="Add Publisher Address" /></td>

                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><input class="form-control" type="date" name= "publish_date" placeholder ="publish_date" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add Book</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>


