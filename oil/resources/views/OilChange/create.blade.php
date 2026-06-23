<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oil Change Result</title>
</head>

<body>
    <h1>Add new oil change</h1>

    <form method="POST" action="{{ route('OilChange.store') }}">
        @csrf
        <label for="currentOdmeter">Current Odometer</label>
        <input id="currentOdmeter" type="number" name="currentOdmeter" value="{{ old('currentOdmeter') }}" required>

        <label for="previousDate">Previous Date of Oil Change</label>
        <input id="previousDate" type="date" name="previousDate" value="{{ old('previousDate') }}" required>

        <label for="previousOdmeter">Previous Odometer</label>
        <input id="previousOdmeter" type="number" name="previousOdmeter" value="{{ old('previousOdmeter') }}" required>

        <button type="submit">Create</button>
    </form>
</body>

</html>