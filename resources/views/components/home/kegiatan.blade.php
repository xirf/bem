<?php
$contents = [
    [
        'img' => '/assets/img/eventImage1.png',
        'text' => 'Unit Kegiatan mahasiswa',
        'color' => ['#6c3f99', '#fff'],
        'filter' => '#FFA53C',
    ],
    [
        'img' => '/assets/img/eventImage1.png',
        'text' => 'Kegiatan di Kampus',
        'color' => ['#ffa53b', '#6c3f99'],
        'filter' => '#6C3F99',
    ],
    [
        'img' => '/assets/img/eventImage2.png',
        'text' => 'Komunitas dan Event',
        'color' => ['#6c3f99', '#fff'],
        'filter' => '#FFA53C',
    ],
    [
        'img' => '/assets/img/eventImage3.png',
        'text' => 'Kampus Merdeka',
        'color' => ['#ffa800', '#6c3f99'],
        'filter' => '#2AAA9E',
    ],
    [
        'img' => '/assets/img/eventImage4.png',
        'text' => 'Kejuaraan',
        'color' => ['#6c3f99', '#fff'],
        'filter' => '#FFA53C',
    ],
];

?>

<div class="grid grid-cols-6 w-full p-20 gap-10">
    @foreach ($contents as $i => $content)
        <div class="w-full bg-red-50 p-8 flex items-end justify-start transition-all duration-300 ease-in-out bg-cover bg-no-repeat bg-center relative h-96"
            style="
                grid-column: {{ $i > 2 ? 'span 3' : 'span 2' }} / span 1;
            ">

            <div class="absolute top-0 left-0 bg-cover bg-no-repeat w-full h-full"
                style="background-image: url({{ $content['img'] }});">
            </div>
            <div class="absolute top-0 left-0 object-cover w-full h-full z-10 "
                style="
                    background: {{ $content['filter'] }}; 
                    background-blend-mode: hard-light;
                    mix-blend-mode: color;">
            </div>
            <h3 class="z-50 text-4xl font-bold py-1 px-3"
                style="
                  color: {{ $content['color'][1] }};
                  background: {{ $content['color'][0] }};
            ">
                {{ $content['text'] }} </h3>
        </div>
    @endforeach
</div>
