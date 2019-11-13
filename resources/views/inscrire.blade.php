<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from themes.laborator.co/xenon/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 06 Jun 2016 12:03:20 GMT -->
    <!-- Added by HTTrack -->
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
                <meta content="Xenon Boostrap Admin Panel" name="description"/>
                <meta content="Laborator.co" name="author"/>
                <meta name="csrf_token" content="{{ csrf_token() }}" />
                <title>
                    Xenon - Login
                </title>
                    <link href="{{asset('../../assets/css/fonts/linecons/css/linecons.css')}}" id="style-resource-2" rel="stylesheet">
                        <link href="{{asset('../../assets/css/fonts/fontawesome/css/font-awesome.min.css')}}" id="style-resource-3" rel="stylesheet">
                            <link href="{{asset('../../assets/css/bootstrap.css')}}" id="style-resource-4" rel="stylesheet">
                                <link href="{{asset('../../assets/css/xenon-core.css')}}" id="style-resource-5" rel="stylesheet">
                                    <link href="{{asset('../../assets/css/xenon-forms.css')}}" id="style-resource-6" rel="stylesheet">
                                        <link href="{{asset('../../assets/css/xenon-components.css')}}" id="style-resource-7" rel="stylesheet">
                                            <link href="{{asset('../../assets/css/xenon-skins.css')}}" id="style-resource-8" rel="stylesheet">
                                                <link href="{{asset('../../assets/css/custom.css')}}" id="style-resource-9" rel="stylesheet">
                                                    <script src="{{asset('../../assets/js/jquery-1.11.1.min.js')}}">
                                                    </script>
                                                    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
                                                    <!-- TS1465214361: Xenon - Boostrap Admin Template created by Laborator -->
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body class="page-body login-page">
        <!-- TS14652143617811: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class="login-container">
            <div class="row">
                <div class="col-sm-6">
                
                    <div class="errors-container">
                    </div>
                    <form id="inscription" class="login-form fade-in-effect" method="post" role="form">
                        <div class="login-header">
                            <a class="logo" href="../../dashboard/variant-1/index.html">
                                <img alt="" src="../../assets/images/logo%402x.png" width="80"/>
                                <span>
                                    Inscription
                                </span>
                            </a>
                            <p>
                                Chère Utilisateur, veuillez-vous remplir les informations !
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">
                                Nom
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="nom" name="nom" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">
                                Prenom
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="prenom" name="prenom" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="email">
                                Email
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="email" name="email" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="pays">
                                Pays
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="pays" name="pays" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="ville">
                                Ville
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="ville" name="ville" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="numero">
                                Numero
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="numero" name="numero" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="usser">
                                Pseudo
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="usser" name="usser" type="text"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">
                                mot de passe
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="password" name="password" type="password"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password_confirmation">
                                confirmation de mot de passe 
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="password_confirmation" name="password_confirmation" type="password"/>
                        </div>
                        <div class="form-group">
                           
                            <input autocomplete="off"  class="form-control input-dark" id="token" name="token" type="hidden"/>
                        </div>
                        <div class="form-group">
                            <button id="inscrire" class="btn btn-dark btn-block text-left">
                                <i class="fa-lock">
                                </i>
                                	Inscrivez-vous
                            </button>
                        </div>
                        

                        	
                        </div>

                    </form>
                </div>
                <script type="text/javascript">
                            $(document).ready(function(){

                                setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
$('#valider').click(function(){


        var data= $('#inscription').serialize();
        //alert(data);
        $.ajax({
            type: 'post',
            data: data,
           "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            url:   "{{ route('inscription.store')}}",
            success: function(){

                //alert("success");

            }
        })

});
})  
/*
                        jQuery(document).ready(function($)
{
// Reveal Login form
setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);

$('#inscrire').click(function(){
                    var data= $('#inscription').serialize();
                    //alert(data);
                    $.ajax({
                        type: 'post',
                        data: data,
                       "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                        url:   "{{ route('inscription.store')}}",
                        success: function(){

                            //alert("success");

                        }
                    })

            });


});*/
                    </script>
                    
            </div>
        </div>
        <script id="script-resource-1" src="../../assets/js/bootstrap.min.js">
        </script>
        <script id="script-resource-2" src="../../assets/js/TweenMax.min.js">
        </script>
        <script id="script-resource-3" src="../../assets/js/resizeable.js">
        </script>
        <script id="script-resource-4" src="../../assets/js/joinable.js">
        </script>
        <script id="script-resource-5" src="../../assets/js/xenon-api.js">
        </script>
        <script id="script-resource-6" src="../../assets/js/xenon-toggles.js">
        </script>
        <script id="script-resource-7" src="../../assets/js/jquery-validate/jquery.validate.min.js">
        </script>
        <script id="script-resource-8" src="../../assets/js/toastr/toastr.min.js">
        </script>
        <!-- JavaScripts initializations and stuff -->
        <script id="script-resource-9" src="../../assets/js/xenon-custom.js">
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-28991003-3', 'auto');
 ga('send', 'pageview');
        </script>
    </body>
    <!-- Mirrored from themes.laborator.co/xenon/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 06 Jun 2016 12:03:20 GMT -->
</html>