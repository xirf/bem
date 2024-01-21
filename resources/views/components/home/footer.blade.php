<style>
    .footer .rata-kiri {
        text-align: left;
    }

    .footer {
        background-color: #0c0b0c;
        color: #9d9ea3;
        padding: 20px;
        text-align: center;
    }

    .footer-section {
        display: flex;
        margin-top: 10px;
    }

    .footer-section .medsos {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .footer-section .medsos a {
        margin: 0 10px;
    }

    .footer-section > div {
        flex: 1;
        text-align: left;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding: 0 10px;
    }

    .footer h3 {
        color: #f3c623;
        /* Warna kuning */
    }

    .footer p {
        font-size: 14px;
    }

    .footer a:not(.footer-link) {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer h4 {
        border-bottom: 2px solid #f3c623;
        /* Warna kuning */
        display: inline-block;
        padding-bottom: 5px;
        /* Jarak antara teks dan garis bawah */
    }
</style>


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
            <h4 class="text-gray-200">KONTAK</h4>
            <p class="rata-kiri">Telp. (0352) 481124, <br>Fax : (0352) 461796,
                <br>humas@umpo.ac.id , akademik@umpo.ac.id
            </p>
        </div>
        <div>
            <h4 class="text-gray-200">ALAMAT</h4>
            <p class="rata-kiri">Jl. Budi Utomo No.10, Ronowijayan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur
                63471,<br>Indonesia</p>
        </div>
        <div>
            <h4 class="text-gray-200">SOCIAL MEDIA</h4>
            <div class="flex flex-row gap-2">
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

    <div class="excluded text-xs mt-12">&copy; 2024 BEM Umpo. All Rights Reserved. | <a class="footer-link" href="#">Kebijakan Privasi</a></p>
</div>
