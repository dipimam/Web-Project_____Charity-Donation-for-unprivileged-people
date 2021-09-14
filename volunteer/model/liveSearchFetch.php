


<?php
$connect = mysqli_connect("localhost", "root", "", "charity_donation_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM volunteerreport
	WHERE AREA LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM volunteerreport ORDER BY AREA";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>PACKING</th>
							<th>PACKET</th>
							<th>AREA</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["PACKING"].'</td>
				<td>'.$row["PACKET"].'</td>
				<td>'.$row["AREA"].'</td>
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
