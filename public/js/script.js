function confirmDelete() {
  if (confirm("Deseja apagar este registro?")) {
    return true;
  }else{
    return false;
  }
}

function verificarSession() {
  // Verifica se a sessão existe
  var sessionValue = sessionStorage.getItem('message')

  // Exibe a sessão em um alerta
  if (sessionValue !== null) {
      alert(sessionValue);
  }
}

document.addEventListener("DOMContentLoaded", function() {
  verificarSession();
});