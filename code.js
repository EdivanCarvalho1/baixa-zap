document.querySelector('.menu-toggle').addEventListener('click', function () {
    this.classList.toggle('active');
});
document.querySelector('.click-btn-down').addEventListener('click', downloadVideo);

async function downloadVideo() {
    const videoUrl = document.querySelector('.link').value;
    const loadingMessage = document.querySelector('#loadingMessage');

    loadingMessage.style.display = 'block';

    try {
        const response = await fetch('https://baixarzap.com.br/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ url: videoUrl })
        });

        if (!response.ok) {
            throw new Error('Erro ao fazer a requisição ao servidor');
        }

        const data = await response.json();

        const titleElement = document.querySelector('#title');
        const thumbnailElement = document.querySelector('#videoThumbnail');
        const downloadLinksElement = document.querySelector('#downloadLinks');

        titleElement.textContent = data.title;
        thumbnailElement.innerHTML = `<img src="${data.thumbnail}" alt="Thumbnail" style="width: 200px; height: auto;">`;

        downloadLinksElement.innerHTML = '';
        data.medias.forEach(media => {
            const linkElement = document.createElement('a');
            linkElement.href = media.url;
            linkElement.textContent = `Baixar ${media.quality}`;
            linkElement.classList.add('buttondownload');
            downloadLinksElement.appendChild(linkElement);
        });

        titleElement.style.display = 'block';
        thumbnailElement.style.display = 'block';
        downloadLinksElement.style.display = 'block';
    } catch (error) {
        console.error('Erro na requisição:', error);
    } finally {
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
