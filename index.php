<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>DMZ STUDIO | Premium Car Detailing</title>

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">

  <a href="#" class="logo">
    <img src="assets/img/logo.png" alt="DMZ Studio">
  </a>

  <nav>
    <a href="#about">O nas</a>
    <a href="#services">Usługi</a>
    <a href="#portfolio">Realizacje</a>
    <a href="#booking">Rezerwacja</a>
  </nav>



</header>

<!-- HERO -->
<section class="hero">

  <div class="overlay"></div>

  <div class="hero-content">

    <p class="hero-tag">
      CAR DETAILING
    </p>

    <h1>
      Perfekcja<br>
      w każdym detalu.
    </h1>

    <p class="hero-text">
      Powłoki ceramiczne, kompleksowy detailing wnętrza i lakieru,
      ochrona folią PPF oraz profesjonalne oklejanie foliami barwnymi.
    </p>

    <div class="hero-buttons">

      <a href="#booking" class="btn-primary">
        Rezerwacja
      </a>

      <a href="#portfolio" class="btn-secondary">
        Nasze realizacje
      </a>

    </div>

  </div>

</section>

<!-- ABOUT -->
<section class="about" id="about">

  <div class="about-left">

    <p class="section-tag">
      DMZ STUDIO
    </p>

    <h2>
      Nowoczesny detailing
    </h2>

    <p>
      Tworzymy miejsce dla osób,
      które oczekują perfekcyjnego wyglądu swojego auta.
      Łączymy doświadczenie, profesjonalne kosmetyki
      i pasję do motoryzacji.
    </p>

    <div class="stats">

      <div class="stat">
        <strong>500+</strong>
        <span>Obsłużonych aut</span>
      </div>

      <div class="stat">
        <strong>5★</strong>
        <span>Opinie klientów</span>
      </div>

      <div class="stat">
        <strong>100%</strong>
        <span>Zaangażowania</span>
      </div>

    </div>

  </div>

  <div class="about-right">
    <img src="assets/img/car1.jpg" alt="">
  </div>

</section>

<!-- SERVICES -->
<section class="services" id="services">

  <div class="section-header">
    <p class="section-tag">USŁUGI</p>
    <h2>Co robimy?</h2>
  </div>

  <div class="services-grid">

    <div class="service-card">
      <span>01</span>
      <h3>Detailing wnętrza</h3>
      <p>
        Kompleksowe czyszczenie,
        pielęgnacja oraz zabezpieczenie wnętrza.
      </p>
    </div>

    <div class="service-card">
      <span>02</span>
      <h3>Korekta lakieru</h3>
      <p>
        Usuwanie rys i przywracanie głębi koloru.
      </p>
    </div>

    <div class="service-card">
      <span>03</span>
      <h3>Powłoki ceramiczne</h3>
      <p>
        Trwała ochrona i maksymalny połysk lakieru.
      </p>
    </div>

    <div class="service-card">
      <span>04</span>
      <h3>Folia PPF</h3>
      <p>
        Ochrona lakieru przed uszkodzeniami.
      </p>
    </div>

  </div>

</section>

<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">

  <div class="section-header">
    <p class="section-tag">REALIZACJE</p>
    <h2>Nasze projekty</h2>
  </div>

  <div class="portfolio-grid">

    <div class="portfolio-item">
      <img src="assets/img/car1.jpg" alt="">
    </div>

    <div class="portfolio-item">
      <img src="assets/img/car2.jpg" alt="">
    </div>

    <div class="portfolio-item">
      <img src="assets/img/car3.jpg" alt="">
    </div>

  </div>

</section>

<!-- BOOKING -->
<section class="booking" id="booking">

  <div class="booking-box">

    <p class="section-tag">
      REZERWACJA
    </p>

    <h2>
      Umów swój samochód
    </h2>

    <form action="booking.php" method="POST">

      <input type="text" name="name" placeholder="Imię i nazwisko" required>

      <input type="email" name="email" placeholder="Adres e-mail" required>

      <input type="text" name="phone" placeholder="Numer telefonu" required>

      <select name="service" required>
        <option value="">Wybierz usługę</option>
        <option>Detailing wnętrza</option>
        <option>Korekta lakieru</option>
        <option>Powłoka ceramiczna</option>
        <option>Folia PPF</option>
      </select>

      <input type="date" name="date" required>

      <button type="submit">
        Wyślij rezerwację
      </button>

    </form>

  </div>

</section>

<!-- FOOTER -->
<footer class="footer">

 <p class="hero-tag">
      DMZ STUDIO<br>
      CAR DETAILING
    </p>

  <div class="footer-contact">
    <p>📍Wrocław, Dzierżoniów i okolice</p>
    <p>📞+48 530 893 186</p>
    <p>✉kontakt@dmzstudio.pl</p>
  </div>

</footer>

<script src="assets/js/script.js"></script>
</body>
</html>