<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>P&P</title>
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
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Serviços</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">Entregas</a>
            </li>
            <li class="nav__item">
              <a href="#trick" class="nav__link">Produtos</a>
            </li>
            <li class="nav__item">
              <a href="#new" class="nav__link">Descontos</a>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>

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
      <!-- CATEGORY -->
      <section class="section category">
        <h2 class="section__title">
          Melhores <br />
          Categorias de serviços
        </h2>
        <div class="category__container container grid">
          <div class="category__data">
            <img
              src="tosa.png"
              alt=""
              class="category__img"
        
            />
            <h3 class="category__title">Banho e Tosa</h3>
            <p class="category__description">
              Pacote completo para banho e tosa.
            </p>
          </div>
          <div class="category__data">
            <img
              src="remedio.png"
              alt=""
              class="category__img"
            
            />
            <h3 class="category__title">Remédio</h3>
            <p class="category__description">
              Grande variedade de remédios.
            </p>
          </div>
          <div class="category__data">
            <img
              src="comida.png"
              alt=""
              class="category__img"
            />
            <h3 class="category__title">Ração</h3>
            <p class="category__description">
              Todos os tipos de rações.
            </p>
          </div>
        </div>
      </section>
      <!-- ABOUT -->
      <section class="section about" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              Serviços de <br />
              Entrega
            </h2>
            <p class="about__description">
              Compre On-Line e receba direto na sua casa.<br>
              A um latido de distância de você!
            </p>
            <a href="#" class="book--now">
              <img
                src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg"
                alt=""
              />
            </a>
          </div>
          <img
            src="entrega.png"
            alt=""
            class="about__img"
          />
        </div>
      </section>
      <!-- TRICK OR TREAT -->
      <section class="section trick" id="trick">
        <h2 class="section__title">Produtos</h2>
        <div class="trick__container container grid">
          <div class="trick__content">
            <img
              src="dinossauro.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Brinquedo</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$14.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
          <div class="trick__content">
            <img
              src="https://assets.codepen.io/7773162/trick-treat2-img.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Petiscos</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$8.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
          <div class="trick__content">
            <img
              src="coleira.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Coleira</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$19.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
          <div class="trick__content">
            <img
              src="cama.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Casinha</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$39.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
          <div class="trick__content">
            <img
              src="tigelas.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Tigelas</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$19.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
          <div class="trick__content">
            <img
              src="caixa.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Caixa de Transporte</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">R$79.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
        </div>
      </section>
      <!-- DISCOUNT -->
      <section class="section discount">
        <div class="discount__container container grid">
          <div class="discount__data">
            <h2 class="discount__title">
           Podutos com <br />
              Descontos
            </h2>
            <a href="#" class="book--now">
              <img
                src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg"
                alt=""
              />
            </a>
          </div>
          <img
            src="etiqueta.png"
            alt=""
            class="discount__img"
          />
        </div>
      </section>
      <!-- NEW ARRIVALS -->
      <section class="section new" id="new">
        <h2 class="section__title">Produtos</h2>
        <div class="new__container container">
          <div class="swiper new-swiper">
            <div class="swiper-wrapper">
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="brinquedo de borracha.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Brinquedos de borracha</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$9.99</span>
                  <span class="new__discount">R$14.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="chaveiro.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Ursinho de pelucia</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$11.99</span>
                  <span class="new__discount">R$21.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="comida para gato.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">ração para gato</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$29.99</span>
                  <span class="new__discount">R$49.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="Petisco.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Petisco para Gato</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$4.99</span>
                  <span class="new__discount">R$9.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="peixe.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Peixe</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$7.99</span>
                  <span class="new__discount">R$12.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">
                  <img
                    src="https://assets.codepen.io/7773162/svgviewer-output+%286%29_1.svg"
                    alt=""
                  />
                </div>
                <img
                  src="cortador.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Cortador de Unha</h3>
                <span class="new__subtitle">por apenas</span>
                <div class="new__prices">
                  <span class="new__price">R$7.99</span>
                  <span class="new__discount">R$14.99</span>
                </div>
                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- OUR NEWSLETTER -->
      <section class="section newsletter">
        <div class="newsletter__container container">
          <h2 class="section__title">Our Newsletter</h2>
          <p class="newsletter__description">
            Promotion new products and sales. Directly to your inbox
          </p>
          <form action="" class="newsletter__form">
            <input
              type="text"
              placeholder="Enter your email"
              class="newsletter__input"
            />
            <a href="#" class="book--now">
              <img
                src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg"
                alt=""
              />
            </a>
          </form>
        </div>
      </section>
    </main>
    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
