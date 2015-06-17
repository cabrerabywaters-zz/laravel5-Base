@extends('../layouts.home')





@section('content')
    <!-- resources/views/auth/login.blade.php -->




    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">

    <div class="container" style="margin-top: 10%; margin-bottom: 5%">

        <script id="metamorph-1-start" type="text/x-placeholder"></script>
        <script id="metamorph-21-start" type="text/x-placeholder"></script>

        <div class="container text-center">

            <form class="form-signin" method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <h2 class="form-signin-heading">Login de Usuario</h2>

                <small class="text-muted">Ingresa con tu Red Social preferida</small>
                <br><br>


                <p>
                    <a class="btn btn-theme social-login-btn social-facebook" href="/auth/facebook"><i
                                class="fa fa-facebook"></i></a>
                    <a class="btn btn-theme social-login-btn social-twitter" href="/auth/twitter"><i
                                class="fa fa-twitter"></i></a>
                </p>

                <p>
                    <a class="btn btn-theme social-login-btn social-linkedin" href="/auth/linkedin"><i
                                class="fa fa-linkedin"></i></a>
                    <a class="btn btn-theme social-login-btn social-google" href="/auth/google"><i
                                class="fa fa-google-plus"></i></a>
                </p>

                <div class="btn-group social-login-more">
                    <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown">
                        More...
                    </button>
                    <ul class="dropdown-menu text-left " role="menu">
                        <li><a href="#"><i class="fa fa-tumblr-sign"></i>   Tumblr</a></li>
                        <li><a href="#"><i class="fa fa-github-alt"></i>   Github</a></li>
                        <li><a href="#"><i class="fa fa-dropbox"></i>   Dropbox</a></li>
                        <li><a href="/auth/amazon"><span class="zocial-amazon"></span>   Amazon</a></li>
                        <li><a href="#"><span class="zocial-bitbucket"></span>   Bitbucket</a></li>
                        <li><a href="#"><span class="zocial-evernote"></span>   Evernote</a></li>
                        <li><a href="#"><span class="zocial-meetup"></span>   Meetup</a></li>
                        <li><a href="#"><i class="fa fa-windows"></i>   Windows Live</a></li>
                        <li><a href="#"><i class="fa fa-weibo"></i>   Weibo</a></li>
                        <li><a href="#"><i class="fa fa-foursquare"></i>   Foursquare</a></li>
                        <li><a href="#"><i class="fa fa-stackexchange"></i>   Stack Exchange</a></li>
                        <li><a href="#"><i class="fa fa-trello"></i>   Trello</a></li>
                        <li><a href="#"><span class="zocial-wordpress"></span>   Wordpress</a></li>
                    </ul>
                </div>
                <br><br>


                <small class="text-muted">Ingresa con tu cuenta personal</small>
                <br><br>

                <input id="ember360" class="ember-view ember-text-field form-control login-input"
                       placeholder="Email Address" type="email" name="email" value="{{ old('email') }}">

                <input name="password" id="password" class="ember-view ember-text-field form-control login-input-pass"
                       placeholder="Password" type="password">


                <script id="metamorph-22-start" type="text/x-placeholder"></script>
                <script id="metamorph-22-end" type="text/x-placeholder"></script>

                <button class="btn btn-lg  btn-theme btn-block btn-center" type="submit" data-bindattr-3="3">Ingresa
                </button>
                <br>
                <small class="create-account text-muted">Aún no eres parte de CYB?
                    <button id="ember363" class="ember-view btn btn-sm btn-default"> Regístrate</button>
                </small>
            </form>
        </div>
    </div>

    <!-- *****************************************************************************************************************
  TESTIMONIALS
  ***************************************************************************************************************** -->
    <div id="twrap">
        <div class="container centered">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <i class="fa fa-comment-o"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <h4><br/>Marcel Newman</h4>
                    <p>WEB DESIGNER - BLACKTIE.CO</p>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div><! --/twrap -->



@stop

