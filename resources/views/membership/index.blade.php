<x-main>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membership Info</title>
        <link rel="stylesheet" href="styles.css">
        <!-- Import font Inter -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
        <style>
            .container-member {
                max-width: 900px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 25px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                position: relative;
            }
    
            .header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 20px;
                background: linear-gradient(to bottom, #00264d, #004080);
                color: white;
                border-radius: 25px 25px 0 0;
                width: 100%;
                box-sizing: border-box;
                position: absolute;
                top: 0;
                left: 0;
            }
    
            .header h2 {
                margin-right: 20px;
                font-weight: 700; /* Bold font weight */
                font-size: 24px;
            }
    
            .logo {
                width: 150px;
            }
    
            .content {
                margin-top: 80px;
            }
    
            .member-info {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }
    
            .photo img {
                border-radius: 10px;
                width: 120px;
                height: 150px;
                object-fit: cover;
                margin-top: 30px;
            }
    
            .identity, .personal-info {
                width: calc(100% - 140px);
            }
    
            .identity h3, .personal-info h3 {
                color: #00264d; /* Dark blue color */
                font-size: 13px;
                font-weight: 700; /* Bold font weight */
                margin: 0;
                padding: 10px;
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
                border-radius: 20px;
                text-align: center;
                display: inline-block;
                justify-content: center;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
                color: #00264d; /* Dark blue color for table text */
            }
    
            td {
                padding: 5px 10px;
                vertical-align: top;
                font-weight: 700; /* Bold font weight */
            }
    
            .status {
                font-weight: 700; /* Bold font weight */
                padding: 2px 6px;
                border-radius: 5px;
                color: #fff;
            }
    
            .status.active {
                background-color: #00b34b;
            }
    
            .status.inactive {
                background-color: #d9534f;
            }
    
            .personal-info table {
                margin-top: 10px;
            }

            .edit-button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 14px;
                font-weight: 700;
                color: #fff;
                background: #004080;
                border: none;
                border-radius: 25px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.3s;
                margin: 10px 0;
                text-transform: uppercase;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .edit-button:hover {
                background-color: #003366;
                transform: translateY(-2px);
            }

            .edit-button:focus {
                outline: none;
            }

            /* Remove default button styles for the <button> element */
            button {
                all: unset;
                cursor: pointer;
            }
        </style>
    </head>
    <div class="container-member container">
        <div class="header">
            <img src="{{ asset('img/kanitraputih.png') }}" alt="Logo" class="logo">
            <h2>Membership Info</h2>
        </div>
        <div class="content mb-4">
            <div class="member-info">
                <div class="photo">
                    <img src="{{ asset('img/nichol.png') }}" alt="Profile" class="profile">
                </div>
                <div class="identity">
                    <div class="row justify-content-center">
                        <h3 class="anggota">IDENTITAS ANGGOTA</h3>
                    </div>
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>: Nicholas Saputra</td>
                            <td>Credit Limit</td>
                            <td>: 1,000,000</td>
                        </tr>
                        <tr>
                            <td>NRP</td>
                            <td>: 809070100</td>
                            <td>Credit Balance</td>
                            <td>: 800,000</td>
                        </tr>
                        <tr>
                            <td>Perusahaan</td>
                            <td>: PT United Tractors, Tbk</td>
                            <td>Membership Status</td>
                            <td>: <span class="status active" style="border-radius: 25px">Active</span></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: niccsap@unitedtractors.com</td>
                        </tr>
                        <tr>
                            <td>Nomor Anggota</td>
                            <td>: KAN901700011000</td>
                        </tr>
                        <tr>
                            <td>Tanggal Bergabung</td>
                            <td>: 1 Mei 2000</td>
                        </tr>
                    </table>
                </div>
            </div>

            <hr class="divider">
                        
            <div class="personal-info">
                <div class="row justify-content-center">
                    <h3>INFO PRIBADI</h3>
                </div>
                <table>
                    <tr>
                        <td>NIK</td>
                        <td>: 32116502001362</td>
                        <td>Nama Suami/Istri</td>
                        <td>: Salsabilla Putri</td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>: 1234567</td>
                        <td>No Telepon Darurat</td>
                        <td>: 081567891234</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: Jakarta</td>
                        <td>Golongan</td>
                        <td>: VI</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: 24/02/1984</td>
                        <td>Atas Nama Rekening</td>
                        <td>: Nicholas Saputra</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: Laki-laki</td>
                        <td>No Rekening</td>
                        <td>: 10008523</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>: 081234567890</td>
                        <td>Bank</td>
                        <td>: Mandiri</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: niccsap@unitedtractors.com</td>
                        <td>Lampiran (KTP/ID)</td>
                        <td>: Terlampir</td>
                    </tr>
                    <tr>
                        <td>Status Karyawan</td>
                        <td>: Karyawan Tetap</td>
                    </tr>
                </table>
                <a href="/editmember" class="edit-button">EDIT</a>
            </div>
        </div>
    </div>
</x-main>
