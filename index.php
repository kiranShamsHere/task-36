<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task - 36</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(47, 6, 48, 0.74);
            font-family: sans-serif;
        }

        div h2 {
            color: #ccc;
            margin-top: -20px;
            margin-bottom: 30px;
        }

        p {
            /* width: 70vmin; */
            font-size: 22px;
            color: #234893;
            text-align: justify;
            text-align-last: center;
            padding: 10px 20px;
            border-radius: 10px;
            margin: auto;
        }

        input {
            height: 30px;
            padding: 8px 20px;
            text-align: center;
            border: none;
            outline: none;
            background-color: #ccc;
            color: #000;
            margin: 20px 10px;
        }
        ::placeholder{
            color: #000;
        }

        input[type="submit"] {
            margin-top: 10px;
            font-size: 18px;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <h2>Character Case Checker</h2>
        <form action="check_case.php" method="post">
            <div>
                <input type="text" placeholder="Write here..." id="inputString" name="inputString" required>
            </div>
            <input type="submit" value="Check Case">
        </form>
    </div>

</body>

</html>