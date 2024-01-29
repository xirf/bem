<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
}

.aduan-container {
  display: flex;
  width: 90%;
  margin: 0 auto;
}

.aduan-container .aduan-content-satu {
  flex: 1;
  order: 1;
  padding: 30px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.aduan-container .aduan-content-dua {
  flex: 1;
  order: 2;
  padding: 50px;
}

.aduan-container .aduan-content-satu h1 {
  font-size: 40px;
}

.aduan-container .aduan-content-dua span {
  font-size: 10px;
  color: rgba(0, 0, 0, 0.5);
}
.aduan-container .aduan-content-satu .form {
  margin: 30px 0px;
}

.aduan-container .aduan-content-satu .form textarea {
  margin-top: 10px;
  width: 500px;
  height: 100px;
}

.aduan-container .aduan-content-satu .input {
  display: flex;
  margin-top: 30px;
}

.aduan-container .aduan-content-satu .input input {
  margin-right: 30px;
}

.aduan-container .aduan-content-dua .aduan-card {
  display: flex;
  border: 1px solid rgba(0, 0, 0, 0.25);
  margin: 16px 0;
  padding: 8px;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-img {
  width: 100px;
  margin: 0px 16px 0px 8px;
  height: 100px;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-img img {
  width: 100%;
  border: 1px solid #a8a8a8;
  padding: 10px;
  border-radius: 100%;
  background-color: #a8a8a8;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-text h3 {
  font-size: 12px;
  margin-bottom: 10px;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-text p {
  font-size: 12px;
  color: #000;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-text .icon {
  display: flex;
  align-items: center;
  width: 100px;
  margin-top: 8px;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-text .icon p {
  margin-right: 8px;
}

.aduan-container .aduan-content-dua .aduan-card .aduan-text .icon i {
  width: 16px;
  height: 16px;
}

</style>

<div class="aduan-container">
    <div class="aduan-content-satu">
      <h1>Aduan Mahasiswa</h1>
      <p>
        <span>Silahkan masukkan saran atau keluhan Anda dibawah ini</span>
      </p>

      <div class="form">
        <p>Keluhan atau saran Anda</p>
        <textarea></textarea>
      </div>
      <p>
        Keluhan atau saran Anda akan dikirim sebagai NAMA, pengirim secara
        anonim tidak akan membagikan nama Anda namun nama Anda akan disimpan
        untuk follow up saran dan keluhan yang Anda masukkan.
      </p>
      <div class="input">
        <input type="checkbox" />
        <p>Kirim secara anonim</p>
      </div>
    </div>
    <div class="aduan-content-dua">
      <h2>Saran Sebelumnya</h2>
      <p>
        <span
          >Beberapa saran yang bersifat negatif mungkin sudah dihapus oleh
          admin</span
        >
      </p>
      <div class="aduan-card">
        <div class="aduan-img">
          <img src="kepala.png" alt="" />
        </div>
        <div class="aduan-text">
          <h3>Anonim</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,
            maiores eveniet ea sapiente amet fugit unde eligendi? Numquam odio
            cupiditate voluptatem libero, hic eum cumque. Dolorem harum atque
            facere molestias?
          </p>
          <div class="icon">
            <i class="fa-solid fa-up-long"></i>
            <p>400</p>
            <i class="fa-solid fa-down-long"></i>
            <p>40</p>
          </div>
        </div>
      </div>
      <div class="aduan-card">
        <div class="aduan-img">
          <img src="kepala.png" alt="" />
        </div>
        <div class="aduan-text">
          <h3>Anonim</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,
            maiores eveniet ea sapiente amet fugit unde eligendi? Numquam odio
            cupiditate voluptatem libero, hic eum cumque. Dolorem harum atque
            facere molestias?
          </p>
          <div class="icon">
            <i class="fa-solid fa-up-long"></i>
            <p>400</p>
            <i class="fa-solid fa-down-long"></i>
            <p>40</p>
          </div>
        </div>
      </div>
      <div class="aduan-card">
        <div class="aduan-img">
          <img src="kepala.png" alt="" />
        </div>
        <div class="aduan-text">
          <h3>Anonim</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,
            maiores eveniet ea sapiente amet fugit unde eligendi? Numquam odio
            cupiditate voluptatem libero, hic eum cumque. Dolorem harum atque
            facere molestias?
          </p>
          <div class="icon">
            <i class="fa-solid fa-up-long"></i>
            <p>400</p>
            <i class="fa-solid fa-down-long"></i>
            <p>40</p>
          </div>
        </div>
      </div>
      <div class="aduan-card">
        <div class="aduan-img">
          <img src="kepala.png" alt="" />
        </div>
        <div class="aduan-text">
          <h3>Anonim</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,
            maiores eveniet ea sapiente amet fugit unde eligendi? Numquam odio
            cupiditate voluptatem libero, hic eum cumque. Dolorem harum atque
            facere molestias?
          </p>
          <div class="icon">
            <i class="fa-solid fa-up-long"></i>
            <p>400</p>
            <i class="fa-solid fa-down-long"></i>
            <p>40</p>
          </div>
        </div>
      </div>
      <div class="aduan-card">
        <div class="aduan-img">
          <img src="kepala.png" alt="" />
        </div>
        <div class="aduan-text">
          <h3>Anonim</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,
            maiores eveniet ea sapiente amet fugit unde eligendi? Numquam odio
            cupiditate voluptatem libero, hic eum cumque. Dolorem harum atque
            facere molestias?
          </p>
          <div class="icon">
            <i class="fa-solid fa-up-long"></i>
            <p>400</p>
            <i class="fa-solid fa-down-long"></i>
            <p>40</p>
          </div>
        </div>
      </div>
    </div>
  </div>