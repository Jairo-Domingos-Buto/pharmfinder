<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PharmFinder - Encontre Medicamentos Perto de Você</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href={{asset('resources/css/home.css')}} />
</head>

<body>
  <header>
    <div class="logo">
      <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path
          d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM10 4h4v2h-4V4zm6 11h-3v3h-2v-3H8v-2h3v-3h2v3h3v2z" />
      </svg>
      <h1>PharmFinder</h1>
    </div>
    <nav>
      <div class="nav-links">
        <a href="#features">Recursos</a>
        <a href="#how-it-works">Como Funciona</a>
        <a href="login">Entrar</a>
        <a href="register" id="cta-button">Cadastrar-se</a>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Encontre medicamentos perto de você</h1>
        <p>
          Compare preços, localize farmácias e economize tempo e dinheiro na
          busca pelos seus medicamentos.
        </p>
        <a href="register" class="cta-button">Comece Agora</a>
      </div>
      <div class="hero-image">
        <svg viewBox="0 0 200 200" fill="none">
          <circle cx="100" cy="100" r="80" fill="white" opacity="0.1" />
          <path
            d="M140 80h-20V60c0-11.046-8.954-20-20-20H80c-11.046 0-20 8.954-20 20v20H40c-11.046 0-20 8.954-20 20v60c0 11.046 8.954 20 20 20h100c11.046 0 20-8.954 20-20V100c0-11.046-8.954-20-20-20zM70 60c0-5.523 4.477-10 10-10h20c5.523 0 10 4.477 10 10v20H70V60zm50 90h-20v20H80v-20H60v-20h20V90h20v40h20v20h20v-20z"
            fill="white" />
        </svg>
      </div>
    </div>
  </section>

  <section id="features" class="features">
    <h2 class="section-title">Recursos</h2>
    <div class="features-grid">
      <div class="feature-card">
        <svg class="feature-icon" viewBox="0 0 24 24" fill="currentColor">
          <path
            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
        </svg>
        <h3>Localizacao em Tempo Real</h3>
        <p>
          Encontre farmacias proximas a voce com precos atualizados dos
          medicamentos.
        </p>
      </div>
      <div class="feature-card">
        <svg class="feature-icon" viewBox="0 0 24 24" fill="currentColor">
          <path
            d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 3c0 .55.45 1 1 1h1l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1.003 1.003 0 0020 4H5.21l-.67-1.43a.993.993 0 00-.9-.57H2c-.55 0-1 .45-1 1zm16 15c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
        </svg>
        <h3>Comparacao de Precos</h3>
        <p>
          Compare precos entre diferentes farmacias e encontre a melhor
          oferta.
        </p>
      </div>
      <div class="feature-card">
        <svg class="feature-icon" viewBox="0 0 24 24" fill="currentColor">
          <path
            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z" />
        </svg>
        <h3>Perfil Personalizado</h3>
        <p>
          Salve suas pesquisas e medicamentos favoritos para consultas
          futuras.
        </p>
      </div>
    </div>
  </section>

  <section id="how-it-works" class="how-it-works">
    <h2 class="section-title">Como Funciona</h2>
    <div class="steps">
      <div class="step-card">
        <div class="step-number">1</div>
        <h3>Cadastre-se</h3>
        <p>Crie sua conta gratuitamente em poucos segundos.</p>
      </div>
      <div class="step-card">
        <div class="step-number">2</div>
        <h3>Busque Medicamentos</h3>
        <p>Digite o nome do medicamento que você precisa.</p>
      </div>
      <div class="step-card">
        <div class="step-number">3</div>
        <h3>Compare e Economize</h3>
        <p>Veja os preços e escolha a melhor opção para você</p>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="cta-content">
      <h2>Comece a economizar hoje mesmo</h2>
      <p>
        Junte-se a milhares de pessoas que já estão economizando tempo e
        dinheiro com o PharmFinder.
      </p>
      <a href="register" class="cta-button">Criar Conta Grátis</a>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>PharmFinder</h3>
        <p>Sua plataforma de busca de medicamentos.</p>
      </div>
      <div class="footer-section">
        <h3>Links úteis</h3>
        <ul class="footer-links">
          <li><a href="#features">Recursos</a></li>
          <li><a href="#how-it-works">Como Funciona</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="register">Cadastro</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Contato</h3>
        <ul class="footer-links">
          <li>contato@pharmfinder.com</li>
          <li>0800 123 4567</li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Redes Sociais</h3>
        <div class="social-links">
          <a href="https://facebook.com">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
            </svg>
          </a>
          <a href="https://twitter.com">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
            </svg>
          </a>
          <a href="https://instagram.com">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>
          <p>JAIRO BUTO</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
