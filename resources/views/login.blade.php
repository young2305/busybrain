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
                    Busy Brain - Login
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
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
{
// Reveal Login form
setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);

// Validation and Ajax action
$("form#login").validate({

// Form Processing via AJAX
submitHandler: function(form)
{
show_loading_bar(70); // Fill progress bar to 70% (just a given value)
var opts = {
"closeButton": true,
"debug": false,
"positionClass": "toast-top-full-width",
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
};

$.ajax({
url: "{{ route('login.store')}}",
method: 'POST',
dataType: 'json',
"headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
data: {
do_login: true,
usser: $(form).find('#usser').val(),
password: $(form).find('#password').val(),
},
	success: function(Response)
		{
                /* Initialisation des champs */
                //console.log("dfdsf");
               
                document.getElementById("error_usser").innerHTML = ' ';
                           
                document.getElementById("error_password").innerHTML = ' ';

                    /*validate des champs*/
                if(Response.usser){
                                document.getElementById("error_usser").innerHTML = '<p>'+ Response.usser + '</p>'
                            }

             if(Response.password){
                                document.getElementById("error_password").innerHTML = '<p>'+Response.password+ '</p>'
                            }

                
                            




			//window.location.href = '/adminacceuil';
		/*show_loading_bar({
		delay: .5,
		pct: 100,
			finish: function(){
				// Redirect after successful login page (when progress bar reaches 100%)
				if(resp.accessGranted)
					{
					window.location.href = '/welcome';
					}
				else
					{
					toastr.error("You have entered wrong password, please try again. User and password is <strong>demo/demo</strong> :)", "Invalid Login!", opts);
					$(form).find('#passwd').select();
					}
				}
			});*/
		}
        
});
}
});
// Set Form focus
$("form#login .form-group:has(.form-control):first .form-control").focus();
});
                    </script>
                    <div class="errors-container">
                    </div>
                    <form class="login-form fade-in-effect" action="/login@create" id="login" method="post" role="form">
                        <div class="login-header">
                            <a class="logo" href="../../dashboard/variant-1/index.html">
                                <img alt="" src="../../assets/images/logo%402x.png" width="80"/>
                                <span>
                                    connexion
                                </span>
                            </a>
                            <p>
                                Chère Utilisateur, veuillez-vous remplir les informations !
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="usser">
                                Pseudo
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="usser" name="usser" type="text"/>
                        </div>
                        <p id="error_usser">  </p>
                        <div class="form-group">
                            <label class="control-label" for="passwd">
                                Mot de passe
                            </label>
                            <input autocomplete="off" class="form-control input-dark" id="password" name="password" type="password"/>
                        </div>
                        <p id="error_password">  </p>
                        <div class="form-group">
                            <button class="btn btn-dark btn-block text-left" type="submit">
                                <i class="fa-lock">
                                </i>
                                	Connectez-vous
                            </button>
                        </div>
                        <div class="login-footer">
                        	<div class="col-md-6">
	                            <a href="#">
	                                Mot de passe oublié ?
	                            </a>                        		
                        	</div>

                        	<div class="col-md-6">
	                            <a href="/inscription">
	                                S'inscrire ?
	                            </a>                        		
                        	</div>
                        </div>

                    </form>
                </div>
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