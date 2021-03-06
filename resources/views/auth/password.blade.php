<!DOCTYPE html>

<html>

  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

    

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Agronielsen en Campo | Recuperar Contrase???a</title>
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.agronielsen.com/encampo/public/css/appx/assets/img/favicon/agronielsen-apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://www.agronielsen.com/encampo/public/css/appx/assets/img/favicon/faviconnielsen.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.agronielsen.com/encampo/public/css/appx/assets/img/favicon/faviconnielsen-16-16.png">
    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->

    <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="{{url('/dist/css/AdminLTE.min.css')}}">

    <!-- iCheck -->

    <link rel="stylesheet" href="{{url('/plugins/iCheck/square/blue.css')}}">



    <link rel="stylesheet" href="{{url('/css/sistemalaravel.css')}}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

  </head>

  <body class="hold-transition login-page">

    <div class="login-box">

      <div class="login-logo"> <img src="{{url('/imagenes/logo-agronielsen-presentacion.png')}}" style="height: auto; width: auto; max-width: 295px; max-height: 434px;">

        <a href="#"><b>Agronielsen </b>en Campo</a>

    

       <div>





      </div> 

      </div><!-- /.login-logo -->

      <div class="login-box-body">

        <p class="login-box-msg"><h4>Por favor ingresa tu Email registrado en el Sistema:</h4></p>

        

             <form role="form" method="POST" action="{{ url('/password/email') }}">

                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            



                            <div class="form-group has-feedback">

                               <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>



                                @if ($errors->has('email'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>

                                @endif

                            </div>

                       



                        

                            

                                <button type="submit" class="btn btn-primary">

                                    Cambiar mi Contraseña

                                </button>

                            

                      </div>   

                    </form>



     

       



      </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->



    <!-- jQuery 2.1.4 -->

    <script src="{{url('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

    <!-- Bootstrap 3.3.5 -->

    <script src="{{url('/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- iCheck -->

    <script src="{{url('/plugins/iCheck/icheck.min.js')}}"></script>

   



    <script>

      

      $(function () {

        $('input').iCheck({

          checkboxClass: 'icheckbox_square-blue',

          radioClass: 'iradio_square-blue',

          increaseArea: '20%' // optional

        });

      });

    </script>



  <script src="{{url('js/sistemalaravel.js')}}"></script>





  </body>

</html>

