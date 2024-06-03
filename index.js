// index.js

// Recupera il contenuto del file index.html
fetch('index.html')
    .then(response => response.text())
    .then(html => {
        // Crea un elemento HTML temporaneo per analizzare il contenuto
        const tempElement = document.createElement('div');
        tempElement.innerHTML = html;

        // Estrai l'iframe dal contenuto
        const iframeElement = tempElement.querySelector('iframe');

        // Se è presente un iframe nel file index.html, inseriscilo nel documento corrente
        if (iframeElement) {
            document.body.appendChild(iframeElement);
        }
    })
    .catch(error => {
        console.error('Errore durante il recupero del file index.html:', error);
    });
