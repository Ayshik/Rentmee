<?php
session_start();
include('db_connect.php');
include('Ownerheader/ownerhead.php');
if(isset($_SESSION["loggedinuser"]))
{
if(isset($_POST['delete']))
{
    $a = $_GET['sl'];
    $sql1 = "DELETE FROM post WHERE sl = '$a' ";

if (mysqli_query($con, $sql1)) {
  header("location:DeletePost.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

?>
<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
   
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 99%;
    /* padding-top: 34px; */
    /* align-items: center; */
    max-width: 69%;
    margin-left: 257px;
    margin-top: -12px;
    white-space: nowrap;
    background-color: #1f80fd;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

</style>

<section><div class="table-wrapper">
    <table class="fl-table">
        <tbody>
        <?php
        $sl = $_GET['sl'];       
        $sql = " select * from post where sl = '$sl' ";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
       ?>
       <tr><th>SERIAL</th></tr>
       <tr><th><?php echo $sl;?></th></tr>
       <tr><th>Category</th></tr>
       <tr><th><?php echo $row['category'];?></th></tr>
       <tr><th>Room</th></tr>
       <tr><th><?php echo $row['room'];?></th></tr>
       <tr><th>Bedroom</th></tr>
       <tr><th><?php echo $row['bedroom'];?></th></tr>
       <tr><th>Dining</th></tr>
       <tr><th><?php echo $row['dining'];?></th></tr>
       <tr><th>Drawing</th></tr>
       <tr><th><?php echo $row['drawing'];?></th></tr>
       <tr><th>Attach Bathroom</th></tr>
       <tr><th><?php echo $row['attachbathroom'];?></th></tr>
       <tr><th>Common Bathroom</th></tr>
       <tr><th><?php echo $row['commonbathroom'];?></th></tr>
       <tr><th>Balcony</th></tr>
       <tr><th><?php echo $row['balcony'];?></th></tr>
       <tr><th>Floor</th></tr>
       <tr><th><?php echo $row['floor'];?></th></tr>
       <tr><th>Lift</th></tr>
       <tr><th><?php echo $row['lift'];?></th></tr>
       <tr><th>Block</th></tr>
       <tr><th><?php echo $row['block'];?></th></tr>
       <tr><th>Road</th></tr>
       <tr><th><?php echo $row['road'];?></th></tr>
       <tr><th>Rent</th></tr>
       <tr><th><?php echo $row['rent'];?></th></tr>
       <tr><th>Owner</th></tr>
       <tr><th><?php echo $row['owner'];?></th></tr>
       <tr><th>Photo 1</th></tr>
       <tr><th><?php echo $row['photo1'];?></th></tr>
       <tr><th>Photo 2</th></tr>
       <tr><th><?php echo $row['photo2'];?></th></tr>
       <tr><th>Photo 3</th></tr>
       <tr><th><?php echo $row['photo3'];?></th></tr>
       <tr><th>Photo 4</th></tr>
       <tr><th><?php echo $row['photo4'];?></th></tr>
            
       <tr><th><form method="POST"><input type= "submit" value = "Delete" name = "delete"></th></tr>
       <tr><th><a href = "DeletePost.php">BACK</a></th></tr>     
 <tbody>
    </table>
</div></section>
  </body>
</html>
<?php }
else
{
    header("location:login.php");
}
?>