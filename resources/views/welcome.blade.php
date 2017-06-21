<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <form method="post" style="width: 250px;text-align: center;margin:0 auto;">
        {{ csrf_field() }}
        <label>Enter Country:</label>
        <input type="text" name="country" class="form-control">
        <br>
        <input type="submit" name="send" class="btn btn-primary" value="Check">
    </form>
    <br><br>
    @if(isset($result))
        <div class="my_weather" style="width: 250px;margin:0 auto;">
            <ul  style="list-style: none; font-weight: bold;padding-left: 0px; font-size: 18px;">
                <li>Country: &nbsp;<span style="color: #337ab7;">{{ $result['country'] }}</span></li>
                <li>Temp: &nbsp;<span style="color: #337ab7;">{{ $result['temp']-273 }}<sup> o</sup></span></li>
            </ul>
        </div>
    @endif
</body>
</html>