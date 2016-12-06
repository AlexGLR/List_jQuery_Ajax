<?php

$namefl = $_POST['livesearch'];
$masempl = explode(" ", $namefl);




$list="list.txt";
$listfl = file_get_contents('words.txt');
// $listpl = explode(",", $listfl);
    // echo json_encode($listpl);


// if(!in_array($masempl, $listpl)) {
	echo json_encode($listfl);
// } else {
// 	echo json_encode("aaa");
	
// };


// $livesearch = $_POST['livesearch'];
// if (isset($livesearch)) {
// 	$mas = array("ActionScript",
// 		"AppleScript",
// 		"Asp",
// 		"BASIC",
// 		"C",
// 		"C++",
// 		"Clojure",
// 		"COBOL",
// 		"ColdFusion",
// 		"Erlang",
// 		"Fortran",
// 		"Groovy",
// 		"Haskell",
// 		"Java",
// 		"JavaScript",
// 		"Lisp",
// 		"Perl",
// 		"PHP",
// 		"Python",
// 		"Ruby",
// 		"Scala",
// 		"Scheme");
// } 
// else if ($livesearch==2) {$mas = array("London","Liverpool","Boston","Oxford");} 
// else {$mas = "xxxxx";}
// echo json_encode($mas);
?>
