<?php 

session_start();

//check if the button is clicked
if (isset($_REQUEST['publish'])) {
	
	//open xml file
	$stories = simplexml_load_file('files/story.xml');

	//preapre all the tags and data
	$story = $stories->addChild('story');

	//save the data
	$story->addChild('id', $_REQUEST['story_id']);
	$story->addChild('title', $_REQUEST['story_title']);
	$story->addChild('author', $_REQUEST['story_author']);
	$story->addChild('date', $_REQUEST['story_date']);
	$story->addChild('content', $_REQUEST['story_content']);

	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($stories->asXML());
	$dom->save('files/story.xml');


	//send a message to index
	$_SESSION['message'] = "Story Successfully Added";
	header("location: indexstory.php");


} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location: indexstory.php");
}


?>