 <script>
      function myFunc(elobjeto) {
  elobjeto.marca = "Toyota";
}
var mycar = {
  marca: "Honda",
  modelo: "Accord",
  año: 1998,
};

window.alert(mycar.marca);
myFunc(mycar);
window.alert(mycar.marca);
    </script>