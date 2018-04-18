<?php

//recent scores
$user_score = intval($_POST['score']);
$user_initials = isset($_POST['initials']) ? strtoupper(substr(htmlspecialchars($_POST['initials']),0,2)) : "";
$user_initials = preg_replace("/[^a-zA-Z]+/", "", $user_initials);

if(file_exists('scores')){
	$scores = file_get_contents('scores');
	$scores = json_decode($scores, true);
}
if(empty($scores) || !is_array($scores)){
	$scores = [];
}

array_unshift($scores, ["initials"=>$user_initials, "score"=>$user_score, "date"=>date('M d h:i:s T')]);

if(count($scores) > 25){
	$scores = array_slice($scores, 0, 25);
}

file_put_contents('scores',json_encode($scores));


//tscores
if(file_exists('tscores')){
	$tscores = file_get_contents('tscores');
	$tscores = json_decode($tscores, true);
}
if(empty($tscores) || !is_array($tscores)){
	$tscores = [];
}

array_unshift($tscores, ["initials"=>$user_initials, "score"=>$user_score, "date"=>date('M d h:i:s T')]);

foreach($tscores as $key => $row){
	$score[$key] = $row['score'];
}
array_multisort($score, SORT_DESC, $tscores);

if(count($tscores) > 5){
	$tscores = array_slice($tscores, 0, 5);
}



file_put_contents('tscores',json_encode($tscores));



echo "<center>";

echo "<strong>Your score: <span class='scoreT_value_display'>$user_score</strong></span><br><br>";

echo '<span style="cursor:pointer; font-size: 2em; color: white;" onclick="location.reload();">Select here to try again!<span></span></span><br><br>';

echo "<strong>Top Scores This Month:</strong><br><br>";
$i = 0;
foreach($tscores as $score){
	$i++;
	echo "$i . Initials: " . $score['initials'] . ", Score: " . $score['score'] . ", Date: " . $score['date'] . "<br>";
}
echo "<br>";


echo "<strong>Recent Scores:</strong><br><br>";

$i = 0;
foreach($scores as $score){
	$i++;
	echo "$i . Initials: " . $score['initials'] . ", Score: " . $score['score'] . ", Date: " . $score['date'] . "<br>";
}
echo "</center>"
?>