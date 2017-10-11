<?php
    if ($_GET["latest"] == 0) {
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
?>
