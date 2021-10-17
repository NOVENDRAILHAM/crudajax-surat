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
   
        <p class="">Surabaya, 18 Oktober 2021</p>
        <p style="text-align:right;">Kepada Yth.<br>
            Pimpinan HRD {{$data->namaPerusahaan}}<br>
            Jl. Abdulrahman Saleh<br>
            di Surabaya<br></p>
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
                <td style="width: 30%; vertical-align: top;">Jabatan</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$data->jabatan}}</td>
            </tr>
        </table>

        <p> Bermaksud mengajukan izin tidak masuk kerja tgl 1,2,3 Oktober 2021 untuk presepsi pernikahan <br>
            Demikian Surat izin ini saya ajukan. Atas perhtian dan diberikannya permohonan izin<br>
            saya ini, saya ucapkan terimakasih banyak</p>

        <div style="width: 40%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 40%; text-align: left; float: right;">{{$data->nama}}</div>

    </div>
</body>

</html>