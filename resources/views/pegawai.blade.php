@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Form Data Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container-fluid {
            padding: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], select {
            width: calc(100% - 12px); 
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 25px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <h2>Form Data Karyawan</h2>
                    <form>
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

                        <label for="jabatan">Jabatan:</label>
                        <select id="jabatan" name="jabatan">
                            <option value="">Pilih Jabatan</option>
                            <option value="manager">Manager</option>
                            <option value="staff">Staff</option>
                            <option value="supervisor">Supervisor</option>
                        </select>

                        <label for="gaji">Gaji:</label>
                        <input type="text" id="gaji" name="gaji" placeholder="Masukkan gaji" required>

                        <label for="pendidikan">Pendidikan:</label>
                        <select id="pendidikan" name="pendidikan">
                            <option value="">Pilih Pendidikan</option>
                            <option value="s1">S1</option>
                            <option value="d3">D3</option>
                            <option value="smk">SMK</option>
                        </select>

                        <input type="submit" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
