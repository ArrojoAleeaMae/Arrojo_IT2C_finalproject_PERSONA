<?php 

session_start();
$id = $_REQUEST['id'];

$stories = simplexml_load_file("files/story.xml");

//create an iteration
$index = 0;
$i = 0;


foreach ($stories->story as $story) {

//remove if the ID matches	
	if ($story->id = $id) {
		$index = $i;
		break;
	}
	$i++;
}

unset($stories->story[$index]);
file_put_contents('files/story.xml',$stories->asXML());


$_SESSION['message'] = "Story Successfully Deleted";
header("location: indexstory.php");

?>