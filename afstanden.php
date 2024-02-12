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
        <form>
            <div>
                <label for="waarde">Welke waarde:</label>
                <input type="number">                
            </div>
            <div>
                <label for="currentGrootheid">Welke grootheid: </label>
                <select name="currentGrootheden" id="currentGrootheid">
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
                <label for="gewensteGrootheid">Welke gewenste grootheid: </label>
                <select name="gewensteGrootheden" id="gewensteGrootheid">
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
        <p>Omrekening: </p>
    </div>
</body>
</html>