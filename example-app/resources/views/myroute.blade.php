<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="w3.css" />
    <title>Multiplication Table</title>
</head>
<style>
    body {
        background-image: url(https://i.pinimg.com/originals/1d/a2/1b/1da21b0bacc4256dffa23680b21c9350.gif);
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin-top: 50px;
    }

    h1,h2 {
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        font-size: 80px;
    }
    h2{
        font-size: 40px;
    }

    input {
        padding: 5px;
    }

    button {
        padding: 5px;
    }
</style>

<body>
    <center>

        <h1>Multiplication Table</h1>
        <h2>Insert Number</h2>
        <form method="post" action="/my-route">
            @csrf
            <input type="number" name="MultiNum">

            <button type = "submit">Next</button>

        </form>
    </center>
</body>

</html>
