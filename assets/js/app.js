var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px";

function menucelular () {
    if(MenuItens.style.maxHeight == "0px") {
        MenuItens.style.maxHeight = "200px";
    } else {
        MenuItens.style.maxHeight = "0px";
    }
}

/*novo 0505*/

function carregarPedidos() {
    const tableBody = document.getElementById('pedido-table-body');
    const totalPrice = document.getElementById('total-price'); // Elemento para exibir o total

    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    let totalPriceValue = 0;

    tableBody.innerHTML = '';

    pedidos.forEach((pedido, index) => {
        const row = tableBody.insertRow();
        
        // Inserir a imagem do produto com estilos inline

        // Inserir o nome do produto
        const cellNome = row.insertCell(0);
        cellNome.textContent = pedido.nome;

        // Inserir o preço do produto
        const cellPreco = row.insertCell(1);
        cellPreco.textContent = `R$ ${pedido.preco}`;

        const cellRemover = row.insertCell(2);
        
        // Botão de remoção
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remover';
        removeButton.onclick = () => removerProduto(index); // Corrigido para passar o índice corretamente
        cellRemover.appendChild(removeButton);

        // Adicionar o preço do produto ao total
        totalPriceValue += parseFloat(pedido.preco);
    });

    // Exibir o total na tela
    totalPrice.textContent = `Total: R$ ${totalPriceValue.toFixed(2)}`;
}

// Função para remover o produto
function removerProduto(index) {
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.splice(index, 1); // Remove o pedido com o índice especificado
    localStorage.setItem('pedidos', JSON.stringify(pedidos)); // Atualiza o localStorage
    carregarPedidos(); // Recarrega a tabela de pedidos
}

// Chamando a função para carregar os pedidos ao carregar a página
window.onload = carregarPedidos;
