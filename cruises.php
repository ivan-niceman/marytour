<?php include 'header.html'; ?>
<main class="main">
  <ul class="send-message">
    <li>
      <a href="https://wa.me/+79057902382" target="_blank" class="whatsapp">WhatsApp
        <img src="img/whatsapp.png" alt="whatsapp" />
      </a>
    </li>
    <li>
      <a href="https://t.me/miro_tour_msk" target="_blank" class="telegram">Telegram
        <img src="./img/telegram.png" alt="telegramm">
      </a>
    </li>
    <li>
      <a href="mailto:info@marytour.ru" class="mail">E-mail
        <img src="./img/email.png" alt="email" />
      </a>
    </li>
    <li>
      <a href="https://vk.com/mirotour" target="_blank" class="mail">vkontakte
        <img src="./img/vk_icon.png" alt="vkontakte" />
      </a>
    </li>
  </ul>
  <div class="container-lg cruise-tour">
    <div id="ces"></div>
  </div>
  <h2 class="my-5 text-center">Оставить заявку</h2>
  <div class="content-form my-5">
    <div class="contacts__massage">
      <img src="img/good.svg" alt="Сообщение" />
      <h4 class="contacts__info">Ваша заявка принята!</h4>
    </div>
    <form method="POST" id="send-form" class="form col-md-8">
      <div class="form-contacts">
        <p>
          <label for="name">Имя:</label><br />
          <input type="text" name="name" placeholder="Ваше имя" minlength="1" required />
        </p>
        <p>
          <label for="phone">Телефон:</label><br />
          <input type="tel" name="tel" placeholder="Номер телефона" minlength="5" required />
        </p>
        <p>
          <label for="email">E-mail:</label><br />
          <input type="email" name="email" placeholder="Электронная почта" minlength="3" required />
        </p>
      </div>
      <div>
        <textarea name="message" class="send-text" placeholder="Пожелания к туру" minlength="10"></textarea>
      </div>
      <div class="checkbox">
        <input type="checkbox" required />
        <label class="label">Я даю согласие на <a href="./privacy" class="privacy">обработку моих персональных данных</a></label>
      </div>
      <button type="submit" class="form-btn mt-3">Отправить</button>
    </form>
  </div>
</main>
<?php include 'footer-cruises.html'; ?>