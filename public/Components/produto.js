const ProdutoCard = ({ image, desconto, titulo, precoAntigo, precoNovo }) => {
  return `
  <div class="product">
    <div class="product-image-container">
        <div class="product-image-background">
            <img class="product-image" src='public/${image}' alt="imagem do produto">
        </div>
        <div class="product-cupom-container">
            <span class="product-cupom">${desconto}%</span>
            <img class="product-flag" src="public/images/card product/bandeira.svg">
        </div>
    </div>
    <div class="product-info-container">
        <h1 class="product-name">${titulo}</h1>
        <div class="product-price-container">
            <span class="product-price-old">R$ ${precoAntigo}</span>
            <span class="product-price-cupom">R$ ${precoNovo}</span>
        </div>
    </div>
  </div>`;
};

export default ProdutoCard;
