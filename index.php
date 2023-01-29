<?php
include "includes/header.php";
?>
<body class="bg-dark p-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="list-group">
                <button onclick="cambiarurl('course/curso_php.html','response')" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-php"></i> PHP</button>
                <button onclick="cambiarurl('course/curso_git.html','response')" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-git"></i> <i class="fab fa-github"></i> git y github</button>
                <button onclick="cambiarurl('course/curso_markdown.html','response')" id="botonmark" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-markdown"></i> markdown</button>
                <button onclick="cambiarurl('course/curso_python.html','response')" id="botonpy" class="btn btn-primary rounded-0 border-3 border-light text-start mb-1"><i class="fab fa-python"></i> python</button>
                <button onclick="cambiarurl('course/curso_php.html','response')" class="btn btn-rosa rounded-0 border-3 border-light text-start mb-1 text-light"> Salir</button>
            </div>
        </div>
        <div class="col-lg-8 border border-light p-0">
            <nav class="navbar bg-primary" data-bs-theme="dark">
                <div class="container-fluid">
                    <h3>Anotación</h3>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark" type="search" placeholder="Buscar" aria-label="Search">
                    </form>
                </div>
            </nav>
            <div id="response" class="p-3"><h1>Hola</h1></div>
        </div>
    </div>
<?php
include "includes/footer.php";
?>