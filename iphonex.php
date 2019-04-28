<!DOCTYPE html>
<html>

<head>
    <title> Iphone X</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css\mobile.css">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    require_once("config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM `products` WHERE `products`.`Name` = 'Iphone XS max'";

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
            <img class="home-img" src="img\x1.jpg">
            <img class="home-img" src="img\x2.jpg">
            <img class="home-img" src="img\x3.jpg">

            <center>
                <h1>Specification</h1>
                <table class="specs" width="604" border="0" cellpadding="0" cellspacing="0">
                    <colgroup span="3"></colgroup>
                    <tbody>

                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Whats New</th>
                            <td colspan="3" class="fasla RowBG1 specs-value bottom-border-section"><b>Apple iPhone X - 10th
                                    Anniversary Gift! </b><br>
                                <?php
                                echo $row['Description']

                                ?>

                                &nbsp;</td>
                        </tr>


                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="5" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Build</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">OS</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">IOS 11 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Dimensions</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                143.6 x 70.9 x 7.7 mm &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Weight</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                174 g &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">SIM</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Single SIM (Nano-SIM) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Colors
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Space Gray, Silver &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Frequency</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">2G Band</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><b>SIM1:</b> GSM 850 / 900 / 1800 /
                                1900 &nbsp;</td>
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
                                17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 29(700), 30(2300), 34(2000),
                                38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Processor</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">CPU</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Hexa Core (2 x Monsoon + 4 x Mistral)
                                &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Chipset</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Apple A11 Bionic &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">GPU
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Apple GPU (3-core graphics) &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="5" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Technology</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Super AMOLED capacitive touchscreen,
                                16M colors, Multitouch &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Size</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                5.8 Inches &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Resolution</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                1125 x 2436 Pixels (~463 PPI) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Protection</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Scratch-resistant glass &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra
                                Features</th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Dolby Vision/HDR10 compliant, Wide color gamut display, 3D Touch display, True-tone display
                                &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="2" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Memory</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Built-in</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><b>64GB Built-in, 3GB RAM</b> &nbsp;
                            </td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Card
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                No &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Camera</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Main</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Dual 12 MP, autofocus, Quad-LED (dual
                                tone) flash &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Features</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                f/1.8 &amp; f/2.4, phase detection, OIS, 2x optical zoom, Geo-tagging, simultaneous 4K video and
                                8MP image recording, touch focus, face/smile detection, HDR (photo/panorama), Video
                                (2160p@24/30/60fps, 1080p@30/60/120/240fps) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Front
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                7 MP, f/2.2, 1080p@30fps, 720p@240fps, face detection, HDR, panorama &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="6" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Connectivity</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">WLAN</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Wi-Fi 802.11 a/b/g/n/ac, dual-band,
                                hotspot &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Bluetooth</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                v5.0 with A2DP, LE &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">GPS</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Yes + A-GPS support, &amp; GLONASS, BDS, GALILEO &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">USB</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                v3.0, reversible connector &nbsp;</td>
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
                                <font color="#000077"><b>GPRS</b></font>, Edge, 3G HSPA, 4G LTE-A, EV-DO Rev.A 3.1 Mbps &nbsp;
                            </td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="7" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Features</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Sensors</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Accelerometer, Face ID, Barometer,
                                Compass, Gyro, Proximity &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Audio</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Lightning to 3.5 mm headphone jack adapter, MP3/WAV/AAX+/AIFF/Apple Lossless player, MP4/H.264
                                player, Speaker Phone with stereo speakers &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Browser</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                HTML5 (Safari) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Messaging</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                iMessage, SMS (threaded view), MMS, Email, Push Email &nbsp;</td>
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
                                Active noise cancellation with dedicated mic, IP67 certified - dust and water resistant, Siri
                                natural language commands and dictation, Water resistant up to 1 meter and 30 minutes, iCloud
                                service, Apple Pay (Visa, MasterCard, AMEX certified), Google Maps, Audio/video/photo editor,
                                Apple Pay + Visa, MasterCard, AMEX certified), Waterproof, Voice memo/command/dial, Document
                                editor &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="4" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Battery</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Capacity</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">2716 mAh (Li-Ion Non removable)
                                &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Talktime</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                up to 21 hrs &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Musicplay</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                up to 60 hrs &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section"></th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                - Fast battery charging: 50% in 30 min, Qi wireless charging
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">
                                <h2 class="hdngArial" style="padding:0px; margin:0px; display:inline;">Price</h2>
                            </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Price in
                                Rs: <strong>174,999</strong> &nbsp;&nbsp;&nbsp;Price in USD: <strong>$1515</strong>
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">Ratings </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Average
                                Rating is <strong>4.6 stars</strong> - based on <strong>285</strong> user reviews.
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