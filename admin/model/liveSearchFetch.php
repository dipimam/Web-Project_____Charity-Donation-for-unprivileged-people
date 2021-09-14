<?php
$connect = mysqli_connect("localhost", "root", "", "charity_donation_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM volunteerinfo
	WHERE V_NAME LIKE '%".$search."%'
  OR EMAIL LIKE '%".$search."%'
	OR USERNAME LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM volunteerinfo ORDER BY USERNAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>USERNAME</th>
							<th>PHONE</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["V_NAME"].'</td>
				<td>'.$row["EMAIL"].'</td>
				<td>'.$row["USERNAME"].'</td>
				<td>'.$row["PHONE"].'</td>
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
