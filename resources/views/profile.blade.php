<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Pengulangan</title>
</head>

<body>
    <h1>Profile</h1>

    <!-- Pengulangan menggunakan if -->
    <hr>
    <table border="0">
        @if($nama =='Desi Fitria')
        <tr>
            <td>Nama Lengkap:</td>
            <td>{{$nama}}</td>
        </tr>
        @else
        <tr>
            <td>Nama Lengkap:</td>
            <td>tidak ada nama</td>
        </tr>
        @endif
    </table>
    </hr>

    <!-- Contoh pengulangan menggunakan foreach -->
    <h1>Contoh Pengulangan menggunakan foreach </h1>
    <table>
        @foreach($data_array['nama'] as $data)
        <tr>
            <td>Nama</td>
            <td>{{ $data }}</td>
        </tr>
        @endforeach
    </table>

    <!-- Contoh pengulangan menggunakan forelse -->
    <!-- <h1>Contoh Pengulangan menggunakan forelse </h1>
    <table>
        @forelse($data_array as $data)
        <tr>
            <td>Nama</td>
            <td>{{$data}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="2">Data Masih Kosong</td>
        </tr>
        @endforelse

    </table> -->

    <!-- Contoh Pengulangan dengan for -->
    <!-- <h1>Contoh Pengulangan dengan for</h1>
    <table>
        @for($i = 0; $i < count($data_array['nama']); $i++)
        <tr>
            <td>Nama</td>
            <td>{{$data_array['nama'][$i]}}</td>
        </tr>
        @endfor

        @if(empty($data_array['nama']))
        <tr>
            <td colspan="2">Data Masih Kosong</td>
        </tr>
        @endif
    </table> -->
</body>

</html>


   
