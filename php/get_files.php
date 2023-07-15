<?php
$directory = "../db/";
$files = glob($directory . "*.txt");

$fileData = [];

foreach ($files as $file) {
    $fileInfo = [
        "name" => $file,
        "contents" => file_get_contents($file)
    ];
    $fileData[] = $fileInfo;
}

header("Content-Type: application/json");
echo json_encode($fileData);
?>
