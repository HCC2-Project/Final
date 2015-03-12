<?php
$uScore = $_POST['score'];
$uName = $_POST['name'];

$fileContents = file_get_contents("scores.txt");
$namesList = reset(explode("::", $fileContents));
$scoresList = end(explode("::", $fileContents));
$nArr = explode(",", $namesList);
$sArr = explode(",", $scoresList);

$numberOfScores = count($sArr);
for ($i=0; $i<$numberOfScores; $i++) {
	if ($uScore>=$sArr[$i]) {
		$numScoreToWrite = $i;
		$i = $numberOfScores;
	}
}

if ($numScoreToWrite!="") {
	if ($numberOfScores<10) {
		array_push($sArr, $uScore);
		array_push($nArr, $uName);
		$status = "success";
	} else {
		$status = "fail";
	}
} else {
	if ($numScoreToWrite==0) {
		array_unshift($sArr, $uScore);
		array_unshift($nArr, $uName);
		$status = "success";
	} else {
		array_splice($sArr, $numScoreToWrite-1, 0, $uScore);
		array_splice($nArr, $numScoreToWrite-1, 0, $uName);
		$status = "success";
	}
}

$toWrite = implode(",", $nArr) . "::" . implode(",", $sArr);

file_put_contents("scores.txt", $toWrite);

header("Location: display.php?status=".$status);
?>