<?php
$connect = mysqli_connect("localhost", "root", "", "charity_donation_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM donation
	WHERE DONATEDBY LIKE '%".$search."%'
  OR DONATEDTO LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM donation ORDER BY DONATEDBY";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DONATED TO</th>
							<th>AMOUNT</th>
							<th>LOCATION</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["DONATEDTO"].'</td>
				<td>'.$row["AMOUNT"].'</td>
				<td>'.$row["LOCATION"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
