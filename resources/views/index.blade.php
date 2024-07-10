<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Treni in Partenza da Oggi</h1>
    @if ($treni->isEmpty())
        <p>Nessun treno in Partenza Oggi.</p>
    @else
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                    <th>Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treni as $treno)
                    <tr>
                        <td>{{ $treno->azienda }}</td>
                        <td>{{ $treno->stazione_di_partenza }}</td>
                        <td>{{ $treno->stazione_di_arrivo }}</td>
                        <td>{{ $treno->orario_di_partenza }}</td>
                        <td>{{ $treno->orario_di_arrivo }}</td>
                        <td>{{ $treno->codice_treno }}</td>
                        <td>{{ $treno->numero_carrozze }}</td>
                        <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $treno->cancellato ? 'Sì' : 'No' }}</td>
                        <td><a href="{{ route('treni.show', $treno->id) }}">Dettagli</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
