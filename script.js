function validateForm() {
    let x = document.forms["formdec"]["nombre"].value;
    if (x == "") {
      alert("El nombre debe ser completado");
      return false;
    }
    let z = document.forms["formdec"]["apellido"].value;
    if (z == "") {
      alert("El apellido debe ser completado");
      return false;
    }
    let e = document.forms["formdec"]["email"].value;
    if (e == "") {
      alert("El correo debe ser completado");
      return false;
    }
    let a = document.forms["formdec"]["consulta"].value;
    if (a == "") {
      alert("La consulta debe ser completada");
      return false;
    }
  };

const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () =>{
  navMenu.classList.toggle ("nav-menu-visible");
});
