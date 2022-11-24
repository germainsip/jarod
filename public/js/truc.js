const truc = document.querySelector('.truc')
// const Swal = require('sweetalert2')
truc.addEventListener("click", confirmation)

function loadAlert(e) {
    e.preventDefault();
    
    Swal.fire({
        title: "C'est Bon ça!",
        text: 'Pierre ça marche',
        icon: 'info',
        confirmButtonText: 'Cool'
      })
}
function confirmation(e) {
  e.preventDefault();

  var url = e.currentTarget.getAttribute('href')
  console.log(url)
  Swal.fire({
      icon: 'warning',
      title: 'Are you sure?',
      text: 'This action cannot be undone!',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, recall!'
  }).then((result) => {
      if (result.value) {
          window.location.href=url;
      }
  })
}