<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oil Change Result</title>
</head>

<body>

    <h1>Result</h1>
    <p>Current Odometer: {{ $oilChange->currentOdometer }}</p>
    <p>Previous Odometer: {{ $oilChange->previousOdometer }}</p>
    <p>Previous Oil Change Date: {{ $oilChange->previousDate }}</p>
    @if (($oilChange->currentOdometer - $oilChange->previousOdometer) > 5000 || $oilChange->previousDate->isAfter(now()->addMonths(6)))
        <p>The car needs an oil change</p>
    @else
        <p>The car is not due for an oil change</p>
    @endif

    <form action="{{ route('OilChange.create') }}" method="get">
        <button type="submit">Input another Oil Change</button>
    </form>

</body>

</html>