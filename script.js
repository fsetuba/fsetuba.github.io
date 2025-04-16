function click() {
    if (event.button==2) {
    alert('Erro')
    alert('Função desativada!')}
    }
    document.onmousedown=click

    var caixaTexto = document.getElementById('nome');

    var memoria = '';

    function somar (Enviar){
        memoria += Enviar;
        caixaTexto.value = memoria;
        console.log(memoria);

    }

    function bomdia() {
        node = document.createElement("P");
        textnode = document.createTextNode("Bom Dia!");
        node.appendChild(textnode);
        document.body.appendChild(node); 
      }
