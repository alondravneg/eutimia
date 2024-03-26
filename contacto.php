<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Más Info +port" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Contacto | Eutimia Café</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Custom styles for this template -->
    <link href="css/cursos.css" rel="stylesheet">
    <link href="css/contacto.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>

    <!-- Navigation-->
        <?php include 'navigation.php'; ?>


   <main role="main">
    <section class="jumbotron text-center">
        <!--Section: Contact v.2-->
        <div class="container">
            <div class="row justify-content-center font-text">
                <div class="col-md-8"> <!-- Adjust column width to center form fields -->
                    <section class="mb-4">
                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center my-4 mogilte">Contáctanos</h2>
                        <!--Section description-->
                        <p class="text-center w-responsive mx-auto mb-5">¡Si tienes alguna pregunta, no dudes en contactarnos directamente! Nuestro equipo te responderá en cuestión de horas para ayudarte en todo lo que necesites.</p>

                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Tu nombre</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Correo electrónico</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Asunto</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">Descríbenos tu mensaje</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                </form>

                                <div class="text-center">
                                    <a class="btn btn-primary botoncito" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                                </div>
                                <div class="status"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Footer-->
        <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</php>
  </body>
</php>
