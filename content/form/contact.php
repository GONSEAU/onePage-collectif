<section id="contact">
    <h2> Nous contacter !</h2>
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                    <div class="card cardContactTel">
                        <div class="card-body">
                        <img src="assets/img/logoRobinFinal.png" alt="" width="200" height="200" >
                            <p>par téléphone</p>
                            <button class="btn-lg btn-outline-dark col" type="submit">
                                <a href="tel:+0606060606">0606060606</a>
                                <i class="fas fa-phone-alt"></i>
                            </button>
                            <p>par mail</p>
                            <button class="btn-lg btn-outline-dark col" type="submit">
                                <a href="mailto:contact@example.com">contact@example.com</a>
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card cardForm">
                        <div class="card-body">
                            <form action="form/verif-form.php" class=" " method="post" id="meta-form">
                                <div class="form-group ">
                                    <label for="firstname">Prénom </label>
                                    <input type="text" class="form-control" id="firstname_" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nom </label>
                                    <input type="text" class="form-control" id="name_" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control" id="email_" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Votre message </label>
                                    <textarea class="form-control" name="message" id="message_" cols="15" rows="5"></textarea>
                                </div>
                                <div id="infoForm"></div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-light btn-submit" id="submit" name="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>