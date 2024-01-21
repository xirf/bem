<style>
    .slider-container {
        max-width: 800px;
        margin: 20px auto;
        position: relative;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        flex: 0 0 100%;
        box-sizing: border-box;
        text-align: center;
    }

    .slider-container img {
        width: 100%;
        height: auto;
    }

    .slider-container h2 {
        color: #333;
        margin-top: 10px;
    }


    .slider-container button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }
</style>

{{-- 
- 
- Bagian ini gak perlu slider, buat aja seperti yang di figma
- Biar gampang coba pakai for loop buat bikin card nya 
- contoh kita bikin content nya dulu pake php
_ $contents = [
    [
        'img' => 'img/gus-iqdam.png',
        'title' => 'Bikin Terpukau Gus Iqdam Sambangi UMPO Bicara Seputar Mental Health'
    ],
    [
        'img' => 'img/ketuapdm-ponorogo.png',
        'title' => 'Kelola Stres Ala Ketua PDM Ponorogo Biar Stres Jadi Motivasi Untuk Raih Prestasi'
    ],
    [
        'img' => 'img/rektor-umpo.png',
        'title' => 'Tertekan Tapi Penuh Kejutan Ungkap Rektor UMPO Soal Mental Health Sandwich Generation'
    ],
    [
        'img' => 'img/dekan-fisip.png',
        'title' => 'Pojok Dakwah Bareng Gus Iqdam Dekan FISIP UMPO Nyatakan Sikap Ajak Gen Z Peduli Mental Health'
    ],
]

terus di html nya 

@foreach ($contents as $content)
    <div class="slide">
        <img src="{{ $content['img'] }}" alt="{{ $content['title'] }}">
        <h2>{{ $content['title'] }}</h2>
    </div>
@endforeach

biar gampang container buat vard nya buat pakai grid grid nya bisa di lihat di figma

-    
--}}
<section class="slider-container">
    <div class="slider">
        <div class="slide">
            <img src="img/gus-iqdam.png" alt="Gambar 1">
            <h2>Bikin Terpukau Gus Iqdam Sambangi UMPO Bicara Seputar Mental Health</h2>
        </div>
        <div class="slide">
            <img src="img/ketuapdm-ponorogo.png" alt="Gambar 2">
            <h2>Kelola Stres Ala Ketua PDM Ponorogo Biar Stres Jadi Motivasi Untuk Raih Prestasi</h2>
        </div>
        <div class="slide">
            <img src="img/rektor-umpo.png" alt="Gambar 3">
            <h2>Tertekan Tapi Penuh Kejutan Ungkap Rektor UMPO Soal Mental Health Sandwich Generation</h2>
        </div>
        <div class="slide">
            <img src="img/dekan-fisip.png" alt="Gambar 4">
            <h2>Pojok Dakwah Bareng Gus Iqdam Dekan FISIP UMPO Nyatakan Sikap Ajak Gen Z Peduli Mental Health</h2>
        </div>
    </div>
    <button class="prev" onclick="prevSlide()">&lt;</button>
    <button class="next" onclick="nextSlide()">&gt;</button>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;
        const slideWidth = slides[0].clientWidth;

        // Fungsi untuk memperbarui tampilan slider
        function updateSlider() {
            slider.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
        }

        // Fungsi untuk menangani tombol "Next"
        window.nextSlide = function() {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        };

        // Fungsi untuk menangani tombol "Previous"
        window.prevSlide = function() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - 1;
            }
            updateSlider();
        };
    });
</script>
