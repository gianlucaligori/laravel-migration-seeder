<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stazione dei viaggi nel tempo Boolean</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Stazione dei viaggi nel tempo Boolean</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Treno:</th>
                    <th>In partenza da:</th>
                    <th>Del giorno (partenza):</th>
                    <th>In arrivo a:</th>
                    <th>Del giorno (arrivo):</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_date }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>


</html>
