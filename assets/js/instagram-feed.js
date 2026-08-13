async function carregarInstagramFeed() {
  const container = document.querySelector("#instagram-feed");

  try {
    const response = await fetch(
      "https://instagram-feed-api-chi.vercel.app/api/instagram"
    );

    if (!response.ok) {
      throw new Error("Erro ao carregar o feed do Instagram.");
    }

    const resultado = await response.json();
    const posts = resultado.data || [];

    container.innerHTML = "";

    posts.slice(0, 6).forEach((post) => {
      const imagem =
        post.media_type === "VIDEO"
          ? post.thumbnail_url
          : post.media_url;

      const coluna = document.createElement("div");
      coluna.className = "col-6 col-md-4";

      coluna.innerHTML = `
        <a
          href="${post.permalink}"
          target="_blank"
          rel="noopener noreferrer"
          class="d-block"
        >
          <img
            src="${imagem}"
            alt="Publicação do Instagram"
            class="img-fluid w-100"
            loading="lazy"
          >
        </a>
      `;

      container.appendChild(coluna);
    });

  } catch (error) {
    console.error(error);

    container.innerHTML = `
      <div class="col-12">
        <p>Não foi possível carregar o feed do Instagram.</p>
      </div>
    `;
  }
}

document.addEventListener("DOMContentLoaded", carregarInstagramFeed);