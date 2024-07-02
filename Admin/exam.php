<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px; /* Set a max width for the table */
            margin: 0 auto; /* Center the table on the page */
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        /* Table header */
        th {
            background-color: #333;
            color: #fff;
        }
        
        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* Hover effect on rows */
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<?php
    include'../connect.php';
    session_start();
    
    if(isset($_SESSION["username"])){

    $sql = "SELECT * from exam ";
    $result = $conn->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Index_NO</th>
            <th>NIC_NO</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                
        ?>
        <tr>
            <td><?php echo $row["IndexNo"]; ?></td>
            <td><?php echo $row["NIC"]; ?></td>

            <td><a href="delete.php?mail=<?php echo $row["Email"];?>">delete</a></td>
        </tr>
       
    </tbody>
    <?php
        }
    }
    ?>
</table>
<?php
    }else{
        header("location:index.php");

    }

?>
</body>
</html>
