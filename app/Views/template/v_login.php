<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url(); ?>/web/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" action="login/validate_usr" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Olvide la contraseña!</a>
                </div>
                <!-- ESTO SERIA PARA INFORMAR ERROR
                <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Usuario o Contraseña invalida.
		            </div>
		            <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            Deslogueo exitoso.
                </div>
              -->
            </div>
        </div>
    </div>
</body>


<!-- DEBE ESTAR CERRADO EL HTML DE LA ESTRUCTURA -->
</html>