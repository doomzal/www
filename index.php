<!DOCTYPE html>
    <div class="service-card">
    <link rel="stylesheet" href="assets/css/style.css">
      <div class="service-icon">🚘</div>
      <h3>Korekta lakieru</h3>
      <p>Usuwanie zarysowań i przywracanie głębi koloru.</p>
    </div>

  </div>
</section>

<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">
  <div class="section-header">
    <p class="section-tag">REALIZACJE</p>
    <h2>Nasze ostatnie projekty</h2>
  </div>

  <div class="portfolio-grid">
    <div class="portfolio-item"></div>
    <div class="portfolio-item"></div>
    <div class="portfolio-item"></div>
  </div>
</section>

<!-- BOOKING -->
<section class="booking" id="booking">
  <div class="booking-box">
    <p class="section-tag">REZERWACJA</p>
    <h2>Zarezerwuj termin online</h2>

    <form action="booking.php" method="POST">
      <input type="text" name="name" placeholder="Imię i nazwisko" required>
      <input type="email" name="email" placeholder="Adres e-mail" required>
      <input type="text" name="phone" placeholder="Numer telefonu" required>

      <select name="service" required>
        <option value="">Wybierz usługę</option>
        <option>Detailing wnętrza</option>
        <option>Korekta lakieru</option>
        <option>Powłoka ceramiczna</option>
      </select>

      <input type="date" name="date" required>

      <button type="submit" class="btn-primary full-btn">
        Wyślij rezerwację
      </button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer" id="contact">
  <div>
    <h3>DMZ STUDIO</h3>
    <p>Premium Car Detailing</p>
  </div>

  <div>
    <p>📍 Twoje miasto</p>
    <p>📞 +48 000 000 000</p>
    <p>✉ kontakt@dmzstudio.pl</p>
  </div>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
