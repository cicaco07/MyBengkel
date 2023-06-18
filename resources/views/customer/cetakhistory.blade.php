<!DOCTYPE html>
<html>
<head>
    <title>Print History Servis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <style type="text/css">
        table tr td,
        table tr th{
        font-size: 15pt;
        }
        .garis {
            border-top: 0.5px solid black;
        }

        table {
            border-collapse: collapse;
        }
        /* table, th, td {
            border: 1px solid black;
        } */
        /* th, td {
            padding: 10px;
        } */
        td{
            padding: 7px
        }
        th {
            background-color: rgb(11, 167, 250);
            color: white;
        }
        .tdservis{
            padding: 10px;
        }
        </style>

        <center>
            <h2>Servis MyBengkel</h2>
        </center>
        <hr class="border border-primary border-3 opacity-75">
        <table>
            <thead>
                <tr>
                    <td>ID Service</td>
                    <td class=>:</td>
                    <td> {{$service->id}}</td>
                </tr>
                <tr>
                    <td>Dealer</td>
                    <td class=>:</td>
                    <td> {{$service->dealer->dealer_name}}</td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td class=>:</td>
                    <td> {{$service->dealer->company}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class=>:</td>
                    <td> {{$service->dealer->dealer_address}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td> {{$service->plan_date}}</td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td>:</td>
                    <td> {{$service->time}}</td>
                </tr>
            </thead>
        </table>
        <br>
        <div class="garis"></div>
        <h3>Detail Antrian Servis</h3>
        <table>
            <thead>
                <tr>
                    <td >Nama Customer</td>
                    <td >:</td>
                    <td> {{$service->user->name}}</td>
                </tr>
                <tr>
                    <td >Jenis Kendaraan</td>
                    <td >:</td>
                    <td> {{$service->vehicle_name}}</td>
                </tr>
                <tr>
                    <td>Plat Nomor</td>
                    <td>:</td>
                    <td> {{$service->plat_num}}</td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>:</td>
                    <td> {{$service->problem}}</td>
                </tr>
                <tr>
                    <td>Rekomendasi Servis</td>
                    <td>:</td>
                    <td> {{$service->recommended_service}}</td>
                </tr>
                @if($service->status=='done')
                <tr>
                    <td>Status Antrian</td>
                    <td>:</td>
                    <td> {{$service->status}}</td>
                </tr>
                @endif
            </thead>
        </table>
        <br>
        <div class="garis"></div>
        <h3>Biaya Servis</h3>
        <table>
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="tdservis"><b>Sparepart</b></td>
                    <td></td>
                    <td></td>
                    <td class="tdservis"><b>Jumlah</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="tdservis"><b>Subtotal</b></td>
                </tr>
                @foreach ($spareparts as $sparepart)
                <tr>
                    <td></td>
                    <td></td>
                    <td class="tdservis">{{ $sparepart->item_name }}</td>
                    <td></td>
                    <td></td>
                    <td class="tdservis">{{ $sparepart->pivot->quantity }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="tdservis">{{ $sparepart->pivot->subtotal}}</td>
                </tr>
                @endforeach
                
                <tr>
                    <td></td>
                    <td class="tdservis"><b>Total Biaya</b></td>
                    <td></td>
                    <td></td>
                    <td class="tdservis"><b></b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="tdservis">{{$service->price}}</td>
                </tr>
            </thead>
        </table>
</body>
</html>