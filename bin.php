<?php 
date_default_timezone_set('America/Caracas');
$realdate = date('Y-d-m');
if (isset($_POST['data'])) {
	$location = $_POST['location'];
	$request = request($location);
	if ($request != null) {
	$request = json_decode(request($location), true);
	$confirmed = $request['data']['confirmed'];
	$deaths = $request['data']['deaths'];
	$data = '<table class="table table-light table-hover">
	<thead>
	<tr>
	<th>Location</th>
	<th>Confirmed</th>
	<th>Deaths</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>'.$location.'</td>
	<td>'.$confirmed.'</td>
	<td>'.$deaths.'</td>
	</tr
	</tbody>
	</table>';
	echo $data;
	return;
}
else {
		$data = '<table class="table table-light table-hover">
		<thead>
		<tr>
		<th>Location</th>
		<th>Confirmed</th>
		<th>Deaths</th>
		</tr>
		</thead>
		<tbody>
		<td>No results</td>
		<td></td>
		<td></td>
		</tbody>
		</table>';
		echo $data;
		return;
	}
}
else {
	$location = "";
	$request = request($location);
	if ($request != null) {
		$request = json_decode($request, true);
		$confirmed = $request['data']['confirmed'];
		$deaths = $request['data']['deaths'];
		$locationr = $request['data']['location'];
		$data = '<table class="table table-light table-hover">
		<thead>
		<tr>
		<th>Location</th>
		<th>Confirmed</th>
		<th>Deaths</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>'.$locationr.'</td>
		<td>'.$confirmed.'</td>
		<td>'.$deaths.'</td>
		</tr>
		</tbody>
		</table>';
		echo $data;
		return;
	}
	else {
		$data = '<table class="table table-light table-hover">
		<thead>
		<tr>
		<th>Location</th>
		<th>Confirmed</th>
		<th>Deaths</th>
		</tr>
		</thead>
		<tbody>
		<td>No results</td>
		<td></td>
		<td></td>
		</tbody>
		</table>';
		echo $data;
		return;
	}
	
}
function request ($location) {
	$curl = curl_init();
	curl_setopt_array($curl, [
		CURLOPT_URL => "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total?country=$location",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"x-rapidapi-host: covid-19-coronavirus-statistics.p.rapidapi.com",
			"x-rapidapi-key: c0b505bc60mshcd219d10e366e47p1fc963jsn975574d5a608"
		],
	]);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		return null;
	} else {
		return $response;
	}
}

?>