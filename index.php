<?php
include "includes/header.php";
include 'db.php';
?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
} else {
    // Inicio sesión! 
}
?>
<body class="bg-dark p-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="list-group">
                <button onclick="cambiarurl('course/curso_php.html','response')" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-php"></i> PHP</button>
                <button onclick="cambiarurl('course/curso_git.html','response')" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-git"></i> <i class="fab fa-github"></i> Git y github</button>
                <button onclick="cambiarurl('course/curso_markdown.html','response')" id="botonmark" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-markdown"></i> Markdown</button>
                <button onclick="cambiarurl('course/curso_python.html','response')" id="botonpy" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-python"></i> Python</button>
                <button onclick="cambiarurl('course/curso_python.html','response')" id="botonpy" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-linux"></i> Linux</button>
                <a href="salir.php" onclick="cambiarurl('course/curso_php.html','response')" class="btn btn-rosa rounded-0 border-3 border-light text-start mb-1 text-light"> Salir</a>
            </div>
        </div>
        <div class="col-lg-8 border border-light p-0">
            <div id="response" class="p-4"><h1>Hola</h1></div>
        </div>
    </div>
<?php
include "includes/footer.php";
?>