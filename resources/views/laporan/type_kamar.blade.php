<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>Document</title>
    <style>
        @page {
            margin: 10px;
        }

        body {
            margin: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table tr th {
            border: 1px solid black;
            background: #c5c5c5;
            padding: 5px;
        }

        table tr td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Laporan Data Type Kamar Insitu Hotel</h1>
    <table style="width: 100%;">
        <thead>
            <tr class="table">
                <th scope="col">Type</th>
                <th scope="col">Price / night</th>
                <th scope="col">Charge / guest</th>
                <th style="width: 100px;">Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($type_kamars as $typeKamar)
            <tr class=" table-hover">
                <td><a href="{{url('/typeKamar/'.$typeKamar->id ) }} ">{{ $typeKamar->jenis}}</a> </td>
                <td>{{ $typeKamar->harga}}</td>
                <td>{{ $typeKamar->denda}}</td>
                <td>{{ $typeKamar->keterangan}} </td>
            </tr>
            @empty
            <td colspan="6" class="text-center">No data...</td>
            @endforelse
        </tbody>
    </table>
</body>

</html>
