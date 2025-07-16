import ProdutoCard from '../../Components/produto.js';

const div = document.querySelector("cardProduto");

async function carregarProdutos() {
  try {
    const response = await fetch("product");
    const produtos = await response.json();
    console.log(produtos);

    produtos.forEach(produto => {
      const precoAntigo = parseFloat(produto.valor);
      const desconto = parseFloat(produto.desconto);
      const precoNovo = (precoAntigo - (precoAntigo * desconto / 100)).toFixed(2);

      div.innerHTML += ProdutoCard({
        image: produto.imagem,
        desconto: desconto,
        titulo: produto.name_produto,
        precoAntigo: precoAntigo.toFixed(2),
        precoNovo: precoNovo
      });
    });
  } catch (error) {
    console.error("Erro ao carregar produtos:", error);
  }
}

carregarProdutos();
