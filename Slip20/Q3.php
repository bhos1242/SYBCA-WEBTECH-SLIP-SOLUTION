<?php
$xml = simplexml_load_file("cricket.xml");

$players = array();
foreach ($xml->children() as $player) {
    $name = (string) $player->player;
    $runs = (int) $player->runs;
    $wickets = (int) $player->wickets;
    $players[] = array("name" => $name, "runs" => $runs, "wickets" => $wickets);
}

echo "<h1>Players who have scored more than 100 runs:</h1>";
echo "<ul>";
foreach ($players as $player) {
    if ($player["runs"] > 100) {
        echo "<li>Name: " . $player["name"] . ", Runs: " . $player["runs"] . ", Wickets: " . $player["wickets"] . "</li>";
    }
}
echo "</ul>";
?>
