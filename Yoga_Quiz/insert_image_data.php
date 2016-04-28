<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "yoga_quiz";

	// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// check connection
	if($conn -> connect_error)
		die("Connection failed: " . $conn -> connect_error);

	$sql = "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Corpse-Pose/Corpse-Pose.jpg', 
		'http://localhost/Yoga_Quiz/res/Corpse-Pose/kQBMILFz3jvX.jpg', 
		'Corpse Pose', 'Savasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/crane/crane.jpg', 
		'http://localhost/Yoga_Quiz/res/crane/53WBX69zx1yn.jpg', 
		'Crane', 'Bakasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/crane-side/crane-side.jpg', 
		'http://localhost/Yoga_Quiz/res/crane-side/xQZ4w5s0Wrjy.jpg', 
		'Crane-side', 'Parsva Bakasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/dog/dog.jpg', 
		'http://localhost/Yoga_Quiz/res/dog/DNG1vYTp6JxX.jpg', 
		'Downward Forward-Facing Dog', 'Adho Mukha Savasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Eka-Pada-Jathara-Paarivartta/EPJP.jpg', 
		'http://localhost/Yoga_Quiz/res/Eka-Pada-Jathara-Paarivartta/EPJP_half.jpg', 
		'One Leg Revolved Belly Pose', 'Eka Pada Jathara Paarivartta');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Eka-Pada-Parivrtta-Upavisth/EPPU.jpg', 
		'http://localhost/Yoga_Quiz/res/Eka-Pada-Parivrtta-Upavisth/EPPU_half.jpg', 
		'One Leg Relvoving Seated Pose', 'Eka Pada Parivrtta Upavisth');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Eka-Pada-Parsva-Bakasana/Eka-Pada-Parsva-Bakasana.jpg', 
		'http://localhost/Yoga_Quiz/res/Eka-Pada-Parsva-Bakasana/TO9k6xRsXUD2.jpg', 
		'One Leg Side Crane Pose', 'Eka Pada Parsva Bakasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Eka-Pada-Sarvangasana/Eka-Pada-Sarvangasana.jpg', 
		'http://localhost/Yoga_Quiz/res/Eka-Pada-Sarvangasana/wx1Y7Oj4qZ4z.jpg', 
		'One Leg Supported Shoulderstand Pose', 'Eka Pada Salamba Sarvangasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/extended-side/extended-side.jpg', 
		'http://localhost/Yoga_Quiz/res/extended-side/1Q5mYamOkPdR.jpg', 
		'Extended Side Angle', 'Parsvakonasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/fish/fish.jpg', 
		'http://localhost/Yoga_Quiz/res/fish/w78CX5Jf7BEr.jpg', 
		'Half Fish Pose', 'Ardha Matsyasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/fish2/fish2.jpg', 
		'http://localhost/Yoga_Quiz/res/fish2/FWxcG1czuMqs.jpg', 
		'Fish Pose (Variation)', 'Matsyanasan');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Galavasana/Galavasana.jpg', 
		'http://localhost/Yoga_Quiz/res/Galavasana/XGxXj5mzzuub.jpg', 
		'Name of a Sage', 'Galavasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Heron-Pose/Heron-Pose.jpg', 
		'http://localhost/Yoga_Quiz/res/Heron-Pose/UfReRWPbxEr1.jpg', 
		'Heron Pose', 'Krounchasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/janu/janu.jpg', 
		'http://localhost/Yoga_Quiz/res/janu/nGjsij4K7Ogj.jpg', 
		'Revolved Knee to the Head', 'Parivrtta Janu Sirsasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Janu-Sirsasana2/Janu-Sirsasana2.jpg', 
		'http://localhost/Yoga_Quiz/res/Janu-Sirsasana2/9kemZm63IZnT.jpg', 
		'Revolved Knee to the Head (Variation)', 'Janu Sirsasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Janu-Sirsasana-revolved2/Janu-Sirsasana-revolved2.jpg', 
		'http://localhost/Yoga_Quiz/res/Janu-Sirsasana-revolved2/CPDFM8duslkl.jpg', 
		'Revolved Knee to the Head (Variation)', 'Parivrttta Janu Sirsasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Kapotasana/Kapotasana.jpg', 
		'http://localhost/Yoga_Quiz/res/Kapotasana/vcbyoQg9gfnh.jpg', 
		'Pigeon Pose', 'Kapotasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Karnapidasana/Karnapidasana.jpg', 
		'http://localhost/Yoga_Quiz/res/Karnapidasana/4zIaiusY2nnS.jpg', 
		'Ear Pressure Pose', 'Karnapidasana');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/koundinyasana/koundinyasana.jpg', 
		'http://localhost/Yoga_Quiz/res/koundinyasana/lGyPJ6XycTup.jpg', 
		'Named After a Sage', 'Koundinyasana II');";

	$sql .= "INSERT INTO yoga_cards(full_image_path, half_image_path, english_name, sanskirt_name) VALUES 
	('http://localhost/Yoga_Quiz/res/Locust-Pose/Locust-Pose.jpg', 
		'http://localhost/Yoga_Quiz/res/Locust-Pose/iqWDkBDUFjTX.jpg', 
		'Locust Pose', 'Shalabhasana')";

	if($conn -> multi_query($sql) === TRUE)
		echo "New record created successfully";
	else 
		echo "Error: " . $sql . "<br>" . $conn -> error;

	$conn -> close();
?>