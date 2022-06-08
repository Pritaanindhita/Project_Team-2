@extends('layout/main')

@section('konten')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div class="tabel-inspeksi">
    <h4>Tabel Hasil Inspeksi</h4>
    <table id="pekerja" class="table table-bordered table-responsive mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>NPP</th>
                <th>Nama</th>
                <th>Bagian</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $('#pekerja').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": "http://192.168.5.4:8000/pekerja",
            "type": "GET"
        },
        "columns": [{
                "data": null,
                "sortable": false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                "data": "NPPPekerja"
            },
            {
                "data": "NamaPekerja"
            },
            {
                "data": "Bagian"
            },

        ]
    });
</script>

@endsection