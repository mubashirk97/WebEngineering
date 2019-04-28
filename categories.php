<!DOCTYPE html>
<html>

<head>
    <title>Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\stylescategory.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php
    require_once("config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM `products`";

    $result = mysqli_query($connection, $sql);
    //(WLA8n^YIdLcAVERorY3
    ?>

</head>

<body>

    <?php
    include_once("header.php");
    ?>
    <div class="main-panel">
        <h3 id="headings"> Mobile Phones </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <a class="link" href="iphonex.php">
                    <img class="home-img" src="img\iphone.png">
                    <h4 class="h4">Iphone 10</h4>
                </a>
            </div>

            <div class="home-div">
                <a class="link" href="lg g6.php">
                    <img class="home-img" src="img\lg.png">
                    <h4 class="h4">LG g6</h4>
                </a>
            </div>

            <div class="home-div">
                <a class="link" href="s10.php">
                    <img class="home-img" src="img\s10.png">
                    <h4 class="h4">Samsung Galaxy s10+</h4>
                </a>
            </div>
        </div>

        <h3 id="headings"> Laptops </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\dell.png">
                <h4 class="h4">Dell latitude e5430</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\msi.png">
                <h4 class="h4">MSI ge70 Apache pro</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\hp.png">
                <h4 class="h4">Hp pavillion 15</h4>
            </div>
        </div>

        <h3 id="headings">LCDs & LEDs </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\jvc.png">
                <h4 class="h4">JVC LED</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\sony.png">
                <h4 class="h4">SONY LED</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\TV.jpg">
                <h4 class="h4">AOC LCD</h4>
            </div>
        </div>

        <h3 id="headings"> Smart Watches </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\sgear.jpg">
                <h4 class="h4">Samsung Gear</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\apple.jpg">
                <h4 class="h4">Apple Watch</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\sonyw.png">
                <h4 class="h4">Sony Watch</h4>
            </div>
        </div>

        <h3 id="headings"> Watches </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\gold.jpg">
                <h4 class="h4">Rolex Gold</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\rolex.jpg">
                <h4 class="h4">Rolex Crow clipart black</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\rado.jpg">
                <h4 class="h4">Rado R309297 for Men</h4>
            </div>
        </div>

        <h3 id="headings"> toys </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\6.jpg">
                <h4 class="h4">Kids Piano</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\rccar.jpg">
                <h4 class="h4">Rc car for kids</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\rcheli.jpg">
                <h4 class="h4">RC helicopter</h4>
            </div>
        </div>

        <h3 id="headings"> Shirts for men </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\7.jpg">
                <h4 class="h4">Irregular Shirt Men</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\bravo.jpg">
                <h4 class="h4">Bravo men shirt</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\eee.jpg">
                <h4 class="h4">Ericdress Lapel Long Sleeve Floral</h4>
            </div>
        </div>

        <h3 id="headings"> Shirts for women </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\8.jpg">
                <h4 class="h4">Cotton Women Shirt</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\us.jpg">
                <h4 class="h4">U.S. Fox Cotton Ladies White Shirt</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\women.jpg">
                <h4 class="h4">WOMEN RAYON LONG SLEEVE</h4>
            </div>
        </div>


        <h3 id="headings"> Shoes </h3>
        <div class="jumbotron" id="jumb">

            <div class="home-div">
                <img class="home-img" src="img\shoesa.png">
                <h4 class="h4">Running Shoes</h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\nike.jpg">
                <h4 class="h4">Nike Sneaker </h4>
            </div>

            <div class="home-div">
                <img class="home-img" src="img\foot.png">
                <h4 class="h4">Football boots</h4>
            </div>
        </div>
    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>