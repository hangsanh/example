<?php 

	//connect and select the database 

$connect = mysqli_connect("localhost","root","");  

//check connecttion
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db( $connect, "mood");

// get the contents of the JSON file 

// $json_data = file_get_contents('jsontest');


// //decode JSON data to PHP array
//   $content = json_decode($json_data, true);

// //Fetch the details of Survey

    
 
// 	$title = $content ['survey_title'];
//     $version = $content ['version'];
    
//     $hidden_open= $content ['hidden_open_answers'];




// 	if (!mysqli_query($connect,"INSERT INTO surveys (title, version, hidden_open) 
// 		VALUES ('$title', '$version', '$hidden_open')"))
// 	 {
// 	  	echo("Error description: " . mysqli_error($connect));
// 	 }
// 	 else{
// 	  	echo "data insert Successully!!";
// 	 }

// 	mysqli_close($connect);


//Fetch 3 rows from actor table
  //$result = $connect->query("SELECT value where questions_id=5 FROM meta_questions ");


//Fetch into associative array
 //  while ( $row = $result->fetch_assoc())  {
	// $dbdata[]=$row;
 //  }

//Print array in JSON format
 //echo json_encode(array("components" => $dbdata[]));

$is_skippable = 0;

$components = array();

$answers = array();
$result = $connect->query("SELECT value WHERE questions_id= 1 FROM meta_questions ");
$answers[]=mysqli_fetch_row($result);

$options = array(
	'message' => "Do you like this new office?",
	'is_skippable' => $is_skippable == 1 ? true : false,
	'allow_multiple' => false,
	'randomize_answers_order' => false,
	'answers' => $answers
);

$quests = array(
	'label' => "0ba1f7c4-2671-4c9c-8599-df705b7567ee",
	'asked_once' => false,
	'type' => "choice",
	'options' => $options
);

$components[] = $quests;

$skeleton = array(
	'version' => 1,
	'components' => $components
);

echo json_encode($skeleton);



?>