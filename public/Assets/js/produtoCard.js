import ProdutoCard from '../../Components/produto.js';

const div = document.querySelector("cardProduto");

const produtos = [
  {
    image: "images/card product/kro_cebola.png",
    desconto: 10,
    titulo: "Kró Cebola",
    precoAntigo: 4.49,
    precoNovo: 4.05,
  },
  {
    image: "images/card product/maionese.webp",
    desconto: 5.00,
    titulo: "Maionese",
    precoAntigo: 14.95,
    precoNovo: 14.15,
  },
  {
    image: "images/card product/produto.png",
    desconto: 7.5,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 9.99,
    precoNovo: 9.24,
  },
  {
    image: "images/card product/produto.png",
    desconto: 12,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 8.99,
    precoNovo: 7.89,
  }
];

produtos.forEach(produto => {
  div.innerHTML += ProdutoCard(produto);
});