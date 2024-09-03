<x-main>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <style>

    .profile-container {
        width: 50%;
        margin: 20px auto;
        background-color: white;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 23px;
        overflow: hidden;
    }

    .profile-header {
        display: flex;
        align-items: center;
        background: linear-gradient(to bottom, #003366, #005ca8);
        padding: 20px;
        color: white;
    }

    .logo img {
        width: 120px;
        margin-right: 20px;
    }

    .profile-title {
        font-size: 24px;
        font-weight: bold;
        text-align: ;
    }

    .profile-form {
        padding: 20px;
    }

    .form-section {
        margin-bottom: 30px;
    }

    .form-section h3 {
        margin-bottom: 10px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
        font-size: 18px;
    }

    .form-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        color: rgb(33, 92, 159);
    }

    .form-item {
        display: flex;
        align-items: center;
        width: 48%;
    }

    .form-item label {
        margin-right: 10px;
        width: 120px;
        text-align: right;
        font-weight: bold;
    }

    .form-item label {
        text-align: left;
    }

    .form-item input[type="text"],
    .form-item input[type="email"],
    .form-item input[type="file"] {
        flex: 1;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 20px;
        font-size: 14px;
    }

    .form-item small {
        font-size: 0.875rem;
        color: #6c757d; /* Adjust color as needed */
        display: flex;
        flex-direction: column;
    }


    .save-btn {
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

    .save-btn:hover {
        background-color: #218838;
    }

    .form-group .form-item:first-child {
        margin-right: 2%;
    }

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="logo">
                <img src="{{ asset('img/kanitraputih.png') }}" alt="Kanitra Logo">
            </div>
            <div class="profile-title">
                <div class="row justify-content-right">
                Profil Saya
                </div>
            </div>
        </div>
        <form class="profile-form">
            <div class="form-section">
                <h3>Info Pribadi</h3>
                <div class="form-group">
                    <div class="form-item">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" placeholder="Nicholas Saputra">
                    </div>
                    <div class="form-item">
                        <label for="nrp">NRP</label>
                        <input type="text" id="nrp" placeholder="809070100">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <label for="perusahaan">Perusahaan</label>
                        <input type="text" id="perusahaan" placeholder="PT United Tractors, Tbk">
                    </div>
                    <div class="form-item">
                        <label for="kode-divisi">Kode Divisi</label>
                        <input type="text" id="kode-divisi" placeholder="123444">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" placeholder="32116502001362">
                    </div>
                    <div class="form-item">
                        <label for="tempat-lahir">Tempat Lahir</label>
                        <input type="text" id="tempat-lahir" placeholder="Jakarta">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <label for="npsn">NPSN</label>
                        <input type="text" id="npsn" placeholder="1234567">
                    </div>
                    <div class="form-item">
                        <label for="tanggal-lahir">Tanggal Lahir</label>
                        <input type="text" id="tanggal-lahir" placeholder="24/02/1984">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <label for="telepon">No Telepon</label>
                        <input type="text" id="telepon" placeholder="081234567890">
                    </div>
                    <div class="form-item">
                        <label for="jenis-kelamin">Jenis Kelamin</label>
                        <input type="text" id="jenis-kelamin" placeholder="Laki-laki">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="niccsap@unitedtractors.com">
                    </div>
                    <div class="form-item">
                        <label for="status">Status</label>
                        <input type="text" id="status" placeholder="Karyawan Tetap">
                    </div>
                </div>     
            </div>          
            <div class="form-section">
                <h3>Info Keluarga</h3>
                <div class="form-group">
                    <div class="form-item">
                        <label for="nama-suami-istri">Nama Suami/Istri</label>
                        <input type="text" id="nama-suami-istri" placeholder="Insert Name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-item">
                        <label for="telepon-darurat">No Telepon Darurat</label>
                        <input type="text" id="telepon-darurat" placeholder="Insert Number">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-item">
                        <label for="golongan">Golongan</label>
                        <input type="text" id="golongan" placeholder="Insert Context">
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3>Info Rekening</h3>
                <div class="form-group">
                    <div class="form-item">
                        <label for="atas-nama">Atas Nama Rekening</label>
                        <input type="text" id="atas-nama" placeholder="Insert Name">
                    </div>
                </div>

                <div class="from-group">
                    <div class="form-item">
                        <label for="nomor-rekening">Nomor Rekening</label>
                        <input type="text" id="nomor-rekening" placeholder="Insert Number">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-item">
                        <label for="bank">Bank</label>
                        <input type="text" id="bank" placeholder="Insert Name">
                    </div>
                </div>
            
            </div>
            <div class="form-section">
                <h3>Lampiran</h3>
                <div class="form-group">
                    <div class="form-item">
                        <label for="lampiran">Lampiran (KTP/ID)</label>
                        <input type="file" id="lampiran">
                    </div>
                </div>
                <p>*Upload KTP/ID Card dengan format PDF</p>
            </div>
            <button type="submit" class="save-btn">Save</button>
        </form>
    </div>
</body>
</html>

</x-main>
