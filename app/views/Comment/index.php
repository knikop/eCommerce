<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Comment</title>
</head>
<body>
    <h1>List of Comments</h1>
    
    <p>
    <a href="/Comment/add">Add a new comment</a>
    <table>
        <tr><th>Comment</th></tr>
    <?php

    foreach ($data as $item) {
        echo "<tr>
        <td type=name>$item->comment</td>
        <td type=action>
        <a href='/Comment/edit/$item->comment_id'>edit</a> | 
        <a href='/Comment/delete/$item->comment_id'>delete</a> |
        </td>
        </tr>";
    }

?>
</table>
</p>
</body>
</html>