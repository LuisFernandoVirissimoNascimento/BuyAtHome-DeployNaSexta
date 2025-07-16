import ProdutoCard from '../../Components/produto.js';

const div = document.querySelector("cardProduto");

const produtos = [
  {
    image: "images/card product/produto.png",
    desconto: 10,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 8.99,
    precoNovo: 7.99,
  },
  {
    image: "images/card product/produto.png",
    desconto: 10,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 8.99,
    precoNovo: 7.99,
  },
  {
    image: "images/card product/produto.png",
    desconto: 10,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 8.99,
    precoNovo: 7.99,
  },
  {
    image: "images/card product/produto.png",
    desconto: 10,
    titulo: "Requeijão Extra cremoso Danone",
    precoAntigo: 8.99,
    precoNovo: 7.99,
  }
];

produtos.forEach(produto => {
  div.innerHTML += ProdutoCard(produto);
});