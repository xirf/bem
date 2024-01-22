<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
    }

    .kegiatan-container {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      align-items: center;
      justify-content: space-between;
      padding: 100px 80px 90px 80px;
      max-width: 1440px;
      margin: 0 auto;
    }

    .kegiatan-container .content {
      position: relative;
      width: 400px;
      height: 350px;
      overflow: hidden;
    }

    .kegiatan-container .content.extra {
      width: 617px;
    }

    .kegiatan-container .content.extra .image.extra {
      width: 100%;
    }

    .kegiatan-container .content.extra .image.image.extra img {
      width: 100%;
    }

    .kegiatan-container .content:hover .text {
      visibility: visible;
      background: rgba(255, 165, 60, 0.9);
      mix-blend-mode: overlay;
    }

    .kegiatan-container .content:hover img {
      transform: scale(1.1);
    }

    .kegiatan-container .content .image {
      width: 100%;
      height: 100%;
    }

    .kegiatan-container .content .image img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .kegiatan-container .content .text {
      font-size: 1.2rem;
      position: absolute;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.7);
      width: 100%;
      height: 100%;
      display: flex;
      align-items: flex-start;
      justify-content: flex-start;
      flex-direction: column;
      color: #fff;
      opacity: 1;
      visibility: hidden;
      mix-blend-mode: multiply;
    }

    .kegiatan-container .content .text h3 {
      margin-bottom: 1.2rem;
      background-color: black;
      padding: 8px 20px;
    }

    .kegiatan-container .content:nth-child(2) .text h3 {
      background: rgba(255, 165, 60, 0.8);
      color: #6c3f99;
    }
    .kegiatan-container .content:nth-child(2) .text {
      background: #6c3f99;
      opacity: 1;
      mix-blend-mode: multiply;
    }
    .kegiatan-container .content:nth-child(4) .text {
      background: #2aaa9e;
      mix-blend-mode: multiply;
    }
  </style>

<div class="kegiatan-container">
    <div class="content">
      <div class="image">
        <img src="{{ asset('/assets/img/eventImage1.png') }}" alt="" />
      </div>
      <div class="text">
        <h3>Unit Kegiatan</h3>
        <h3>Mahasiswa</h3>
      </div>
    </div>
    <div class="content">
      <div class="image">
      <img src="{{ asset('/assets/img/eventImage1.png') }}" alt="" />
      </div>
      <div class="text">
        <h3>Kegiatan di</h3>
        <h3>Kampus</h3>
      </div>
    </div>
    <div class="content">
      <div class="image">
      <img src="{{ asset('/assets/img/eventImage2.png') }}" alt="" />
      </div>
      <div class="text">
        <h3>Komunitas dan</h3>
        <h3>Event</h3>
      </div>
    </div>
    <div class="content extra">
      <div class="image extra">
        <img src="{{ asset('/assets/img/eventImage3.png') }}" alt="" />
      </div>
      <div class="text">
        <h3>Kampus Merderka</h3>
      </div>
    </div>
    <div class="content extra">
      <div class="image extra">
        <img src="{{ asset('/assets/img/eventImage4.png') }}" alt="" />
      </div>
      <div class="text">
        <h3>Kejuaraan</h3>
      </div>
    </div>
  </div>