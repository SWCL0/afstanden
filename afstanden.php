<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afstanden Omrekenen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Afstanden omrekenen</h1>
    <div>
        <form action="berekenenAfstanden.php" method="post">
            <div>
                <label for="waarde">Welke waarde:</label>
                <input type="number" name="waarde" id="waarde">                
            </div>
            <div>
                <label for="currentGrootheden">Welke grootheid: </label>
                <select name="currentGrootheden" id="currentGrootheden">
                    <option value="Kilometer">Kilometer</option>
                    <option value="Hectometer">Hectometer</option>
                    <option value="Decameter">Decameter</option>
                    <option value="Meter">Meter</option>
                    <option value="Decimeter">Decimeter</option>
                    <option value="Centimeter">Centimeter</option>
                    <option value="Millimeter">Millimeter</option>
                </select>                
            </div>
            <div>
                <label for="gewensteGrootheden">Welke gewenste grootheid: </label>
                <select name="gewensteGrootheden" id="gewensteGrootheden">
                    <option value="Kilometer">Kilometer</option>
                    <option value="Hectometer">Hectometer</option>
                    <option value="Decameter">Decameter</option>
                    <option value="Meter">Meter</option>
                    <option value="Decimeter">Decimeter</option>
                    <option value="Centimeter">Centimeter</option>
                    <option value="Millimeter">Millimeter</option>
                </select>                
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        <br>
        <div class="berekeningWeergeven">
            <?php
            if (isset($_GET['result'])) {
                $result = $_GET['result'];
                echo "<p>Omrekening: $result</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>