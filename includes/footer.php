<script>
  function ajax(enlace){
    const http = new XMLHttpRequest();
    const url = enlace;

    http.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          document.getElementById("response").innerHTML = this.responseText;
      }
    }

    http.open("GET", url);
    http.send();

  }
  document.getElementById("botonphp").addEventListener("click", function(){
    ajax('http://localhost/cursos/login.php');
  });
  document.getElementById("botongit").addEventListener("click", function(){
    ajax('http://localhost/cursos/login.php');
  });
  document.getElementById("botonmark").addEventListener("click", function(){
    ajax('http://localhost/cursos/login.php');
  });
  document.getElementById("botonpy").addEventListener("click", function(){
    ajax('http://localhost/cursos/login.php');
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>