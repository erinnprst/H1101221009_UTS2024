@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Form Master Jabatan</title>
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
            border-radius: 5px;
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
            margin-top: 10px;
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
                    <h2>Form Master Jabatan</h2>
                    <form>
                        <label for="jabatan">Jabatan:</label>
                        <input type="text" id="jabatan" name="jabatan" placeholder="" required>

                        <label for="jabatan">Keterangan:</label>
                        <input type="text" id="keterangan" name="keterangan" placeholder="" required>

                        <input type="submit" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
