@php
    $beritaItems = [
        [
            'image' => 'img/eventImage1.png',
            'title' => 'Gus Iqdam: Kita Harus Membangun Kampus yang Inspiratif',
            'content' => 'Kehadiran sosok yang viral lewat istilah "Dekengane Pusat," Muhammad Iqdam Kholid, atau lebih dikenal sebagai Gus Iqdam, menyita perhatian ribuan peserta dari berbagai kalangan yang memenuhi Expotorium Universitas Muhammadiyah Ponorogo. Jum’at (19/1)...',
        ],
        [
            'image' => 'img/eventImage1.png',
            'title' => 'Ketua PDM Ponorogo: Kita Harus Membangun Kampus yang Inspiratif',
            'content' => 'Ketua Pimpinan Daerah Muhammadiyah (PDM) Ponorogo, Drs. Muh Syafrudin, M.A, memberikan pandangannya tentang mengelola stres secara bijak pada acara "Pojok Dakwah: When Life Feels Empty" yang diselenggarakan mahasiswa semester 5 angkatan 2021 prodi Ilmu Komunikasi...',
        ],
        [
            'image' => 'img/eventImage1.png',
            'title' => 'Rektor UMPO: Kita Harus Membangun Kampus yang Inspiratif',
            'content' => 'Rektor Universitas Muhammadiyah Ponorogo (UMPO), Happy Susanto, MA, memberikan apresiasi terhadap inisiatif mahasiswa program studi Ilmu Komunikasi (Ikom) Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) UMPO yang telah peduli terhadap mental health atau kesehatan mental...',
        ],
        [
            'image' => 'img/eventImage1.png',
            'title' => 'Gus Iqdam: Kita Harus Membangun Kampus yang Inspiratif',
            'content' => 'Mahasiswa Program Studi Ilmu Komunikasi (Ikom) Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) Universitas Muhammadiyah Ponorogo (UMPO) semester 5 angkatan 2021 menginisiasi kegiatan Muhasabah Indonesia "Pojok Dakwah" bersama Gus...',
        ],
    ];
@endphp

<div class="w-full px-20 py-12 grid gap-12">
    <div class="flex w-full items-center justify-between">
        <h2 class="text-3xl font-bold">Berita Terbaru</h2>
        <a href="#">
            <div class="px-4 py-2 border-2 border-black">
                Lihat Semua
            </div>
        </a>
    </div>

    <div class="w-full flex gap-8">
        @foreach ($beritaItems as $berita)
            <div class="w-full border-b-4 border-yellow-300 p-4 shadow-lg grid gap-4">
                <div class="h-64 w-full rounded-md text-lg font-bold flex items-end justify-start flex-wrap p-4"
                    style="background-image: url('{{ asset('assets/' . $berita['image']) }}'">
                    @php
                        // split the string by space and then make a span for each word
                        $titleWords = explode(' ', $berita['title']);
                    @endphp
                    <div class="flex items-end justify-start flex-wrap gap-y-1">
                        @foreach ($titleWords as $tw)
                        <span class="bg-yellow-300 px-1 py-1">{{ $tw }}</span>
                        @endforeach
                    </div>
                </div>
                <p class="leading-relaxed text-lg">{{ $berita['content'] }}</p>
            </div>
        @endforeach
    </div>
</div>
