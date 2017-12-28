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

    <div id="bg" class=<?php echo '"' . $class . '"' ?>><?php echo $title; ?></div>
    
    <div class="nav">
        <a href="..">yopox</a>
    </div>

    <div id="playlist">
        <table>
            <?php include("parse.php"); ?>
        </table>
    </div>
        

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">

        $('tr').click(function() {
            if (this.innerText) {
                window.open("https://www.youtube.com/results?search_query=" + encodeURIComponent(this.innerText), '_blank');
            }
        });
    </script>

</body>

</html>
