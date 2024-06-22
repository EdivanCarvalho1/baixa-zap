<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Baixar vídeos do YouTube, TikTok, CapCut, Facebook, Instagram, Snapchat, Twitter, LinkedIn, Tumblr e Telegram de forma rápida, segura e gratuita">
  <meta name="robots" content="index, follow">
  <meta name="language" content="pt-BR">
  <meta name="keywords"
    content="baixar vídeo YouTube, baixar vídeos do YouTube, baixar vídeo TikTok, baixar vídeos do TikTok, baixar vídeo CapCut, baixar vídeos do CapCut, baixar vídeo Facebook, baixar vídeos do Facebook, baixar vídeo Instagram, baixar vídeos do Instagram, baixar vídeo Snapchat, baixar vídeos do Snapchat, baixar vídeo Twitter, baixar vídeos do Twitter, baixar vídeo LinkedIn, baixar vídeos do LinkedIn, baixar vídeo Tumblr, baixar vídeos do Tumblr, baixar vídeo Telegram, baixar vídeos do Telegram, download rápido de vídeos, download seguro de vídeos, download gratuito de vídeos, baixar vídeos online, download de vídeos redes sociais">
  <title>Baixar Zap</title>
  <link rel="icon" href="favicon.ico" type="image/png">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body onload="showCookieConsent()">
  <!-- Google Tag Manager (noscript) -->
  <div>
    <div id="cookie-consent">
      <p>Este site usa cookies para melhorar sua experiência. Ao continuar navegando, você concorda com o uso de
        cookies.</p>
      <button onclick="agreeToCookies()">Concordo</button>
    </div>
    <header class="header">
      <a href="/">
        <h1>Baixe Vídeos Facilmente <span>BaixarZap</span></h1>
      </a>
      <div class="menu-toggle">&#9776;</div>
      <nav>
        <a href="/" class="no-underline">Início</a>
        <a href="/sobre" class="no-underline">Sobre Nós</a>
        <a href="/termos" class="no-underline">Termos e Condições</a>
        <a href="/privacidade" class="no-underline">Política de Privacidade</a>
      </nav>
    </header>

    <main>
      <div class="card-download text-white">
        <h1><span>BaixarZap</span>Insira a URL</h1>
        <h1>do vídeo</h1>
        <h1 class="text-lg">Descubra uma maneira fácil e rápida de baixar vídeo do YouTube e de diversas outras
          plataformas, como TikTok, CapCut, Facebook, Instagram, Snapchat, Twitter, LinkedIn, Tumblr e Telegram.
        </h1>
        <h1 class="text-lg">Nosso serviço detecta automaticamente de qual plataforma é o vídeo.
        </h1>
        <label class="text-lg"><b>URL:</b></label>
        <input type="text" name="link" class="link text-lg border border-black p-3" required>
        <div class="download-video">
          <button class="click-btn-down text-lg">Baixar</button>
        </div>
        <div class="center-content">
          <div id="loadingMessage" class="loading-message" style="display:none; color:white;">O vídeo começará a ser
            baixado...</div>
          <div id="title" class="title" style="display:none;"></div>
          <div id="videoThumbnail" class="thumbnail" style="display:none;"></div>
          <div id="downloadLinks" class="text-lg buttondownload" style="display:none;"></div>
        </div>

      </div>


      <section class="instructions-section">
        <h2>Como Baixar Vídeo do YouTube</h2>
        <p>Descubra a maneira mais fácil e rápida de baixar vídeo YouTube com nosso serviço intuitivo. Simplifique o
          processo de download seguindo alguns passos simples e aproveite suas mídias favoritas offline.</p>
        <ul>
          <li><span>Escolha o Vídeo:</span> Navegue até o vídeo no YouTube que deseja baixar.</li>
          <li><span>Copie o Link:</span> Copie o link do vídeo e navegue para o BaixarZap</li>
          <li><span>Cole no Nosso Site:</span> Cole o link na barra de download.</li>
          <li><span>Selecione a Qualidade:</span> Escolha a qualidade do vídeo.</li>
          <li><span>Baixe o Vídeo:</span> Clique nos três pontinhos do vídeo e faça o download.</li>
        </ul>
        <h2>Vantagens do Nosso Serviço</h2>
        <p>Nosso serviço para baixar vídeo YouTube oferece várias vantagens que tornam o processo simples e eficiente:
        </p>
        <ul>
          <li><span>Rápido:</span> Obtenha seus vídeos do YouTube em questão de segundos.</li>
          <li><span>Seguro:</span> Garantimos a segurança de seus dados durante todo o processo de download.</li>
          <li><span>Gratuito:</span> Nosso serviço é completamente gratuito, permitindo que você baixe vídeos do YouTube
            sem custos adicionais.</li>
        </ul>
        <p>Experimente nosso serviço e aproveite a praticidade e segurança para baixar seus vídeos favoritos do YouTube
          com facilidade.</p>
        <h2>Como Baixar Vídeos de Outras Plataformas </h2>
        <p>Além de permitir baixar vídeo YouTube, nosso serviço suporta várias outras plataformas populares, garantindo
          a
          mesma facilidade e eficiência.
        </p>
        <ul>
          <li><span>TikTok:</span> Baixe vídeos do TikTok com rapidez, ideal para armazenar seus clipes favoritos.
          </li>
          <li><span>CapCut:</span> Salve seus vídeos editados do CapCut diretamente no seu dispositivo.
          </li>
          <li><span>Facebook:</span> Obtenha vídeos do Facebook de forma segura e rápida.
          </li>
          <li><span>Instagram:</span>Baixe vídeos do Instagram, incluindo Reels e IGTV, sem complicações.
          </li>
          <li><span>Snapchat:</span> Salve vídeos do Snapchat facilmente, preservando suas memórias.
          </li>
          <li><span>Twitter:</span> Baixe vídeos do Twitter para acesso offline imediato.
          </li>
          <li><span>LinkedIn:</span> Salve vídeos do LinkedIn, ideal para conteúdos profissionais.
          </li>
          <li><span>Tumblr:</span> Baixe vídeos do Tumblr de forma simples e eficiente.
          </li>
          <li><span>Telegram:</span> Obtenha vídeos do Telegram rapidamente, mantendo a qualidade.
          </li>
        </ul>
        <p>Nosso serviço detecta automaticamente a plataforma do vídeo, tornando o processo de download ainda mais
          conveniente para você.
        </p>
        <p>


        </p>
      </section>

    </main>

    <footer>
      <p> Nosso serviço permite que você baixe vídeos de várias plataformas para uso pessoal. No entanto, não nos
        responsabilizamos pelo uso indevido dos vídeos baixados ou por quaisquer violações de direitos autorais. <br>É
        sua
        responsabilidade garantir que o uso dos vídeos esteja em conformidade com os termos de serviço e políticas de
        cada plataforma. Baixe vídeos de maneira responsável e respeite os direitos dos criadores de conteúdo.
        <a href="mailto:contato@baixarzap.com.br">contato@baixarzap.com.br.</a>
      </p>
      <p>© 2024 BaixarZap 4.0.0 (164). Todos os direitos reservados</p>
    </footer>
  </div>
  <script type="text/javascript">

    document.querySelector('.menu-toggle').addEventListener('click', function () {
      this.classList.toggle('active');
    });

    document.querySelector('.click-btn-down').addEventListener('click', downloadVideo);

    async function downloadVideo() {
      // Pega a URL do input
      const videoUrl = document.querySelector('.link').value;
      const loadingMessage = document.querySelector('#loadingMessage');

      // Mostra a mensagem de aviso
      loadingMessage.style.display = 'block';

      // Configurações para a requisição
      const options = {
        method: 'POST',
        url: 'API-URL'
        headers: {
          'x-rapidapi-key': 'API-KEY'
          'x-rapidapi-host': 'API-HOST'
          'Content-Type': 'application/json'
        },
        data: {
          url: videoUrl
        }
      };

      try {
        // Faz a requisição
        const response = await axios.request(options);
        console.log(response.data);

        // Pega os elementos da página
        const titleElement = document.querySelector('#title');
        const thumbnailElement = document.querySelector('#videoThumbnail');
        const downloadLinksElement = document.querySelector('#downloadLinks');

        // Atualiza o título e a miniatura
        titleElement.textContent = response.data.title;
        thumbnailElement.innerHTML = `<img src="${response.data.thumbnail}" alt="Thumbnail" style="width: 200px; height: auto;">`;

        // Limpa os links de download antigos
        downloadLinksElement.innerHTML = '';

        // Adiciona os novos links de download
        response.data.medias.forEach(media => {
          const linkElement = document.createElement('a');
          linkElement.href = media.url;
          linkElement.textContent = `Baixar ${media.quality}`;
          linkElement.classList.add('buttondownload');
          downloadLinksElement.appendChild(linkElement);
        });

        // Mostra as divs ocultas
        titleElement.style.display = 'block';
        thumbnailElement.style.display = 'block';
        downloadLinksElement.style.display = 'block';
      } catch (error) {
        console.error(error);
      } finally {
        // Esconde a mensagem de aviso
        loadingMessage.style.display = 'none';
      }
    }
    function setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      const expires = "expires=" + date.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
      const nameEQ = name + "=";
      const ca = document.cookie.split(';');
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    function showCookieConsent() {
      const consentElement = document.getElementById('cookie-consent');
      if (!getCookie('cookieConsent')) {
        consentElement.style.display = 'block';
      }
    }

    function agreeToCookies() {
      setCookie('cookieConsent', 'true', 30);
      const consentElement = document.getElementById('cookie-consent');
      consentElement.style.display = 'none';
    }
  </script>

</html>