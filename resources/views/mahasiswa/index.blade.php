<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Diri Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
    <div id="container">
        <header>
            <h1>Data Diri</h1>
        </header>

        <main>
            <article>
                <div class="top">
                    <ul>
                        <li>NIM : {{ $dataMahasiswa['NIM'] }}</li>
                        <li>Nama : {{ $dataMahasiswa['Nama'] }}</li>
                        <li>Jurusan : {{ $dataMahasiswa['Jurusan'] }}</li>
                        <li>Program Studi : {{ $dataMahasiswa['Program Studi'] }}</li>
                        <li>Mata Kuliah : {{ $dataMahasiswa['Mata Kuliah'] }}</li>
                    </ul>
                </div>
                <div class="bottom">
                    <h2>List Mata Kuliah Semester Ganjil 2023/2024</h2>
                    <ul>
                        @foreach($mataKuliah as $mata)
                        <li>{{ $mata }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        </main>
    </div>
     
</body>

</html>