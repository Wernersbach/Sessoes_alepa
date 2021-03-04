<div class="container">
    <div class="">
        
        <div class="card p-2 position-absolute top-50 start-50 translate-middle" style="width: 19rem;">
            
            <div class="card-header">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" name="matricula" class="form-control" placeholder="Username" aria-label="Matricula" aria-describedby="Matricula">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        <input type="password" name="senha" class="form-control" placeholder="Username" aria-label="Senha" aria-describedby="senha">
                    </div>

                    <div class="d-grid gap-2">
                        <input class="btn btn-primary" type="submit" value="Fazer login">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>