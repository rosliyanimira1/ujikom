<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login dan Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/admin/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/admin/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/admin/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Login dan Register <span>untuk admin salon</span></h1>
				<nav class="codrops-demos">
					<span>Delta Salon</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="{{ route('login') }}" autocomplete="on" action="{{ route('login') }}">
                                @csrf
 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="email" class="uname" data-icon="u">Email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Email"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Belum membuat?
									<a href="#toregister" class="to_register">buat</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="{{ route('register') }}" autocomplete="on" method="post" action="{{ route('register') }}">
                                @csrf 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="name" class="uname" data-icon="u">Name</label>
                                    <input id="name" name="name" required="required" type="text" placeholder="Name" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Email"/> 
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <label for="password_confirmation" class="youpasswd" data-icon="p">Konfirmasi Password </label>
                                    <input id="password_confirmation" name="password_confirmation" required="required" type="password" placeholder="Konfirmasi password"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Sudah Membuat?
									<a href="#tologin" class="to_register"> Masuk</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
