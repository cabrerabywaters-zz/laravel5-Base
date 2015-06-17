@extends('layouts.home')





@section('content')



    <!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="jumbotron" style="  background-color: rgba(238, 238, 238, 0);">
                        <h1>CYB Software</h1>

                        <p><a class="btn btn-theme btn-lg" href="/auth/login" role="button">Ingresa</a></p>

                        <h3>¡Comienza a menejar tu empresa como nunca antes!</h3>
                    </div>

                </div>
                <div class="col-lg-8 col-lg-offset-2 himg">
                    <img src="img/thumbs_up.png" class="img-responsive">
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div><!-- /headerwrap -->

    <!-- *****************************************************************************************************************
     SERVICE LOGOS
     ***************************************************************************************************************** -->
    <div id="service">
        <div class="container">
            <div class="row centered">
                <div class="col-md-4">
                    <i class="fa fa-heart-o"></i>
                    <h4>Diseño Impecable</h4>

                    <p>Cansado de los ERP que parecen haber salido de los 80`s? ¡Nosotros también!. En CYB nos
                        preocupamos de entregarte la mejor experiencia. Ya sea utilizando la aplicación en su versión
                        Web o Mobile, no podrás volver a tu viejo sistema.
                    </p>

                    <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-flask"></i>
                    <h4>Formulas Exactas</h4>

                    <p>Elavoramos cada módulo para adaptarnos a los problemas cotidianos. Sabemos qué es lo que se
                        necesita y cuándo lo necesitas. Nuestra simplesa te permitirá retomar las riendas de tu negocio.
                    </p>

                    <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-trophy"></i>
                    <h4>Seguimiento de KPI´s</h4>

                    <p>
                        Ya sea que tu negocio sean las frutas o los reactores nucleares, todo negocio necesita medirse.
                        Las ventas son sólo uno de los factores relevantes, pero si manejas más que a un grupo de
                        vendedores, sabrás que los ERP's actuales no permiten todo lo que buscas.
                        ¿ No sabes qué medir? Te lo sugerimos!.
                    </p>

                    <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
                </div>
            </div>
        </div>
        <! --/container -->
    </div><! --/service -->



    <!-- *****************************************************************************************************************
     TESTIMONIALS
     ***************************************************************************************************************** -->
    <div id="twrap">
        <div class="container centered">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <i class="fa fa-comment-o"></i>

                    <p>Con más de 20 años en la industria del plástico he visto y probado muchas soluciones ERP
                        para mi empresa. Algunas parecen ser bastante buenas, pero al final del día, uno siempre busca
                        cierto grado de personalización. Al final del día, con los Software más grandes uno intenta
                        adaptar sus procesos para funcionar correctamente. CYB me ha entregado las herramienta y la
                        flexibilidad que busco.
                    </p>
                    <h4><br/>Pedro Cabrera</h4>

                    <p>Dueño - Copol Spa.</p>
                </div>
            </div>
            <! --/row -->
        </div>
        <! --/container -->
    </div><! --/twrap -->

    <!-- *****************************************************************************************************************
        OUR CLIENTS
        ***************************************************************************************************************** -->
    <div id="cwrap">
        <div class="container">
            <div class="row centered">
                <h3>Nuestros Clientes</h3>

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="img/clients/client01.png" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="img/clients/client02.png" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="img/clients/client03.png" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="img/clients/client04.png" class="img-responsive">
                </div>
            </div>
            <! --/row -->
        </div>
        <! --/container -->
    </div><! --/cwrap -->









@stop