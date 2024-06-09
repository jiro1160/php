<?PHP
$people = array(
    "Taro" => "25歳men",
    "Jiro" => "20歳men",
    "hanako" => "16歳women"
);

foreach ($people as $people => $age) {
    print $people . "(" . $age . ")" . "<br />";
}