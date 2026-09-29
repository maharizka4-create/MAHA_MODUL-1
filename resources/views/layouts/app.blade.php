<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('judul') | SIM Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            background: #1565c0;;
            padding: 20px 30px;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: normal;
        }

        nav a.aktif {
            font-weight: bold;
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            min-height: 600px;
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #1565c0;;
            color: white;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        a {
            color: #1565c0;;
        }

        .kartu {
            display: inline-block;
            vertical-align: top;
            width: 22%;
            margin: 1%;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .kartu h3 {
            margin-top: 0;
        }

        .kartu .isi {
            font-size: 28px;
            margin: 15px 0;
        }

        .kaki {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background:#1565c0;;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    <main class="container">
        @yield('konten')
    </main>

    @include('partials.footer')

</body>
</html>