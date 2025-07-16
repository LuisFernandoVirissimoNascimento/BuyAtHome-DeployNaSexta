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
        desconto: 15
    },
    {
        id: 3,
        moeda: 30,
        desconto: 20
    },
    {
        id: 4,
        moeda: 40,
        desconto: 25
    },
    {
        id: 5,
        moeda: 60,
        desconto: 35
    },
    {
        id: 6,
        moeda: 80,
        desconto: 50
    }
];

itens_desconto.forEach(item => {
    div.innerHTML += cardDesconto(item);
});
