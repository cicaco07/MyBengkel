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

    <h3>Data Transaksi Servis</h3>

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

    <!-- Celah antara dua tabel -->
    <div style="margin-bottom: 40px;"></div>

    <h3>Data Transaksi Sparepart</h3>
    <!-- Tabel Data Transaksi Sparepart -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Service</th>
                <th>Nama Pelanggan</th>
                <th>Nama Dealer</th>
                <th>Nama Sparepart</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0; // Inisialisasi variabel total
                $totalsparepart = 0;
            @endphp
            @foreach ($carts as $index => $cart)
                @php
                    $all = $cart->sparepart->price * $cart->quantity; // Menghitung total
                    $total += $all; // Menambahkan total ke variabel total
                    $totalsparepart += $cart->quantity;
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $cart->service_id }}</td>
                    <td>{{ $cart->service->user->name }}</td>
                    <td>{{ $cart->service->dealer->dealer_name }}</td>
                    <td>{{ $cart->sparepart->item_name }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>{{ $cart->sparepart->price }}</td>
                    <td>{{ $all }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="text-align: center;">
        <h3>Total: {{ $total }}</h3>
        <h3>Total Quantity Sparepart: {{ $totalsparepart }}</h3>
    </div>

</body>
</html>
