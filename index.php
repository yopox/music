<!DOCTYPE html>
<html>

<?php include("init.php"); ?>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="master.css">
</head>

<body class=<?php echo '"' . $class . '"' ?>>

    <div id="bigR">
        <div id="title">
            <?php echo $title ?>
        </div>
        <div id="desc">
            TURN THE VOLUME UP
        </div>
    </div>

    <div id="playlist">

        <?php include("parse.php"); ?>

    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">

        $('.click').click(function() {
            if (this.innerText) {
                window.open("https://www.youtube.com/results?search_query=" + encodeURIComponent(this.innerText), '_blank');
            }
        });
    </script>

</body>

</html>
