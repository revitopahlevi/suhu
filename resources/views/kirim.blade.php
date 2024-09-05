<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kirim</title>
</head>
<body>
    <form action="{{ url('api/kirimdata') }}" method="post">
        @csrf
        <label for="suhu1">suhu1</label>
        <input type="number" name="suhu1" id="suhu2">
        <label for="suhu2">suhu1</label>
        <input type="number" name="suhu2" id="suhu2">
        <label for="relay">suhu1</label>
        <input type="text" name="Relay" id="relay">
        <button type="submit">kirim</button>
    </form>
</body>
</html>