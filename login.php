<!-- Modal -->
<div class="modal fade " id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h3 class="modal-title " id="exampleModalLabel">Login to your account</h3>
                    <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col py-3">
                            <label for="email" class="text-muted py-3">Enter your e-mail address</label>
                            <input type="email" name="email" placeholder="ex : jhondoe@exemple.com" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3">
                            <label for="psw" class="text-muted py-3">Enter your password</label>
                            <input type="password" name="psw" placeholder="******" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 ">
                            <input type="checkbox" name="remember_me">
                            Remember Me
                        </div>
                        <div class="col-6">
                            <a href="">Forgot your password?</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <a href="#">You don't have an account ? create one!</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>