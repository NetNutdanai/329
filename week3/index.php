<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="w3.css" />
</head>

<body>
    <center>
        <?php $multi_x = 2;
        $length = 24; ?>
        <header>
            <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        </header>
        <div class="table">
            <?php
            if (!empty($multi_x)) {
                for ($i = 1; $i <= $length; $i++) {
                    echo "<h2>";
                    echo "$multi_x x {$i} = " . ($multi_x * $i) . "<br/>";
                    echo "</h2>";
                }
            }
            ?>
        </div>
    </center>
</body>

</html>