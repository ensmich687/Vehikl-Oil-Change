<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oil Change Result</title>
</head>

<body>
    <h1>Add new oil change</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('OilChange.store') }}">
        @csrf
        <label for="currentOdometer">Current Odometer</label>
        <input id="currentOdometer" type="number" name="currentOdometer" value="{{ old('currentOdometer') }}" required>

        <label for="previousDate">Previous Date of Oil Change</label>
        <input id="previousDate" type="date" name="previousDate" value="{{ old('previousDate') }}" required>

        <label for="previousOdometer">Previous Odometer</label>
        <input id="previousOdometer" type="number" name="previousOdometer" value="{{ old('previousOdometer') }}"
            required>

        <button type="submit">Create</button>
    </form>
</body>

</html>