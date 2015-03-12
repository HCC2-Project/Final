<?php
$fileContents = file_get_contents("scores.txt");

$namesList = reset(explode("::", $fileContents));
$scoresList = end(explode("::", $fileContents));
$nArr = explode(",", $namesList);
$sArr = explode(",", $scoresList);

$display = "";
for ($i=1; $i<=10; $i++) {
	$display .= "<tr><td>" . $i . "</td><td>" . $nArr[$i-1] . "</td><td>" . $sArr[$i-1] . "</td></tr>";
}

$status = $_GET['status'];
if ($status=="success") {
	$highscores = "Congratulations! Your score made the top ten leaderboards.";
} else if ($status=="fail") {
	$highscores = "Sorry, but your score did not make the leaderboards. Perhaps you can try again?";
} else {
	$highscores = "";
}
?>
<?php echo $highscores; ?>
<table><?php echo $display; ?></table>