<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>task email</title>
</head>
<body>
<?php

	$email="kartavy@gmai.com";

	$phone = "9876543210";

	if($email && strpos($email, "@") && strlen($phone)=="10"){

		echo "email is valide.".'<br>';

		$parts = explode("@", $email);

		//print_r($parts);

		echo "UserName:- ".$parts[0];

		echo "<br>";

		echo "DominName:- ".$parts[1];

		echo "<br>";

		echo "MobileNumber:-".$phone;

	} else {

		echo "email is not valide.";

	}

	echo "<br>";

	echo "<hr><br>";

	$datas = ['15-7-2025','16-7-2025','15-7-2025','17-7-2025','14-7-2025', '17-7-2025', '15-7-2025'];

	print_r(count($datas));

	echo "<br>";

	$exist = [];

	foreach ($datas as $data) {

		 // if (in_array($data, $exist)) { continue; }

		 // echo $data."<Br>";

		 //$exist[] = $data;

		if(isset($exist[$data])){

			$exist[$data]++;

		}else {

			$exist[$data] = 1;

		}

	}

	echo "<pre>";

	print_r($exist);

	echo "</pre>";

	echo "<hr><br>";

	$dates = [

		[

			'date' => '15-7-2025',

			'start_time' => '9:30',

			'end_time' => '10:00',

		],

		[

			'date' => '15-7-2025',

			'start_time' => '17:00',

			'end_time' => '18:00',

		],

		[

			'date' => '15-7-2025',

			'start_time' => '12:00',

			'end_time' => '12:00',

		]

		,

		[

			'date' => '16-7-2025',

			'start_time' => '17:00',

			'end_time' => '18:00',

		],

		[

			'date' => '18-7-2025',

			'start_time' => '17:00',

			'end_time' => '18:00',

		],

		[

			'date' => '21-7-2025',

			'start_time' => '17:00',

			'end_time' => '18:00',

		],

		[

			'date' => '21-7-2025',

			'start_time' => '12:00',

			'end_time' => '12:30',

		]

	];

	$dateDatas = [];

	foreach($dates as $date){

		// echo "<pre>";

		// print_r($date);

		$dat = $date['date'];

		$start = $date['start_time'];

		$end_time = $date['end_time'];

		echo $dat." ".$start." to ".$end_time."<br>";

		$dateDatas[strtotime($dat)][] = $date;

		//print_r($date['date']);

	}
 
	echo "<hr>";

	foreach ($dateDatas as $key => $dateData) {

		// echo "<pre>";

		// print_r($dateData);

		// echo "</pre>";

		$date = $dateData[0];

		$dat = $date['date'];

		$start = $date['start_time'];

		$end_time = $date['end_time'];

		if (count($dateData) > 1) {

			foreach ($dateData as $value) {

				if (strtotime($end_time) <= strtotime($value['end_time'])) {

					$end_time = $value['end_time'];

				}

				if (strtotime($start) >= strtotime($value['start_time'])) {

					$start = $value['start_time'];

				}

			}

		}

		echo $dat." ".$start." to ".$end_time."<br>";

	}

	echo "<hr>";

	$matchedInfo = ['volutpat', 'imperdiet', 'sed', 'fermentum'];

	$infos = [

		'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

		'Cras consectetur sem eu nunc auctor ullamcorper vel at mauris.',

		'Maecenas id dui cursus, mollis diam sit amet, fermentum mauris.',

		'Maecenas at lacus sed arcu volutpat ultrices.',

		'Morbi vitae arcu sed metus pulvinar faucibus.',

		'Nulla ut turpis at orci finibus vulputate.',

		'Nulla pellentesque quam in lectus tempor volutpat.',

		'Sed id diam nec turpis tristique molestie at sed mi.',

		'Nullam vestibulum velit eget tellus cursus, in porta metus euismod.',

		'Donec ut sem fermentum nisi consectetur fringilla rhoncus in quam.',

		'Aliquam porta augue et ex commodo, in iaculis mauris sodales.',

		'Quisque vel metus tincidunt, tincidunt purus et, imperdiet ex.',

		'volutpat Nam vel eros in leo pharetra sodales.',

		'Nulla vel erat hendrerit metus placerat volutpat et id nisl.',

		'Mauris ut dolor a purus venenatis fermentum.',

	];

	echo "<ul>";

	foreach($infos as $info){

		echo "<li>". $info."</li><Br>";

	}echo "<hr>";

	echo "</ul>";

	echo "<ul>";

	foreach($infos as $info){

		// if(strpos($info, "volutpat") || strpos($info, "imperdiet") || strpos($info, "sed") || strpos($info, "fermentum")){

		// 	echo "<li>". $info."</li><Br>";

		// }

		foreach ($matchedInfo as $matcheInfo) {

			if (strpos($info, $matcheInfo) !== false){

				echo "<li>". $info."</li><Br>";

			}

		}

	}

	echo "</ul>";

	?>
<button onclick="createForm()">Create Form</button>
<div id="form-container"></div>
<script>

		function createForm() {

			const form = document.createElement("form");

		    form.setAttribute("action", "#");

		    form.setAttribute("method", "post");

		    form.setAttribute("id", "myForm");
 
		    // 2. Create input: Name

		    const nameLabel = document.createElement("label");

		    nameLabel.innerText = "Name:";

		    const nameInput = document.createElement("input");

		    nameInput.setAttribute("type", "text");

		    nameInput.setAttribute("name", "name");

		    nameInput.setAttribute("placeholder", "Enter your name");
 
		    // 3. Create input: Email

		    const emailLabel = document.createElement("label");

		    emailLabel.innerText = "Email:";

		    const emailInput = document.createElement("input");

		    emailInput.setAttribute("type", "email");

		    emailInput.setAttribute("name", "email");

		    emailInput.setAttribute("placeholder", "Enter your email");
 
		    // 4. Create submit button

		    const submitBtn = document.createElement("button");

		    submitBtn.setAttribute("type", "submit");

		    submitBtn.innerText = "Submit";
 
		    // 5. Append elements to form

		    form.appendChild(nameLabel);

		    form.appendChild(nameInput);

		    form.appendChild(document.createElement("br"));

		    form.appendChild(emailLabel);

		    form.appendChild(emailInput);

		    form.appendChild(document.createElement("br"));

		    form.appendChild(submitBtn);
 
		    // 6. Add form to HTML container

		    document.getElementById("form-container").appendChild(form);

		}
 
	</script>
</body>
</html>
<?php /*

Steps 1:

- 15-7-2025 9:30 to	 10:00

- 15-7-2025 12:00 to 12:30

- 15-7-2025 17:00 to 18:00

- 16-7-2025 17:00 to 18:00

- ...
 
Steps 2:

- 15-7-2025 9:30 to 18:00

- 16-7-2025 17:00 to 18:00

- ...

*/ ?>
 