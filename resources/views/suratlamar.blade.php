<!DOCTYPE html>
<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 0px solid; 
            padding-top: 30px; 
            padding-left: 40px; 
            padding-right: 40px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div id=halaman>
        <p style="text-align:right;">Kepada Yth.<br>
            Pimpinan HRD {{$data->namaPerusahaan}}<br>
            Jl. Abdulrahman Saleh<br>
            di Surabaya<br></p>
            <table>
            <tr>
                <td style="width: 30%; vertical-align: top;">Lampiran</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">4(Empat) Lembar</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Hal</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">Surat Lamaran Kerja</td>
            </tr>
        </table>
         <p>Dengan Hormat, <br>Saya Bertanda tangan dibawah ini :</p>
        <table>
            
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$data->nama}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$data->alamat}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Melamar di Posisi</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$data->jabatan}}</td>
            </tr>
        </table>

        <p> Sehubung dengn informasi yang saya baca di internet {{$data->namaPerusahaan}} membuka lowongan pekerjaan
           maka dengan ini saya bermaksud untuk mengajukan surat lamaran kerja guna mengisi posisi tersebut<br></p>
        <p>Bersama dengan surat ini berikut saya lampirkan foto copy dokumen adminitratif:</p>
        <p>Foto copy ijazah.<br>Foto copy nilai akademik<br>Daftar riwayat hidup<br>Pasfoto 4x4 4(Empat) buah</p> 

        <p> Demikian surat lamaran kerja ini saya buat berdasarkan kondisi saya yang sebenarnya.<br>
           Apabila dikemudian hari terdapat perbedaan, maka saya sepenuhnya siap bertanggung jawab.<br></p>
        <p>Atas perhatian dan kerjasamanya saya sampaikan terimakasih</p>          

        <div style="width: 40%; text-align: left; float: right;">Surabaya, 18 Oktober 2021</div><br>
        <div style="width: 40%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 40%; text-align: left; float: right;">{{$data->nama}}</div>

    </div>
</body>

</html>