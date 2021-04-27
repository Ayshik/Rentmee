<?php
session_start();
include('db_connect.php');
include('Adminheader/adminhead.php');
if(isset($_SESSION["loggedinuser"]))
{
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
        <thead>
        <tr>
            <th>Serial</th>
            <th>User Name</th>
			<th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>NID</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $sql = "select * from owner";
        $result = mysqli_query($con,$sql);
        foreach($result as $info)
        {?>
        <tr>
            <td><?php echo $info["sl"];?></td>
            <td><?php echo $info["username"];?></td>
            <td><?php echo $info["email"];?></td>
            <td><?php echo $info["phone"];?></td>
            <td><?php echo $info["Address"];?></td>
            <td><?php echo $info["nid"];?></td>
            <td><?php echo $info["Name"];?></td>
            <td><a href = "ownerinfoDetails.php?sl=<?php echo $info["sl"];?>">Details</a>
           
        </tr>        
        <?php } ?>
 </tbody>
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
