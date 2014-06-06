<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>My Time Sheet</title>
	<meta name="description" content="Tracking my time">
	<meta name="author" content="Ray Vafa">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Date</th>
					<th>Start time</th>
					<th>End time</th>
					<th>Launch duration</th>
					<th>Worked</th>
				</tr>
				</thead>
				<tbody>
				<?php
				date_default_timezone_set('Australia/Sydney');
				// Create connection
				$con = mysqli_connect("203.170.85.245", "ramoonph_time", "Iam21777", "ramoonph_time");

				// Check connection
				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$sql = "SELECT id, date, start_time, end_time, launch_duration FROM tbl_work_time_tracker order by date desc";
				$result = mysqli_query($con, $sql);
				$counter = 1;
				$total_worked = 0;
				while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $counter ?></td>
						<td><?php echo $row['date'] ?></td>
						<td><?php echo substr($row['start_time'], 0, 5) ?></td>
						<td><?php echo substr($row['end_time'], 0, 5) ?></td>
						<td><?php echo substr($row['launch_duration'], 0, 5) ?></td>
						<td>
							<?php
							$worked = (strtotime($row['end_time']) - strtotime($row['start_time']));
							$real_worked = (strtotime(gmdate('H:i:s', $worked)) - strtotime($row['launch_duration']));
							$total_worked += $real_worked;
							echo gmdate('H:i:s', $real_worked);
							?>
						</td>
					</tr>
					<?php
					$counter++;
				}

				mysqli_close($con);
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<?php
						$hours = $total_worked / 3600;
						$minutes = ($total_worked / 60) % 60;
						echo gmdate('h:i:s', $total_worked);
						?></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br/><br/>
	<div class="list-group">
		<a href="index.html" class="list-group-item">Go back</a>
	</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
