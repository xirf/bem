<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agenda</title>
    <style>
      body {
        font-family: "Arial", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      .agenda-container {
        max-width: 800px;
        margin: 20px auto;
        overflow: hidden;
        position: relative;
      }

      .agenda-wrapper {
        display: flex;
      }

      .agenda-item {
        flex: 0 0 auto;
        width: 300px;
        padding: 20px;
        margin-right: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .event-title {
        color: #333;
      }

      .event-date {
        color: #666;
      }

      .prev-button,
      .next-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.5em;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
      }

      .prev-button {
        left: 10px;
      }

      .next-button {
        right: 10px;
      }
    </style>
  </head>
  <body>
    <div class="agenda-container">
      <div class="agenda-wrapper">
        <div class="agenda-item">
          <h2 class="event-title">WISUDA KE 53</h2>
          <p class="event-date">20 September 2022</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">WISUDA KE 50</h2>
          <p class="event-date">18 Maret 2021</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">
            Seminar Prakerja Calon Wisuda Wisudawati dan Alumni
          </h2>
          <p class="event-date">24 Februari 2021</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">
            WISUDA PASCASARJANA SARJANA DAN DIPLOMA KE 49 UMPO
          </h2>
          <p class="event-date">61 Desember 2020</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">?</h2>
          <p class="event-date">?</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">?</h2>
          <p class="event-date">?</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">?</h2>
          <p class="event-date">?</p>
        </div>

        <div class="agenda-item">
          <h2 class="event-title">?</h2>
          <p class="event-date">?</p>
        </div>
      </div>

      <button class="prev-button" onclick="scrollAgenda(-1)">‹</button>
      <button class="next-button" onclick="scrollAgenda(1)">›</button>
    </div>

    <script>
      const agendaWrapper = document.querySelector(".agenda-wrapper");
      const agendaItems = document.querySelectorAll(".agenda-item");
      const prevButton = document.querySelector(".prev-button");
      const nextButton = document.querySelector(".next-button");
      let currentIndex = 0;

      function scrollAgenda(direction) {
        const itemWidth = agendaItems[0].offsetWidth;
        const containerWidth = agendaWrapper.offsetWidth;
        const maxScroll =
          agendaItems.length - Math.floor(containerWidth / itemWidth);
        const targetIndex = Math.min(
          maxScroll,
          Math.max(0, currentIndex + direction)
        );
        const distance = targetIndex * itemWidth - currentIndex * itemWidth;
        const startTime = performance.now();
        const duration = 500; // Durasi animasi dalam milidetik

        function easeInOutQuad(t) {
          return t < 0.5 ? 2 * t * t : -1 + 4 * t - 2 * t * t;
        }

        function animate(currentTime) {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const easedProgress = easeInOutQuad(progress);
          const newPosition =
            currentIndex * itemWidth + distance * easedProgress;
          agendaWrapper.style.transform = `translateX(${-newPosition}px)`;

          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            currentIndex = targetIndex;
          }
        }

        requestAnimationFrame(animate);
      }

      prevButton.addEventListener("click", () => scrollAgenda(-1));
      nextButton.addEventListener("click", () => scrollAgenda(1));
    </script>
  </body>
</html>
