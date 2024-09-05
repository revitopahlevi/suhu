<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature and Relay Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .temp-display {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .relay-status {
            font-size: 18px;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .relay-status.on {
            background-color: #4CAF50;
            color: white;
        }

        .relay-status.off {
            background-color: #f44336;
            color: white;
        }

        .refresh-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .refresh-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature and Relay Status</h1>
        <div class="temp-display">Temperature 1: <span id="temp1"></span> °C</div>
        <div class="temp-display">Temperature 2: <span id="temp2"></span> °C</div>
        <div class="relay-status">Relay Status: <span  id="relayStatus"></span></div>
        <button class="refresh-button" id="fetchButton">Refresh</button>
    </div>

    <script src="js/main.js"></script>
</body>
</html>