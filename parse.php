<?php
    if ($exists) {
        $fh = fopen($filename, "r");

        $lines = explode("#", fgets($fh));

        for ($i=0; $i < count($lines); $i++) {
            $pattern = '/^EXTINF:[0-9]+,(.*) - (.*)\/Users/';
            $matches = array();
            preg_match_all($pattern, $lines[$i], $matches, PREG_SET_ORDER, 0);
            if (isset($matches[0])) {
                echo "<div class='song click' style='padding-left: ". ($i-2) * 5 ."px'>
                          <div class='author'>" . mb_strtoupper($matches[0][2]) . " —</div>
                          <div class='title'>" . mb_strtoupper($matches[0][1]) . "</div>
                      </div>";
            }
        }

        fclose($fh);
    } else {
        echo "Playlist not found.";
    }
?>
