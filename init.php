<?php
    if (isset($_GET["latest"]) && $_GET["latest"] == 0 && strlen($_GET["id_playlist"])) {
        $filename = "playlists/" . $_GET["id_playlist"] . ".m3u";
        $exists = file_exists($filename);
        $title = "";
        if ($exists) { $title = $_GET["id_playlist"]; } else { $title = "98.w14"; }
    } else {
        $files = scandir("playlists/", 1);
        $filename = "playlists/" . $files[0];
        $exists = file_exists($filename);
        $title = substr($files[0], 0, 6);
    }

    $class = "w00";

    if (strlen($filename) == 20) {
        $class = substr($filename, 13, 3);
    }

?>
