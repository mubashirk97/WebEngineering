<!DOCTYPE html>
<html>

<head>
    <title>The E-commerce Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php
    require_once("config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM `categories`";

    $result = mysqli_query($connection, $sql);
    //(WLA8n^YIdLcAVERorY3
    ?>


</head>

<body>


    <?php
    include_once("header.php");
    ?>

    <div class="main-panel">
        <h3 id="headings">All Categories </h3>
        <div class="jumbotron" id="jumb">

            <?php
            $count = 1;

            while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <div class="home-div">
                    <img class="home-img" src="img\<?php
                                                    echo  $count . ".jpg";
                                                    ?>">
                    <h4 class="h4">
                        <?php
                        echo $row['Name'];
                        ?>
                    </h4>
                    <p>
                        <?php
                        echo $row['Description'];
                        ?>
                    </p>
                </div>

                <?php
                if ($count % 3 == 0) {
                    ?>

                    <br />

                <?php
            }
            ?>

                <?php
                $count++;
            }
            ?>
        </div>
        <?php
        include_once("footer.php");
        ?>

</body>

</html>