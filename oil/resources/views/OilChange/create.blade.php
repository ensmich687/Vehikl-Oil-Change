<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oil Change Result</title>
    <style>
        .wrapper {
            background-color: whitesmoke;
            list-style-type: none;
            padding: 0;
            border-radius: 3px;
        }

        .form-row {
            display: flex;
            justify-content: flex-end;
            padding: .5em;
        }

        .form-row>label {
            padding: .5em 1em .5em 0;
        }

        .form-row>input {
            flex: 1;
        }

        .form-row>input,
        .form-row>button {
            padding: .5em;
        }

        .form-row>button {
            background: gray;
            color: white;
            border: 0;
        }
    </style>
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
        <ul class="wrapper">
            <li class="form-row">
                <label for="currentOdometer">Current Odometer</label>
                <input id="currentOdometer" type="number" name="currentOdometer" value="{{ old('currentOdometer') }}"
                    required>
            </li>
            <li class="form-row">
                <label for="previousDate">Previous Date of Oil Change</label>
                <input id="previousDate" type="date" name="previousDate" value="{{ old('previousDate') }}" required>
            </li>
            <li class="form-row">
                <label for="previousOdometer">Previous Odometer</label>
                <input id="previousOdometer" type="number" name="previousOdometer" value="{{ old('previousOdometer') }}"
                    required>
            </li>
            <li class="form-row">
                <button type="submit">Create</button>
            </li>
        </ul>

    </form>
</body>

</html>