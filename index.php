<!DOCTYPE html>
<html>

<?php include("init.php"); ?>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="master.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body class=<?php echo '"' . $class . '"' ?>>

    <ul id="scene" class="scene">
        <li class="layer" data-depth="0.1">
            <div id="bg" class=<?php echo '"' . $class . '"' ?>><?php echo $title; ?></div>
        </li>
        <li class="layer" data-depth="0.2">
            <div id="playlist">
                <table>
                    <?php include("parse.php"); ?>
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

        $('tr').click(function() {
            if (this.innerText) {
                window.open("https://www.youtube.com/results?search_query=" + encodeURIComponent(this.innerText), '_blank');
            }
        });
    </script>

</body>

</html>
