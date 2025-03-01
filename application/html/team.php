<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?= URL?>public/css/login.css">
        <link rel="stylesheet" type="text/css" href="<?=URL?>public/css/styles_conocenos.css" />
        <link rel="stylesheet" type="text/css" href="<?= URL?>public/css/footer.css">
        
        <link rel="icon" href="<?=URL?>public/img/imagenaranja.png">
        <title>Conocenos</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="header row text-center">
                <div class="col-12 my-auto">
                    <img src="<?= URL ?>public/img/moderna2.png" class="img-fluid img-thumbnail logo mt-3">
                </div>
            </div>
        </div>
            <center>
                <section class="front" id="front">
                    <div align="center">
                        <h1>Front End</h1>
                    </div>
                    <div class="row" align="center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card card-front">
                                <img src="<?=URL?>public/img/fotos_personales/jemuel.jpg" class="card-img-top card-img-front" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Jemuel Flores</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card card-front row-front">
                                <img src="<?=URL?>public/img/fotos_personales/bruno.jpg" class="card-img-top card-img-front" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Bruno Cruz</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#back">
                        <img src="<?=URL?>public/img/flecha.png" class="image" id="image" />
                    </a>
                </section>

                <section class="back" id="back">
                    <a href="#front">
                        <img src="<?=URL?>public/img/flecha.png" class="return" id="return" />
                    </a>
                    <div align="center">
                        <h1>Back End</h1>
                    </div>
                    <div class="row" align="center">
                        <div class="col-lg-4 col-sm-12 col-md-6 top-card">
                            <div class="card card-back">
                                <img src="<?=URL?>public/img/fotos_personales/jorge.jpg" class="card-img-top card-img-back" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Jorge Flores</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 top-card">
                            <div class="card" style="width: 18rem;">
                                <img src="<?=URL?>public/img/fotos_personales/victor.jpg" class="card-img-top card-img-back" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Victor Franco</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 bottom-card">
                            <div class="card card-back">
                                <img src="<?=URL?>public/img/fotos_personales/sergio.jpg" class="card-img-top card-img-back" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Sergio Gutierrez</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </center>
        </div>

        <footer class="mainfooter" role="contentinfo">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <i class="align-middle my-auto" data-feather="thermometer"></i>
                            <h1>iTemp</h>
                        </div>
                        <div class="col-6 text-end">
                            <h4>Ligas de interes:</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?= URL?>">>Regresar a Inicio</a></li>
                                <li><a href="<?= URL?>csv">>Agrega registros CSV</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 copy">
                            <p class="text-center">© Copyright 2021 - Grupo La Moderna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js" integrity="sha512-5nTpER5HrSoRPyd8szIn2QglL3A54KJs4XOcX3SdHTbLb8TO/5wLqoFYSFGNyhzZy7CFAOZf66X3ikr2v7Bfuw==" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js" integrity="sha512-kDuUo39RGApdfHkM1WQL8Pg9BYtYGS5rD14AzePsD4SEaixw7v/ykAkLMdsSjuBCNFE6/FAP+WIHh6N6QZJl5w==" crossorigin="anonymous"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"
            integrity="sha512-hFyYiBIWCYSyo98oFGWjG5V8HEV4g5O2pxu0mzU8qIMC7lrrwtcKWoRDZcpRL0ywIIM2d/XsBJ9iXNLFf6kIgw=="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js"
            integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg=="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js" integrity="sha512-UznfQR3LKkKPL0k7HISMqOsmUCjVhjWK8HlR0Pxo5JpjN8eZ8XRwKBRX6OTOQIO0FYOl8Oue+4dG4uHtx1SgKQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js" integrity="sha512-Xc+rcY3w0DANwcFGWBcnBf2dw/p5a4IBAKqHdBJScNOnIH+qoQYE6xuWEdW3wiP7Q+XvL9MacrnKkzoP0Kexug==" crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js"
            integrity="sha512-plyexAULVlTExvDn2yUZFJV9F8q+53MC/GpU9dEuNGXmrrI3J8Rcffjvxg3OOBALBvF+UILPLIBEoCeF2maqTQ=="
            crossorigin="anonymous"
        ></script>

        <script type="text/javascript" src="<?=URL?>public/js/animations.js"></script>
    </body>
</html>
