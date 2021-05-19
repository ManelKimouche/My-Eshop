<!-- Modal -->
<div class="modal fade  " id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title " id="exampleModalLabel1">Create your account</h3>
                <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="register_form">
                <div class="modal-body">

                    <div class="row px-2">
                        <div class="msg"></div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-6 col-sm-12 ">
                            <label for="fname" class="text-muted">Enter your first name :</label>
                            <input id="fname" type="text" name="fname" placeholder="ex : Jhon" class="form-control form-control-lg">
                            <div class="msg_fname"></div>
                        </div>
                        <div class="col-lg-6 col-sm-12 ">
                            <label for="lname" class="text-muted">Enter your last name</label>
                            <input id="lname" type="text" name="lname" placeholder="ex : Doe" class="form-control form-control-lg">
                            <div class="msg_lname"></div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col ">
                            <label for="address" class="text-muted">Enter your address</label>
                            <input id="address" type="text" name="address" placeholder="ex : Rue XX, Countery..." class="form-control form-control-lg">
                            <div class="msg_address"></div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col ">
                            <label for="email" class="text-muted">Enter your e-mail</label>
                            <input id="email" type="email" name="email" placeholder="ex : jhondoe@exemple.com." class="form-control form-control-lg">
                            <div class="msg_email"></div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-6 col-sm-12">
                            <label for="psw" class="text-muted">Enter a password</label>
                            <input id="psw" type="password" name="pws" placeholder="****" class="form-control form-control-lg">
                            <div class="msg_psw"></div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="psw" class="text-muted">Retape your passeword</label>
                            <input id="psw1" type="password" name="psw" placeholder="****" class="form-control form-control-lg">
                            <div class="msg_psw1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-2 ">
                            <input type="checkbox" name="remember_me">
                            Remember Me
                        </div>

                    </div>
                    <div class="modal-footer ">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <a href="#">You already have an account? click here!</a>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-lg-2 col-sm-6">
                                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                            </div>
                        </div>



                    </div>

            </form>
        </div>
    </div>
</div>