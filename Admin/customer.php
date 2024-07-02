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

    $sql = "SELECT * from signup ";
    $result = $conn->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>LastName</th>
            <th>FullName</th>
            <th>NIC</th>
            <th>Gender</th>
            <th>Type</th>
            <th>Address</th>
            <th>city</th>
            <th>Mobile</th>
            <th>email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                
        ?>
        <tr>
            <td><?php echo $row["FirstName"]; ?></td>
            <td><?php echo $row["LastName"]; ?></td>
            <td><?php echo $row["FullName"]; ?></td>
            <td><?php echo $row["NIC"]; ?></td>
            <td><?php echo $row["Gender"]; ?></td>
            <td><?php echo $row["Type"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row["City"]; ?></td>
            <td><?php echo $row["Mobile"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            
            <td><a href="deletec.php?mail=<?php echo $row["Email"];?>">delete</a></td>
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
