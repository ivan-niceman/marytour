<?php include 'header.html';?>
    <main class="main">
      <ul class="send-message">
        <li>
          <a href="https://wa.me/+79057902382" target="_blank" class="whatsapp"
            >WhatsApp
            <img src="img/whatsapp.png" alt="whatsapp" />
          </a>
        </li>
        <li>
          <a href="mailto:info@marytour.ru" class="mail"
            >E-mail
            <img src="img/email.png" alt="email" />
          </a>
        </li>
      </ul>
      <div class="container-lg bus-tour">
        <div id="widget_55385"></div>
        <script
          type="text/javascript"
          src="https://www.fakeltour.ru/widgets/generators/%2Fcatalog%2Fdestinations%2Fbustoursall%2Fbustours_fromcities%2Fbustours_frommos%3Fdeparture%5B%5D%3D2/55385.js"
        ></script>
      </div>
      <h2 class="my-5 text-center">Оставить заявку</h2>
      <div class="content-form my-5">
        <div class="contacts__massage">
          <img src="img/good.svg" alt="Сообщение" />
          <h4 class="contacts__info">Ваша заявка принята!</h4>
        </div>
        <form id="send-form" class="form col-md-8">
          <div class="form-contacts">
            <p>
              <label for="name">Имя:</label><br />
              <input type="text" name="name" placeholder="Ваше имя" required />
            </p>
            <p>
              <label for="phone">Телефон:</label><br />
              <input
                type="tel"
                name="tel"
                placeholder="Номер телефона"
                required
              />
            </p>
            <p>
              <label for="email">E-mail:</label><br />
              <input
                type="email"
                name="email"
                placeholder="Электронная почта"
                required
              />
            </p>
          </div>
          <div>
            <textarea
              name="message"
              class="send-text"
              placeholder="Пожелания к туру"
            ></textarea>
          </div>
          <div class="checkbox">
            <input type="checkbox" required />
            <label>Согласие на обработку данных</label>
          </div>
          <button type="submit" class="form-btn mt-3">Отправить</button>
        </form>
      </div>
    </main>
<?php include 'footer.html';?>