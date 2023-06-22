<!DOCTYPE html>
<html>
<head>
    <title>Dealer - Transaksi Bulan {{ $month }}</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            height: 100px;
        }

        .header h1 {
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid black;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
    <!-- <img src="{{ public_path('/img/gambar.jpg') }}" alt="Logo"> -->
        <h1>Dealer - Transaksi Bulan {{ $month }}</h1>
        <h2>Pada Tahun 2023</h2>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Dealer</th>
                <th>Jenis Kendaraan</th>
                <th>Keluhan</th>
                <th>No. Plat</th>
                <th>Tanggal Servis</th>
                <th>Durasi</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($services as $index => $service)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $service->user->name }}</td>
        <td>{{ $service->dealer->dealer_name }}</td>
        <td>{{ $service->vehicle_name }}</td>
        <td>{{ $service->problem }}</td>
        <td>{{ $service->plat_num }}</td>
        <td>{{ $service->plan_date }}</td>
        <td>{{ $service->time }}</td>
        <td>{{ $service->price }}</td>

    </tr>
@endforeach
        </tbody>
    </table>
</body>
</html>