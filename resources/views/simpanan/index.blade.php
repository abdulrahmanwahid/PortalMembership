<x-main>

    <head>
        <style>
            body {
                font-family: 'Inter', Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            .table-container {
                width: 80%;
                margin: 20px auto;
                background-color: #fff;
                border-radius: 20px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            h2 {
                text-align: left;
                color: #333;
                font-size: 1.5rem;
                margin: 0;
                padding: 15px;
                background-color: #005ca8;
                color: white;
            }

            .transaction-table {
                width: 100%;
                border-collapse: collapse;
            }

            .header-row {
                background: linear-gradient(to bottom, #003366, #005ca8);
                color: white;
                width: 100%;
                padding: 10px 20px;
            }

            .header-row th {
                padding: 8px;
                text-align: left;
                font-size: 0.9rem;
                border-bottom: 2px solid #fff;
            }

            .header-row .table-title {
                text-align: right;
                font-size: 1.1rem;
            }

            .header-row th img.logo {
                height: 45px;
            }

            .transaction-table thead {
                background-color: #e0e0e0;
            }

            .transaction-table thead th {
                border-bottom: 2px solid #ddd;
            }

            .transaction-table tbody td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: center;
                font-size: 0.9rem;
                background-color: #fff;
            }

            .transaction-table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .transaction-table tbody tr:hover {
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <h3 class="text-center font-weight-bold my-3">Table Simpanan</h3>
    <div class="table-container">
        <table class="transaction-table">
            <thead>

                <tr class="text-center">
                    <th>#</th>
                    <th>Nomor</th>
                    <th>Jenis Simpanan</th>
                    <th>Awal Angsuran</th>
                    <th>Akhir Angsuran</th>
                    <th>Nominal Pengajuan</th>
                    <th>Nominal Disetujui</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($simpanan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nomor }}</td>
                        <td>{{ $data->jenis_simpanan }}</td>
                        <td>Rp.{{ number_format($data->awal_angsuran) }}</td>
                        <td>Rp.{{ number_format($data->akhir_angsuran) }}</td>
                        <td>Rp.{{ number_format($data->nominal_pengajuan) }}</td>
                        <td>Rp.{{ number_format($data->nominal_disetujui) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-main>
