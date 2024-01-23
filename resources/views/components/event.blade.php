<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
    <style>
      .Semua {
        display: flex;
        width: 1441px;
        padding: 68px 80px;
        justify-content: space-between;
        align-items: center;
        background: #f26640;
      }

      .BEM {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 28px;
      }

      .Judul {
        display: flex;
        padding: 8px 24px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        background: #ffa800;
        color: #082244;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
      }

      .Teks {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 28px;
        width: 628px;
        color: #fff;
        font-family: Inter;
        font-size: 15px;
        font-style: normal;
        font-weight: 700;
        line-height: 180%; /* 25.2px */
        text-transform: capitalize;
      }

      .Tombol {
        display: inline-block;
        padding: 12px 30px;
        background-color: #f26640;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .Tombol {
        display: flex;
        padding: 16px 36px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        color: #fff;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        border: 2px solid #ffffff;
      }

      .Tombol:hover {
        background-color: #3e8e41;
      }

      .Foto {
        display: flex;
        width: 514px;
        height: 254px;
        flex-shrink: 0;
        border-radius: 8px;
        background: url(img/kegiatanMahasiswa.jpg),
          lightgray 50% / cover no-repeat;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      }

      .Foto img {
        border-radius: 7px;
      }
    </style>
  </head>
  <body>
    <div class="Semua">
      <div class="BEM">
        <h1 class="Judul">Ayo Join BEM</h1>
        <p class="Teks">
          Bergabunglah Dengan Keluarga Besar BEM Universitas Muhammadiyah
          Ponorogo. Bersama, Kita Wujudkan Transformasi, Aktivisme, Dan
          Kepemimpinan Mahasiswa. Sambut Masa Depan Yang Lebih Baik Bersama
          Kami!
        </p>
        <a class="Tombol" href="#">Daftar Sekarang</a>
      </div>
      <div class="Foto">
        <img src="kegiatanMahasiswa.jpg" alt="foto" width="811px" />
      </div>
    </div>
  </body>
</html>
