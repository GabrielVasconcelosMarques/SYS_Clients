const fillForm = (adress) => {
    document.getElementById('bairroCliente').value = adress.bairro;
    document.getElementById('cidadeCliente').value = adress.localidade;
    document.getElementById('ruaCliente').value = adress.logradouro;
}

const queryCep = async() => {
    const cep = document.getElementById('cepCliente').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;

    if(cep.length != 9){
        alert("preencha os 8 dígitos do CEP.")
    }

    const data = await fetch(url);
    const adress = await data.json();

    if(adress.hasOwnProperty('erro')){
        alert('CEP informado não existe');
    } else {
        fillForm(adress);
    }
    
 
}

document.getElementById('consultar').addEventListener('click', queryCep);