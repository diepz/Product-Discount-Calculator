<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 31px;
            background: white;
            border: 2px solid navy;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        .data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        .button input{
            float: left;
            margin-bottom: .5em;
        }
        .button input:hover {
            color: darkblue;
        }
        br{
            clear: left;
        }
    </style>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
    <h1>Product Discount Calculator</h1>
    <br>
<form method="post" action="display_discount.php">
    <div class="data">

        <label>Product Description:</label>

        <input type="text" name="pd"  size="30"><br>
        <label>List Price:</label>

        <input type="text" name="lp" size="30"><br>
        <label>Discount Percent:</label>

        <input type="text" name="dp" size="30"><br>
    </div>
    <div class="button">
        <label>&nbsp</label>
        <input type="submit" value="Calculte Discount" class="ipt_login">
    </div>


</form>

</div>
</body>
</html>