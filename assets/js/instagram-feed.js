const INSTAGRAM_FEED_CONFIG = {
  api: "https://instagram-feed-api-chi.vercel.app/api/instagram",

  limit: 6,

  // Exemplo: "portfolio"
  // Deixe vazio para mostrar todos os posts.
  tag: ""
};

async function carregarInstagramFeed() {
  const container = document.querySelector("#instagram-feed");

  if (!container) {
    return;
  }

  try {
    const params = new URLSearchParams();

    if (INSTAGRAM_FEED_CONFIG.limit) {
      params.set(
        "limit",
        INSTAGRAM_FEED_CONFIG.limit
      );
    }

    if (INSTAGRAM_FEED_CONFIG.tag) {
      params.set(
        "tag",
        INSTAGRAM_FEED_CONFIG.tag
      );
    }

    const url =
      `${INSTAGRAM_FEED_CONFIG.api}?${params.toString()}`;

    const response = await fetch(url);

    if (!response.ok) {
      throw new Error(
        "Erro ao carregar o feed do Instagram."
      );
    }

    const resultado = await response.json();
    const posts = resultado.posts || [];

    container.innerHTML = "";

    posts.forEach((post) => {
      const coluna = document.createElement("div");

      coluna.className = "col-6 col-md-4";

      coluna.innerHTML = `
        <a
          href="${post.url}"
          target="_blank"
          rel="noopener noreferrer"
          class="d-block"
        >
          <img
            src="${post.image}"
            alt="Publicação do Instagram"
            class="img-fluid w-100"
            loading="lazy"
          >
        </a>
      `;

      container.appendChild(coluna);
    });

  } catch (error) {
    console.error("Instagram Feed:", error);

    container.innerHTML = `
      <div class="col-12">
        <p>Não foi possível carregar o feed do Instagram.</p>
      </div>
    `;
  }
}

document.addEventListener(
  "DOMContentLoaded",
  carregarInstagramFeed
);