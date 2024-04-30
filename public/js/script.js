function confirmDelete() {
  if (confirm("Deseja apagar este registro?")) {
    return true;
  }else{
    return false;
  }
}

function messageSession() {
  var sessionValue = sessionStorage.getItem('message')

  if (sessionValue !== null) {
      alert(sessionValue);
  }

  sessionStorage.clear();
}

document.addEventListener("DOMContentLoaded", function() {
  messageSession();
});