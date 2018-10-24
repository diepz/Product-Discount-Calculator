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
    </style>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <?php
$discount_amount = 0;
$discount_price = 0;
$usd = "$";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pd = $_POST["pd"];
    $lp = $_POST["lp"];
    $dp = $_POST["dp"];
    $discount_amount = $lp * $dp * 0.1;
    $discount_price = $lp - $discount_amount;
    }
    ?>
  <div class="content">
<form method="post">
        <h1>Product Discount Calculator</h1>
        <br>
    <div class="data">
        <label>Product Description:</label>
        <?php echo $pd  ?><br>
        <label>Price:</label>
        <?php echo $usd. $lp ?><br>
        <label>Discount Percent:</label>
        <?php echo $dp ?><br>
        <label>Discount Amount:</label>
        <?php echo $usd. $discount_amount ?><br>
        <label>Discount price:</label>
        <?php echo $usd. $discount_price ?><br>
        <br>

    </div>


</form>
  </div>

</body>
</html>