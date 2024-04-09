<!DOCTYPE html>
    <html class="color">
        <head>
            <title>fomrulad</title>
            <meta charset="utf-8">
            <link href="SheetStyle.css" rel="stylesheet">
        </head>
        <body>
                <h1>Super Auto 10/10 poleca magda gessler</h1>
                <p class="right_header"><img src="resources/hehe.jpg" width="400"></p>
                <p class="left_header"><img src="resources/hehe.jpg" width="400"></p>
                <img src="resources/defender.png" width="400">
                <form action="morbius.php" method="post">
                    <p>Marka: <input type="text" name="mark" /></p>

                    <p>Model: <input type="text" name="mod" /></p>

                    <p>Rozmiar (w centymetrach): <input type="number" name="size" /></p>

                    <p>Paliwo:</p>
                        <p><input type="radio" name="fuel" value="benzyna" />Benzyna</p>
                        <p><input type="radio" name="fuel" value="diesel" />Diesel</p>
                        <p><input type="radio" name="fuel" value="elektrk" />Elektryk</p>
                        <p><input type="radio" name="fuel" value="wodor" />Wodór</p>

                    <p>Kolor auta:</p>
                        <p>
                            <select name="kolor">
                                <option value="czerwony">Czerwony</option>
                                <option value="zielony">Zielony</option>
                                <option value="niebieski">Niebieski</option>
                            </select>
                        </p>
                    <p><input type="checkbox" name="abs" value="abs" />ABS</p>
                    <p><input type="checkbox" name="klima" value="klima" />Klimatyzacja</p>
                    <p><input type="checkbox" name="park" value="park" />Czujnik Parkowania</p>
                    <p><input type="submit" name="submit" value="submit" /></p>
                </form>
                <?php
                 if (isset( $_POST['mark'])){
                    echo "Marka Pojazdu: ";
                    echo $_POST["mark"];
                 }
                ?>
        </body>
    </html>