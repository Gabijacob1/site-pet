<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>P&P - inicio</title>
    <link
      rel="stylesheet"
      href="https://assets.codepen.io/7773162/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="website icon" type="png" href="osso.png">
  </head>
  <body>
    <!-- HEADER -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo"> PetPets</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <a href="./form-add.php" class="button button--ghost">Login</a>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
          <img
            src="https://assets.codepen.io/7773162/nav-img.png"
            alt=""
            class="nav__img"
          />
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>
    <main class="main">
      <!-- HOME -->
      <section class="home container" id="home">
        <div class="swiper home-swiper">
          <div class="swiper-wrapper">
            <!-- HOME SLIDER 1 -->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="osso.png"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>
                  <div class="home__details-img">
                    <h4 class="home__details-title">DOGS</h4>
                    <span class="home__details-subtitle"
                      >Linha completa para cães</span
                    >
                  </div>
                </div>
                <div class="home__data">
                  <h3 class="home__subtitle">#1 Top Site de animais</h3>
                  <h1 class="home__title">
                    Pet<br />
                    & <br />
                    Pets<br />
                    
                  </h1>
                  <p class="home__description">
                A melhor companhia é aquela que te aceita do jeitinho que você <strong> É. </strong>
                  </p>
                  <div class="home__buttons">
                    <a href="#" class="book--now">
                    </a>
                    <a href="#" class="button--link button--flex"
                      >Ver outros.
                      <i class="bx bx-right-arrow-alt button__icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </section>
            <!-- HOME SLIDER 2 -->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="gato.png"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>
                  <div class="home__details-img">
                    <h4 class="home__details-title">CATS</h4>
                    <span class="home__details-subtitle"
                      >Linha completa para Gatos</span
                    >
                  </div>
                </div>
                <div class="home__data">
                  <h3 class="home__subtitle">#1 Top Site de animais</h3>
                  <h1 class="home__title">
                    Pet<br />
                    &<br />
                    Pets
                  </h1>
                  <p class="home__description">
                    A melhor companhia é aquela que te aceita do jeitinho que você <strong> É. </strong>
                  </p>
                  <div class="home__buttons">
                    <a href="#" class="book--now">
                      <img
                        src=""
                        alt=""
                      />
                    </a>
                    <a href="#" class="button--link button--flex"
                      >Ver outros.
                      <i class="bx bx-right-arrow-alt button__icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </section>
            <!-- HOME SLIDER 3 -->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="passaro.png"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>
                  <div class="home__details-img">
                    <h4 class="home__details-title">BIRDS</h4>
                    <span class="home__details-subtitle"
                      >Linha completa para Passaros</span
                    >
                  </div>
                </div>
                <div class="home__data">
                  <h3 class="pumpkin__subtitle">#1 Top Site de animais</h3>
                  <h1 class="home__title">
                   Pet<br />
                    & <br />
                 Pets
                  </h1>
                  <p class="home__description">
                    A melhor companhia é aquela que te aceita do jeitinho que você <strong> É. </strong>
                  </p>
                  <div class="home__buttons">
                    <a href="#" class="book--now">
                
                    </a>
                    <a href="#" class="button--link button--flex"
                      >Ver outros.
                      <i class="bx bx-right-arrow-alt button__icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
      <script src="./script.js"></script>
    </body>
  </html>
  