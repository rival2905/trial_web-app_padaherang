<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            width: 30%;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #0d6efd;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
        }

        .back:hover {
            background: #0b5ed7;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Data Diri</h1>

        <!-- Menambahkan Foto Profil -->
        <img src="{{ asset($data->image) }}" alt="Foto Profil" class="profile-img" />

        <table>
            <tr>
                <td>Nama</td>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>{{$data->nis}}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>{{$data->jurusan}}</td>
            </tr>
             <tr>
                <td>Asal Sekolah</td>
                <td>SMK NEGERI 1 PADAHERANG</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$data->alamat}}</td>
            </tr>
             <tr>
    <td>WhatsApp</td>
    <td>
        <a href="https://wa.me/{{$data->whatsapp}}"
           target="_blank"
           style="color:#25D366; text-decoration:none;">
           {{$data->whatsapp}}
        </a>
    </td>
</tr>

            <tr>
    <td>Email</td>
    <td>
        <a href="https://mail.google.com/mail/?view=cm&to={{$data->email}}"
           target="_blank"
           style="color:#0d6efd; text-decoration:none;">
           {{$data->email}}
        </a>
    </td>
</tr>

            <tr>
            <td>Instagram</td>
    <td>
        <a href="https://www.instagram.com/faassyifaa?igsh=a3RpOHMzOHVtMWV6" 
           target="_blank"
           style="color:#0d6efd; text-decoration:none;">
            {{$data->instagram}}
        </a>
    </td>
</tr>
        </table>

        <a href="{{ route('contact') }}" class="back">← Kembali</a>
    </div>
</div>

</body>
</html>
