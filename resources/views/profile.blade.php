<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: 'times new roman', sans-serif;
            background: linear-gradient(to right, #283e69, #8fa0bd);
            text-align: center;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .avatar {
            width: 130px;
            height: 130px;
            background-image: url('{{ asset("image/imaa.jpg") }}');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin: 0 auto 25px auto;
        }
        .card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
        }
        .box {
            width: 280px;
            padding: 10px 10px;
            margin: 10px auto;
            border-radius: 8px;
            font-weight: bold;
            font-style: italic;
            color: #273856;
            text-align: center;
            line-height: 0.5;
            font-size: 18px;
            
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="avatar"></div>  
        <div class="box">Nama : {{ $nama }}</div>
        <div class="box">Kelas : {{ $kelas }}</div>
        <div class="box">NPM : {{ $npm }}</div>
    </div>

</body>
</html>