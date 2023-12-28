<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="{{ asset('css/page.css') }}" />
</head>
<style>
    body {
        background-image: url(https://i.pinimg.com/originals/53/ad/0c/53ad0cc3373bbe0ea51dd878241952c6.gif);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .table {
        margin-top: 10px;
        margin-bottom: 20px;
        width: 300px;
        height: 450px;
        border: 5px solid white;
        overflow: auto;
        color: white;
        background-image: url(https://i.pinimg.com/564x/e5/5b/c1/e55bc1c29d7c290b7ab395072c83da72.jpg);
        background-position: center;
        background-size: cover;
    }

    .Header {
        height: 70px;
        width: 400px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 40px;
    }

    h1 {
        font-family:
    }

    p {
        font: bold 20px Arial;
        color: #3F4445;
    }

    input {
        padding: 5px;
        margin-bottom: 10px;
    }

    button {
        padding: 5px;
    }
</style>

<body>
    <center>
        <?php $MultiNum;
        $length = 24; ?>
        <div class = "Header">
            <h1>ตารางสูตรคูณแม่ <?php echo $MultiNum; ?></h1>
        </div>
        <div class="table">
            <?php
            if (!empty($MultiNum)) {
                for ($i = 1; $i <= $length; $i++) {
                    echo '<p>';
                    echo "$MultiNum x {$i} = " . $MultiNum * $i . '<br/>';
                    echo '</p>';
                }
            }
            ?>
        </div>
        <form method="post" action="/my-route">
            @csrf
            <input type="number" name="MultiNum">
            <button type = "submit">Submit</button>
        </form>
        <form method="post" action="/my-page">
            @csrf
            <button type = "submit">Back</button>
        </form>
    </center>
</body>

</html>
