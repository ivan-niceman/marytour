<?php include 'header.html';?>
    <div class="container-lg p-0 tours">
      <div data-sletat-module-id="31667c13-3fb9-4ca6-8967-0d00bc354e82"></div>
<script charset="utf-8" src="https://front.sletat.ru/modules/module6/latest/module.js" defer></script>
    </div>
    <main class="main">
      <ul class="send-message">
        <li>
          <a href="https://wa.me/+79057902382" target="_blank" class="whatsapp"
            >WhatsApp
            <img src="img/whatsapp.png" alt="whatsapp" />
          </a>
        </li>
        <li>
          <a href="https://t.me/miro_tour_msk" target="_blank" class="telegram">Telegram
            <img src="./img/telegram.png" alt="telegramm">
          </a>
        </li>
        <li>
          <a href="mailto:info@marytour.ru" class="mail"
            >E-mail
            <img src="./img/email.png" alt="email" />
          </a>
        </li>
        <li>
          <a href="https://vk.com/mirotour" target="_blank" class="mail"
            >vkontakte
            <img src="./img/vk_icon.png" alt="vkontakte" />
          </a>
        </li>
      </ul>
      <div class="container-lg">
        <div class="row justify-content-around text-center benefits">
          <div>
            <img src="img/receptionist.png" alt="receptionist" />
            <p>Работаем с 2000 года</p>
          </div>
          <div>
            <img src="img/business-trip.png" alt="business-trip" />
            <p>
              Отправили на отдых<br />
              более 15 000 туристов
            </p>
          </div>
          <div>
            <img src="img/hotel.png" alt="hotel" />
            <p>
              Лично проинспектировали<br />
              более 600 отелей
            </p>
          </div>
        </div>
        <div class="main-partners">
          <h6 class="text-center">Туры от ведущих туроператоров</h6>
          <span></span>
        </div>
        <div class="main-partners-logo">
          <img src="img/tez.png" alt="teztour" />
          <img src="img/sunmar.png" alt="sunmar" />
          <img src="img/pegas.png" alt="pegas" />
          <img src="img/fun&sun.png" alt="fun&sun" />
          <img src="img/coraltravel.png" alt="coraltravel" />
          <img src="img/biblioglobus.png" alt="biblioglobus" />
          <img src="img/anex.png" alt="anextour" />
        </div>
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
            <label class="label">Я даю согласие на <a href="./privacy" class="privacy">обработку моих персональных данных</a></label>
          </div>
          <button type="submit" class="form-btn mt-3">Отправить</button>
        </form>
      </div>
    </main>
    <div class="container-fluid d-flex p-0">
      <div class="container-md-6 main-map">
        <a
          href="https://yandex.ru/maps/?um=constructor%3A792ba77621e5d8af4e20bf28fb891a9a2f62343d1a549e7a93eff38710d507b8&amp;source=constructorStatic"
          target="_blank"
          ><img
            src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A792ba77621e5d8af4e20bf28fb891a9a2f62343d1a549e7a93eff38710d507b8&amp;width=600&amp;height=450&amp;lang=ru_RU"
            alt=""
            style="border: 0"
        /></a>
      </div>
      <div class="container-md-6 building">
        <div class="building-info">
          <address>
            г. Москва, м. Белорусская, Электрический переулок, 3/10, строение 1,
            офис 303
          </address>
          <a href="tel:+74992504359">+7(499)250-43-59</a>
          <span>пн-пт: 10:00 - 20:00</span>
          <span>сб-вс: 11:00 - 17:00</span>
        </div>
      </div>
    </div>
    
<?php include 'footer.html';?>
