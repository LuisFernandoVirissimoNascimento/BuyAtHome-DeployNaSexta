const cardDesconto = ({moeda, desconto, id}) => { 
    return `
    <div 
        class="desconto-card" 
        data-id="${id}" 
        data-moeda="${moeda}" 
        data-desconto="${desconto}"
    >
        <div class="moedas-group">
            <span class="card-moedas">${moeda}</span>
            <img class="card-icon" src="public/images/coin_icon.png" alt="coin_icon">
        </div>
        <h1 class="valor-desconto"><span>${desconto}</span>%</h1>
    </div>
    `;
};

export default cardDesconto;
