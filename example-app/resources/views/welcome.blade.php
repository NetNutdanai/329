
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript 101</title>
</head>
<style>
    body {
        background-color: beige;
        font-family: Arial, sans-serif;
    }

    #content {
        max-width: 900px;
        margin: 30px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    }

    h1 {
        color: #3f3e3e;
    }

    label {
        font-weight: bold;
    }

    button {
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
    }

    #submit {
        background-color: #1dd965;
        color: #fff;
        cursor: pointer;
    }

    #submit:hover {
        background-color: #15a04a;
    }

    #cancle {
        background-color: #e51818;
        color: #fff;
        cursor: pointer;
    }

    #cancle:hover {
        background-color: #961515;
    }

    input {
        width: 200px;
        padding: 8px 10px;
        margin: 8px 0;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        text-align: center;
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #b001b0;
        color: white;
        font-size: 20px;
    }

    td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <div id = "content">
            <h1>ตารางแม่สูตรคูณ</h1>
            <label for="input_number">กรอกตัวเลข</label><br>
            <input type="text" id="input_number" /><br>

            <button id="submit">ยืนยัน</button>
            <button id="cancle">ยกเลิก</button>
            <br>

            <table id="result_table">
                <!-- table will be generated here -->
                <tbody id="result_tbody">
                </tbody>
            </table>
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                let number = $("#input_number").val();
                if (!isNaN(number) && number !== "") {
                    generateTable(number);
                } else {
                    alert('โปรดกรอกค่าตัวเลข')
                }
            });

            $("#cancle").click(function() {
                //location.reload();
                resetTable();
            });
        });

        function generateTable(num) {
            let result = "<tr><th>สูตรคูณแม่ " + num + "</th></tr>"
            for (let i = 1; i <= 24; i++) {
                result += `<tr><td>${num} x ${i} = ${num * i}</td></tr>`
            }
            $('#result_tbody').html(result)
        }

        function resetTable() {
            location.reload();
        }
    </script>
</body>

</html>

{{-- <!doctype html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1>Before</h1>
    <h1 id="myh1">
        <h1>Prepend</h1>Javascript<h1>Append</h1>
    </h1>
    <h1>After</h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <button onclick="myFunction2()">submit my function2</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(10)
            // setInterval(() => {
            //     $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000);
        });

        function myFunction2() {
            // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>")
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 0; i < my_number; i++) {
                my_code_tr += `<tr><td>${i}</td><td>test</td></tr>`
            }
            $('#my_tbody').html(my_code_tr)
        }

        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')

            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);

        }
        console.log("Hello World!")
        let myval;
        console.log(typeof myval);
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3)
        myval3 = myval - myval2;
        console.log(myval3)
        myval3 = myval * myval2;
        console.log(myval3)
        myval3 = myval / myval2;
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>
</body>

</html> --}}

