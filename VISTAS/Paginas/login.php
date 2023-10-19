   <section class="breadcumd__banner">
        <div class="container">
            <div class="breadcumd__wrapper center">
                <h1 class="left__content">
                    Iniciar Sesión
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
                        Iniciar Sesión
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            padding: 30px;
            border-radius: 15px;
            /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
        }

        h2 {
            color: #E0AF61;
            text-align: center;
            margin-bottom: 30px;
            font-family: "Arial", Arial;
        }

        label {
            font-size: 18px;
            font-family: "Arial", Arial;
            color: black;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-control {
            max-width: 100%;
            color: black;
            margin: 10px 0;
        }

        button {
            background-color: #fdfd96;
            border: none;
            font-size: 18px;
            font-family: "Arial", Arial;
            display: block;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Iniciar Sesión</h2>
                <form method="post" class="form-container">
                    <label for="loginEmail">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" aria-label="Correo Electrónico" aria-describedby="basic-addon1" name="loginEmail" />
                    </div>
                    <label for="loginPassword">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="loginPassword" />
                    </div>
                    <?php
                    $login = new controladorFormularios();
                    $login->ctrLogin();
                    ?>
                    <button type="submit" class="btn btn-warning">
                        Ingresar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
