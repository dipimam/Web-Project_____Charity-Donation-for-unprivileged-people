<?php
$connect = mysqli_connect("localhost", "root", "", "charity_donation_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM requestdonation
	WHERE LOCATION LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM requestdonation ORDER BY LOCATION";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>LOCATION</th>
							<th>AMOUNT</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["LOCATION"].'</td>
				<td>'.$row["AMOUNT"].'</td>

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
