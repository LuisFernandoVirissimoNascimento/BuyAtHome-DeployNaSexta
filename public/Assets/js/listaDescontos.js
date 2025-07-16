import cardDesconto from "./components/card-desconto.js";

const div = document.querySelector("cardDesconto");

let itens_desconto = [
    {
        id: 1,
        moeda: 10,
        desconto: 10
    },
    {
        id: 2,
        moeda: 20,
        desconto: 20
    },
    {
        id: 3,
        moeda: 30,
        desconto: 30
    }
];

itens_desconto.forEach(item => {
    div.innerHTML += cardDesconto(item);
});
