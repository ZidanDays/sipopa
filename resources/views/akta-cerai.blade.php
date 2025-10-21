<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permintaan Akta Cerai</title>
    <style>
        /* Gaya umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ public_path("images/logo-pa.png") }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 300px 300px;
            opacity: 1; /* Tetap 1 pada body agar tidak mempengaruhi teks */
        }

        /* Container utama */
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.85); /* Warna putih semi-transparan agar teks lebih terlihat */
        }

        /* Gaya teks dan judul */
        h1, .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .details, .footer {
            margin-bottom: 20px;
        }

        .details p, .footer p {
            margin: 5px 0;
        }

        .signature {
            margin-top: 40px;
        }

        /* Gaya tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Gaya tabel tanpa border */
        .no-border {
            width: 100%;
            border-collapse: collapse;
            border: none;
        }

        .no-border td {
            padding: 5px;
            border: none;
            vertical-align: top;
        }

        .no-border td:first-child {
            width: 150px;
        }

        .no-border td:nth-child(2) {
            width: 10px;
        }
    </style>
</head>
<body>

<!-- Halaman 1 -->
<div class="container">
    @include('pdf.form-permintaan-cerai')
</div>

<!-- Halaman 2 -->
<div class="container" style="page-break-before: always;">
    @include('pdf.2')
</div>

<!-- Halaman 3 -->
<div class="container" style="page-break-before: always;">
    @include('pdf.3')
</div>

<!-- Halaman 4 (opsional) -->
{{-- <div class="container" style="page-break-before: always;">
    @include('pdf.4')
</div> --}}

<!-- Halaman 5 (opsional) -->
{{-- <div class="container" style="page-break-before: always;">
    @include('pdf.5')
</div> --}}

<!-- Halaman 6 (opsional) -->
{{-- <div class="container" style="page-break-before: always;">
    @include('pdf.6')
</div> --}}

<!-- Halaman 7 (opsional) -->
{{-- <div class="container" style="page-break-before: always;">
    @include('pdf.7')
</div> --}}

</body>
</html>
