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

    $sql = "SELECT * from payment ";
    $result = $conn->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>FullName</th>
            <th>CardNumber</th>
            <th>Month</th>
            <th>Year</th>
            <th>CVC</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Email</th>
            <th>Type</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                
        ?>
        <tr>
            <td><?php echo $row["FullName"]; ?></td>
            <td><?php echo $row["CardNumber"]; ?></td>
            <td><?php echo $row["Month"]; ?></td>
            <td><?php echo $row["Year"]; ?></td>
            <td><?php echo $row["CVC"]; ?></td>
            <td><?php echo $row["Amount"]; ?></td>
            <td><?php echo $row["Date"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Type"]; ?></td>
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
