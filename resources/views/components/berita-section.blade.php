<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

* {
    padding: 0;
    margin: 0;
    font-family: "Inter", sans-serif;
}

.berita-container {
    display: inline-flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
    margin: 0 auto;
    width: 100%;
    padding: 8px 10px;
}

.berita-container .berita-title {
    width: 90%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px; /* Adjusted margin */
}

.berita-container .berita-title h2 {
    background: #FFA800;
    padding: 8px 20px;
    font-size: 18px; /* Adjusted font size */
}

.berita-container .berita-title a {
    padding: 8px 20px;
    border: 1px solid black;
    color: black;
    text-decoration: none;
    font-weight: bold;
}

.berita-container .berita-main {
    display: flex;
    width: 90%;
    padding: 8px 20px; /* Adjusted padding */
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px; /* Adjusted gap */
}

.berita-container .berita-main .berita-content {
    width: 100%; /* Adjusted width */
    border-bottom: 2px solid #FFA800;
    padding: 16px;
    margin-bottom: 20px; /* Adjusted margin */
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    background: #fff;
}

.berita-container .berita-main .berita-content img {
    width: 100%;
    max-width: 100%; /* Added max-width */
    border-radius: 10px;
    margin-bottom: 16px;
}

</style>

<div class="berita-container">
    <div class="berita-title">
        <h2>Berita Terbaru</h2>
        <a href="#">Lihat Semua</a>
    </div>

    <div class="berita-main">
        <div class="berita-content">
            <img src="img/gus-iqdam.png" alt="">
            <p>Kehadiran sosok yang viral lewat istilah "Dekengane Pusat," Muhammad Iqdam Kholid, atau lebih dikenal sebagai Gus Iqdam, menyita perhatian ribuan peserta dari berbagai kalangan yang memenuhi Expotorium Universitas Muhammadiyah Ponorogo. Jum’at (19/1)...</p>
        </div>

        <div class="berita-content">
            <img src="img/dekan-fisip.png" alt="">
            <p>Ketua Pimpinan Daerah Muhammadiyah (PDM) Ponorogo, Drs. Muh Syafrudin, M.A, memberikan pandangannya tentang mengelola stres secara bijak pada acara "Pojok Dakwah: When Life Feels Empty" yang diselenggarakan mahasiswa semester 5 angkatan 2021 prodi Ilmu Komunikasi...</p>
        </div>
        
        <div class="berita-content">
            <img src="img/ketuapdm-ponorogo.png" alt="">
            <p>Rektor Universitas Muhammadiyah Ponorogo (UMPO), Happy Susanto, MA, memberikan apresiasi terhadap inisiatif mahasiswa program studi Ilmu Komunikasi (Ikom) Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) UMPO yang telah peduli terhadap mental health atau kesehatan mental...</p>
        </div>
        
        <div class="berita-content">
            <img src="img/rektor-umpo.png" alt="">
            <p>Mahasiswa Program Studi Ilmu Komunikasi (Ikom) Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) Universitas Muhammadiyah Ponorogo (UMPO) semester 5 angkatan 2021 menginisiasi kegiatan Muhasabah Indonesia "Pojok Dakwah" bersama Gus...</p>
        </div>
    </div>
</div>