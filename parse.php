<?php
    if ($exists) {
        $fh = fopen($filename, "r");

        $lines = explode("#", fgets($fh));

        for ($i=0; $i < count($lines); $i++) {
            $pattern = '/^EXTINF:[0-9]+,(.*) - (.*)\/Users/';
            $matches = array();
            preg_match_all($pattern, $lines[$i], $matches, PREG_SET_ORDER, 0);
            if (isset($matches[0])) {
                echo "<tr>
                          <th>" . $matches[0][1] . "</th>
                          <td>" . $matches[0][2] . "</td>
                      </tr>";
            }
        }

        fclose($fh);
    } else {
        echo "Playlist not found.";
    }
?>
