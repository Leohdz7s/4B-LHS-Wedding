<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                REGISTRO
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    REGISTRO
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Register Here ========= -->
<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        padding: 25px;
        border-radius: 15px;
    }
    h2 {
        color: #E0AF61;
        text-align: center;
        margin-bottom: 20px;
        font-family: "Arial", Arial;
    }

    label {
        font-size: 15px;
        font-family: "Arial", Arial;
    }

    .button-container {
        text-align: center;
        margin-top: 10px; 
        margin-bottom: 10px;
    }

    button {
        background-color: #84b6f4;
        border: none;
        font-size: 12px; 
        font-family: "Arial", Arial;
    }
</style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Registro</h2>
                <form method="post">
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span> -->
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="registroNombre" />
                    </div>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span> -->
                        <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name="registroEmail" />
                    </div>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span> -->
                        <input type="password" class="form-control" placeholder="Ingrese una contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="registroPassword" />
                    </div>

                    <div class="button-container">
                        <button type="submit" class="btn btn-warning">
                            Inscribirse
                        </button>
                    </div>

                    <?php
                    $registro = controladorFormularios::ctrRegistro();
                    if ($registro == "ok") {
                        echo '<script>
                        if(window history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                        </script>';
                        echo '<div class="alert alert-success">Usuario registrado</div>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
