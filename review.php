<!-- 
/*session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from rooms where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}*/-->
<?php
session_start();


if(isset($_POST['del']))
{
	$id=intval($_POST['del']);
	$adn="delete from users where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
?>
<?php 
$server ="localhost";

$username = "root";
$password ="";
$database = "porthole";

$conn = mysqli_connect($server, $username , $password , $database);
if($conn)
{
    // echo"sucess";
}
else
{
    echo"fail";
}
?> 
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>complain</title>
	
</head>
<style>
	body{
		background-color: #2fbef7;
	}
	h2
	{
		font-size: 2.5rem;
		text-align: center;
		margin-top: 80px;
	}
	table{
		background-color: white;
		font-size: 1.2rem;
		text-align: center;	
		margin-left: 70px;
	}
	.panel-heading{
		font-size: 2rem;
		color: black;
		text-align : center;
		margin-bottom: 50px;
	}
	
</style>

<body>

	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						
						<div class="panel panel-default">
							<div class="panel-heading">All complain Details</div>
							<div class="panel-body">
								<table id="zctb"  cellspacing="2px" width="90%" border="2px" >
									<thead>
									<tr>
									<th>srno</th>
											<th>contractor Name</th>
											<th>contractor ID</th>
											<th>Address </th>
											
											<th>Rode Name/Number</th>
											<th>PINcode</th>
											<th>cost </th>
											<th>Time to complete </th>
											<th>Image </th>
											<th>Description </th>
										</tr>
									</thead>
									<tfoot>
									<tr>
									
									</tfoot>
									<tbody>
<?php	
// $aid=$_SESSION['name'];
$ret="select * from contract";
// $stmt= $mysqli->prepare($ret) ;
$stmt = mysqli_prepare($conn,$ret);
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->conid;?></td>
<td><?php echo $row->address;?></td>
<td><?php echo $row->roadname;?></td>
<td><?php echo $row->pincode;?></td>
<td><?php echo $row->cost;?></td>
<td><?php echo $row->ctime;?></td>
<td><?php echo $row->img;?></td>
<td><?php echo $row->description;?></td>


										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
