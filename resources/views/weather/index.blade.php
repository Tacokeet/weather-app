<!DOCTYPE html>
<html>

<head>
    <title>Weather Information</title>
</head>

<body>
    <h1>Weather Information</h1>
    <h2>Groningen lat: 53.2194	lon: 6.5665</h2>

    @foreach ($sources as $source => $entries)
        <h2>{{ $source }}</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Temperature</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{ $entry['latitude'] }}</td>
                        <td>{{ $entry['longitude'] }}</td>
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
