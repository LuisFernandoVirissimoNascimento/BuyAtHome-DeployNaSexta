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


document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.desconto-card');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(c => c.classList.remove('ativo'));
            card.classList.add('ativo');
        });
    });
});

function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toast-container');
    const currentToasts = toastContainer.querySelectorAll('.toast');
    if (currentToasts.length >= 5) return;

    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;

    const closeBtn = document.createElement('button');
    closeBtn.textContent = '×';
    closeBtn.className = 'toast-close-btn';
    closeBtn.onclick = () => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    };

    toast.appendChild(closeBtn);
    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('show');
    }, 10);
}



function generateRandomCode() {
    let code = '';
    for (let i = 0; i < 10; i++) {
        code += Math.floor(Math.random() * 10);
    }
    return code;
}

document.addEventListener('DOMContentLoaded', () => {
    const comprarButton = document.querySelector('.btn-desconto');

    comprarButton.addEventListener('click', () => {
        const selectedCard = document.querySelector('.desconto-card.ativo');

        if (!selectedCard) {
            showToast('Selecione um desconto primeiro!', 'error');
            return;
        }

        const desconto = parseInt(selectedCard.dataset.desconto, 10);
        const moeda = parseInt(selectedCard.dataset.moeda, 10);

        fetch('comprar-desconto', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `desconto=${desconto}&moeda=${moeda}`,
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const code = generateRandomCode();
                showToast(`Cupom gerado: ${code}`, 'success');

                document.querySelector('.coin').textContent = data.nova_quantidade;
            } else {
                showToast(data.message, 'error');
            }
        })
        .catch(err => {
            console.error('Erro ao comprar desconto:', err);
            showToast('Erro ao processar a compra.', 'error');
        });
    });
});


