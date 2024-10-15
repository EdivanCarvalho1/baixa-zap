document.querySelector('.click-btn-down').addEventListener('click', downloadVideo);

async function downloadVideo() {
    const videoUrl = document.querySelector('.link').value;
    const loadingMessage = document.querySelector('#loadingMessage');

    loadingMessage.style.display = 'block';

    try {
        const response = await fetch('api.php', {
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
        thumbnailElement.innerHTML = `<img src="${data.thumbnail}" alt="Imagem do Vídeo" style="width: 200px; height: auto;">`;

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