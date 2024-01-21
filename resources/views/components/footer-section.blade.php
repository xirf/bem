<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .rata-kiri {
            text-align: left;
        }
    </style>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer-section {
            display: flex;
            margin-top: 10px;
        }

        .footer-section .medsos{    
            display: flex; 
            align-items: center;
            justify-content: center;
        }

        .footer-section .medsos a{
            margin: 0 10px;
        }

        .footer-section div {
            flex: 1;
            padding: 0 10px;
        }

        h3 {
            color: #f3c623; /* Warna kuning */
        }

        p {
            font-size: 14px;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
        h4 {
            border-bottom: 2px solid #f3c623; /* Warna kuning */
            display: inline-block;
            padding-bottom: 5px; /* Jarak antara teks dan garis bawah */
        }
    </style>
</head>
<body>

    <!-- Konten halaman di sini -->

    <div class="footer">
        <div class="footer-section">
            <div>
                <img src="logo 2.png" alt="" width="200px">
                <p>DIREKTORAT 
                KEMAHASISWAAN
                </p>
            </div>
            <div>
                <h4>KONTAK</h4>
                <p class="rata-kiri">Telp. (0352) 481124, <br>Fax : (0352) 461796,
                    <br>humas@umpo.ac.id , akademik@umpo.ac.id</p>
            </div>
            <div>
                <h4>ALAMAT</h4>
                <p class="rata-kiri">Jl. Budi Utomo No.10, Ronowijayan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471,<br>Indonesia</p>
            </div>
            <div>
                <h4>SOCIAL MEDIA</h4>
                <div class="footer-section">
                    <div class="medsos">
                    <a href="#">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/bem_umpo/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>

        <p>&copy; 2024 BEM Umpo. All Rights Reserved. | <a href="#">Kebijakan Privasi</a></p>
    </div>

</body>
</html>
