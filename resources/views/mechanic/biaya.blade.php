@extends('mechanic.header')

@section('title', 'Mechanic - ACC Antrian')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi/div>
    <form method="POST" action="">
        @csrf

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Sparepart</th>
                    <th>Stok</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Checklist</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($spareparts as $sparepart) --}}
                    <tr>
                        {{-- <td>{{ $sparepart->nama }}</td> --}}
                        {{-- <td>{{ $sparepart->stok }}</td> --}}
                        <td>
                            <input type="number" name="jumlah[]" min="0" value="0">
                            <input type="hidden" name="harga[]" value="">
                        </td>
                        <td class="harga-sparepart">0</td>
                        <td><input type="checkbox" name="sparepart_id[]" value=""></td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>

        <div class="form-group">
            <label for="total_harga">Total Harga:</label>
            <input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
    // Menghitung harga saat jumlah berubah
    $(document).on('input', 'input[name^="jumlah"]', function () {
        var index = $(this).closest('tr').index();
        var harga = parseFloat($('input[name="harga[]"]').eq(index).val());
        var jumlah = parseFloat($(this).val());

        var subtotal = harga * jumlah;
        $('td.harga-sparepart').eq(index).text(subtotal.toFixed(2));

        var total = 0;
        $('td.harga-sparepart').each(function () {
            total += parseFloat($(this).text());
        });
        $('#total_harga').val(total.toFixed(2));
    });
</script>