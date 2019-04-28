<!DOCTYPE html>
<html>

<head>
    <title> Samsung Galaxy S10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\mobile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    require_once("config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM `products` WHERE `products`.`Name` = 'Samsung Galaxy s10 Plus'";

    $result = mysqli_query($connection, $sql);
    //(WLA8n^YIdLcAVERorY3
    ?>
</head>

<body>
    <?php
    include_once("header.php");
    ?>

    <div class="main-panel">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <h1> <?php
                    echo $row['Name']

                    ?></h1>

            <img class="home-img" src="img\s101.jpg">
            <img class="home-img" src="img\s102.jpg">
            <img class="home-img" src="img\s103.jpg">


            <center>
                <h1>Specification</h1>
                <table class="specs" width="604" border="0" cellpadding="0" cellspacing="0">
                    <colgroup span="3"></colgroup>
                    <tbody>

                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Whats New</th>
                            <td colspan="3" class="fasla RowBG1 specs-value bottom-border-section"><b>Samsung Galaxy S10 - 10th
                                    Anniversary Celebration Gift! </b><br>
                                <?php
                                echo $row['Description']

                                ?>
                                &nbsp;</td>
                        </tr>


                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="6" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Build</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">OS</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Android 9.0 (Pie) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">UI</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                One UI &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Dimensions</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                149.9 x 70.4 x 7.8 mm &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Weight</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                157 g &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">SIM</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Hybrid Dual SIM, Dual Standby, (Nano-SIM) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Colors
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Prism White, Prism Black, Prism Green, Prism Blue, Canary Yellow, Flamingo Pink &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Frequency</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">2G Band</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><b>SIM1:</b> GSM 850 / 900 / 1800 /
                                1900<br><b>SIM2:</b> GSM 850 / 900 / 1800 / 1900 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">3G Band</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">4G Band
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700),
                                17(700),
                                18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300),
                                41(2500),
                                66(1700/2100) &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Processor</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">CPU</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Octa-core (2 x 2.7 GHz Mongoose M4 +
                                2 x 2.3
                                GHz Cortex-A75 + 4 x 1.9 GHz Cortex-A55) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Chipset</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Exynos 9820 Octa (8 nm) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">GPU
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Mali-G76 MP12 &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="5" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Technology</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Dynamic AMOLED capacitive
                                touchscreen, 16M
                                colors, Multitouch &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Size</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                6.1 Inches &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Resolution</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                1440 x 3040 Pixels (~551 PPI) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Protection</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Corning Gorilla Glass 6 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra
                                Features
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                HDR10, Always-on display &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="2" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Memory</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Built-in</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">128GB Built-in, 8GB RAM &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Card
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                microSD Card, (supports upto 512GB) (uses SIM 2 slot) - dual SIM model only &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Camera</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Main</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Triple Camera:12 MP, f/1.5-2.4, 26mm
                                (wide),
                                1/2.55", Dual Pixel PDAF, OIS + 12 MP, f/2.4, 52mm (telephoto), 1/3.6", AF, OIS, 2x optical zoom
                                + 16
                                MP, f/2.2, 12mm (ultrawide), LED Flash &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Features</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                2x optical zoom, OIS, Geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
                                face/smile detection, Auto HDR, panorama, Video (2160p@60fps, 1080p@240fps, 720p@960fps, HDR,
                                dual-video
                                rec.)
                                &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Front
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                10 MP, f/1.9, Dual Pixel PDAF, Dual video call, Auto-HDR, Video (2160p@30fps, 1080p@30fps)
                                &nbsp;</td>
                        </tr>

                        <tr class="RowBG2">
                            <th rowspan="6" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Connectivity</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">WLAN</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Wi-Fi 802.11 a/b/g/n/ac, dual-band,
                                Wi-Fi
                                Direct, hotspot &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Bluetooth</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                v5.0 with A2DP, LE &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">GPS</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Yes + A-GPS support &amp; Glonass, BDS, GALILEO &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">USB</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                3.1, Type-C 1.0 reversible connector &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">NFC</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Yes &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Data
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                <font color="#000077"><b>GPRS</b></font>, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G (LTE-A (7CA) Cat20
                                2000/150
                                Mbps) &nbsp;
                            </td>
                        </tr>

                        <tr class="RowBG2">
                            <th rowspan="7" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Features</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Sensors</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Accelerometer, Compass, Fingerprint
                                (under
                                display), Gyro, HeartRate, Proximity, SpO2 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Audio</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                3.5mm Audio Jack, MP4/DivX/XviD/WMV/H.265 player, MP3/WAV/WMA/eAAC+/FLAC player, Speaker Phone
                                &nbsp;
                            </td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Browser</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                HTML5 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Messaging</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                SMS(threaded view), MMS, Email, Push Mail, IM &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Games</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Built-in + Downloadable &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Torch</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Yes &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Active noise cancellation with dedicated mic, ANT+, Bixby natural language commands and
                                dictation,
                                Samsung DeX (desktop experience support), Document viewer, Photo/video editor &nbsp;</td>
                        </tr>

                        <tr class="RowBG2">
                            <th rowspan="2" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Battery</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Capacity</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">(Li-ion Non removable), 3400 mAh
                                &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section"></th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                - Fast battery charging 15W, Fast wireless charging 15W, Power bank/Reverse wireless charging 9W
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">
                                <h2 class="hdngArial" style="padding:0px; margin:0px; display:inline;">Price</h2>
                            </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Price in
                                Rs:
                                <strong>164,999</strong> &nbsp;&nbsp;&nbsp;Price in USD: <strong>$1429</strong>
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">
                                Ratings </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Average
                                Rating is
                                <strong>3 stars</strong> - based on <strong>15</strong> user reviews.
                                &nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            <?php

        }
        ?>
        </center>
    </div>
    <footer id="footer">
        <p id="copyright">&copy All Rights Reserved | The E-commerce store </h3>
    </footer>

</body>

</html>