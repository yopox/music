<!DOCTYPE html>
<html>

<?php $filename = "playlists/" . $_GET["id_playlist"] . ".m3u";
      $exists = file_exists($filename);
      $title = "";
      if ($exists) { $title = $_GET["id_playlist"]; } else { $title = "98.w14"; }?>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="master.css">
</head>

<body>

    <ul id="scene" class="scene">
        <li class="layer" data-depth="0.1">
            <div id="bg"><?php echo $title; ?></div>
        </li>
        <li class="layer" data-depth="0.2">
            <div id="playlist">
                <table>
                    <?php if ($exists) {
                              $fh = fopen($filename, "r");

                              $lines = explode("#", fgets($fh));

                              for ($i=0; $i < count($lines); $i++) {
                                  $pattern = '/^EXTINF:[0-9]+,(.*) - (.*)\/Users/';
                                  $matches = array();
                                  preg_match_all($pattern, $lines[$i], $matches, PREG_SET_ORDER, 0);
                                  echo "<tr>
                                            <th>" . $matches[0][1] . "</th>
                                            <td>" . $matches[0][2] . "</td>
                                        </tr>";
                              }

                              fclose($fh);
                          } else {
                              echo "Playlist not found.";
                          }

                     ?>
                </table>
            </div>
        </li>
    </ul>


    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/parallax/deploy/jquery.parallax.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#scene').parallax();
        });
    </script>

</body>

</html>
