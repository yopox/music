<!DOCTYPE html>
<html>

<?php include("init.php"); ?>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="master.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body class=<?php echo '"' . $class . '"' ?>>

    <div class="playlist">
        <div class='song'>
            <div class='art'>LET'S PARTY</div>
            <div class='tra'>LISTENING TO PLAYLIST <?php echo $title; ?></div>
        </div>
        <div class="flex">
            <?php include("parse.php"); ?>
        </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">

        $('.click').click(function() {
            if (this.innerText) {
                window.open("https://www.youtube.com/results?search_query=" + encodeURIComponent(this.innerText), '_blank');
            }
        });
    </script>

</body>

</html>
