const inputs = document.querySelectorAll("[required]");
inputs.forEach( (elemento)=>{
    elemento.addEventListener("blur", (evento)=>{
        validaCampo(evento.target)
    });
});

function validaCampo(campo){
    const msnErro = campo.parentNode.querySelector("[data-erro]");
    if(campo.name ==="nome"){
        if(campo.value.length<5){
            msnErro.textContent = "digite o nome completo";
        }else{
            msnErro.textContent = "";
        }
    }
}

function validarFormulario() {
    var nomeInput = document.getElementById('nome');
    var emailInput = document.getElementById('email');
    var senhaInput = document.getElementById('senha');
  
    var nome = nomeInput.value.trim();
    var email = emailInput.value.trim();
    var senha = senhaInput.value.trim();
  
    var mensagemErro = document.getElementById('mensagemErro');
    mensagemErro.textContent = ''; // Limpar a mensagem de erro anterior
  
    var erroEncontrado = false;
  
    if (nome === '') {
      mensagemErro.textContent += 'Por favor, informe o nome.\n';
      erroEncontrado = true;
    }
  
    if (email === '') {
      mensagemErro.textContent += 'Por favor, informe o e-mail.\n';
      erroEncontrado = true;
    }
  
    if (senha === '') {
      mensagemErro.textContent += 'Por favor, informe a senha.\n';
      erroEncontrado = true;
    }
  
    // Outras validações específicas para cada campo podem ser adicionadas aqui
    // Por exemplo, validação do formato do e-mail, da força da senha, etc.
  
    if (!erroEncontrado) {
      // Se não houver erros, envie o formulário ou faça o processamento necessário
      alert('Formulário enviado com sucesso!');
      // document.getElementById('meuForm').submit(); // Submeter o formulário, se necessário
    }
  }
  