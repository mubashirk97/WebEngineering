<!DOCTYPE html>
<html>

<head>
    <title> LG G6</title>
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

    $sql = "SELECT * FROM `products` WHERE `products`.`Name` = 'Lg g6'";

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

            <img class="home-img" src="img\g61.jpg">
            <img class="home-img" src="img\g62.jpg">
            <img class="home-img" src="img\g63.jpg">

            <center>
                <h1>Specification</h1>
                <table class="specs" width="604" border="0" cellpadding="0" cellspacing="0">
                    <colgroup span="3"></colgroup>
                    <tbody>

                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Whats New</th>
                            <td colspan="3" class="fasla RowBG1 specs-value bottom-border-section"><b>LG G6 - The Visionary
                                    Product! </b><br>
                                <?php
                                echo $row['Description']

                                ?>
                                &nbsp;</td>
                        </tr>


                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="6" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Build</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">OS</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Android OS, v7.0 (Nougat) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">UI</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                LG UX 6.0 UI &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Dimensions</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                148.9 x 71.9 x 7.9 mm &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Weight</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                163 g &nbsp;</td>
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
                                Astro Black, Ice Platinum, Terra Gold, Marine Blue, Mystic White, Raspberry Rose, Moroccan Blue,
                                Lavender Violet &nbsp;</td>
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
                                HSDPA 850 / 900 / 1900 / 2100 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">4G Band
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                LTE &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Processor</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">CPU</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Quad-core (2 x 2.35 GHz Kryo + 2 x
                                1.6 GHz Kryo) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Chipset</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Qualcomm MSM8996 Snapdragon 821 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">GPU
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Adreno 530 &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="5" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Technology</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">IPS LCD capacitive touchscreen, 16M
                                colors, Multitouch &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Size</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                5.7 Inches &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Resolution</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                1440 x 2880 pixels (~564 PPI pixel density) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Protection</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                Corning Gorilla Glass 3 &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra
                                Features</th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                Dolby Vision/HDR10 compliant, Always-on display, LG UX 6.0 UI &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="2" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Memory</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Built-in</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">32/64/128GB Built-in, 4GB RAM &nbsp;
                            </td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Card
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                MicroSD Card (Support up t0 256GB) (dedicated slot) &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="3" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Camera</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Main</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Dual (f/1.8, OIS, 3-axis) + 13 MP
                                (f/2.4), laser auto-focus, LED flash &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Features</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                3-axis OIS, Geo-tagging, touch focus, face detection, HDR, Video (2160p@30fps, 1080p@30/60fps,
                                HDR, 24-bit/192kHz stereo sound rec) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Front
                            </th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                5 MP, f/2.2, 18mm, Video (1080p@30fps) &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="7" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Connectivity</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">WLAN</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Wi-Fi 802.11 a/b/g/n/ac, dual-band,
                                Wi-Fi Direct, DLNA, hotspot &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Bluetooth</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                v4.2 with A2DP, LE, EDR, aptX HD &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">GPS</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                A-GPS support &amp; Glonass &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Radio</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                FM radio (market dependent) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">USB</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                3.1, Type-C 1.0 reversible connector, USB On-The-Go &nbsp;</td>
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
                                <font color="#000077"><b>GPRS</b></font>, <font color="#000077"><b>EDGE</b></font>, 3G (HSPA
                                42.2/5.76 Mbps), 4G (LTE-A (3CA) Cat12 600/150 Mbps) &nbsp;
                            </td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="7" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Features</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Sensors</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Accelerometer, gyro, proximity,
                                compass, barometer, color spectrum, Fingerprint (rear-mounted) &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Audio</th>
                            <td colspan="2" class="fasla specs-value bottom-border">
                                3.5mm Audio Jack, Speaker Phone &nbsp;</td>
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
                                Front/back glass (Gorilla Glass 3/5) + aluminum frame, IP68 certified - dust/water proof over
                                1.5 meter and 30 minutes, MIL-STD-810G compliant, Active noise cancellation with dedicated mic,
                                Document video/editor &nbsp;</td>
                        </tr>

                        <!--Main Category-->
                        <tr class="RowBG2">
                            <th rowspan="2" scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Battery</th>
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Capacity</th>
                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">(Li-Po Non removable), 3300 mAh
                                &nbsp;</td>
                        </tr>


                        <tr class="RowBG1">
                            <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section"></th>
                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                - Fast battery charging: 50% in 30 min (Quick Charge 3.0)
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">
                                <h2 class="hdngArial" style="padding:0px; margin:0px; display:inline;">Price</h2>
                            </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Price in
                                Rs: <strong>55,900</strong> &nbsp;&nbsp;&nbsp;Price in USD: <strong>$484</strong>
                                &nbsp;</td>
                        </tr>
                        <tr class="RowBG2">
                            <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">Ratings </th>
                            <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Average
                                Rating is <strong>5 stars</strong> - based on <strong>64</strong> user reviews.
                                &nbsp;</td>
                        </tr>

                    <?php

                }
                ?>
                </tbody>
            </table>
        </center>
    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>