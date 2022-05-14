<?php 

session_start();

if (isset($_REQUEST['edit_story'])) {
	
	$stories = simplexml_load_file('files/story.xml');

	foreach ($stories->story as $story) {
	 	
	 	if ($story->id == $_POST['story_id']) {
	 		$story->title = $_POST['story_title'];
	 		$story->author = $_POST['story_author'];
	 		$story->date = $_POST['story_date'];
	 		$story->content = $_POST['story_content'];
	 		break;
	 	} //end of if

	 } //end of foreach

	 file_put_contents('files/story.xml', $stories->asXML());
	 $_SESSION['message'] = "Story Successfully Updated";
	 header("location: indexstory.php");

} //end of isset
else{

	$_SESSION['message'] = "select story to edit first";
	header("location: indexstory.php");
}


?>