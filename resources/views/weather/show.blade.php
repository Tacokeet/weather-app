<!DOCTYPE html>
<html>

<head>
    <title>Weather Information</title>
</head>

<body>
    <h1>Weather Information</h1>
    <h2>{{ $city }}</h2>

    @foreach ($temperatures as $source => $entries)
        <h2>{{ $source }}</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Temperature</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{ $entry['temperature'] }}</td>
                        <td>{{ $entry['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    @endforeach
</body>

</html>
