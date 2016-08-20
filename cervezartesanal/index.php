<!DOCTYPE html>
<html>
<body>
<p>Introduce tu año de nacimiento:</p>
<input id="numb">
<button type="button" onclick="myFunction()">Submit</button>
<script>
function myFunction() {
    var x, text;
    x = document.getElementById("numb").value;
    if (isNaN(x) || x < 1810 || x > 1998) {
        alert("Lo sentimos no puedes ingresar, regresa en unos años");
    } else {
        text = window.location='http://127.0.0.1/final/index.html'; 
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>





