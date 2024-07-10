<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Treni</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Dettagli Treni</h1>
    <table class="table table-dark container">
        <tr>
            <th>Azienda</th>
            <td>{{ $treno->azienda }}</td>
        </tr>
        <tr>
            <th>Stazione di Partenza</th>
            <td>{{ $treno->stazione_di_partenza }}</td>
        </tr>
        <tr>
            <th>Stazione di Arrivo</th>
            <td>{{ $treno->stazione_di_arrivo }}</td>
        </tr>
        <tr>
            <th>Orario di Partenza</th>
            <td>{{ $treno->orario_di_partenza }}</td>
        </tr>
        <tr>
            <th>Orario di Arrivo</th>
            <td>{{ $treno->orario_di_arrivo }}</td>
        </tr>
        <tr>
            <th>Codice Treno</th>
            <td>{{ $treno->codice_treno }}</td>
        </tr>
        <tr>
            <th>Numero Carrozze</th>
            <td>{{ $treno->numero_carrozze }}</td>
        </tr>
        <tr>
            <th>In Orario</th>
            <td>{{ $treno->in_orario ? 'Si' : 'No' }}</td>
        </tr>
        <tr>
            <th>Cancellato</th>
            <td>{{ $treno->cancellato ? 'Si' : 'No' }}</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-secondary">Ritorna indietro</a>
    </div>
</body>

</html>
