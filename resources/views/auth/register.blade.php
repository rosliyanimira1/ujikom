<!-- <!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/assets/admin/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/assets/admin/css/style2.css" />
		<link rel="stylesheet" type="text/css" href="/assets/admin/css/animate-custom.css" />
    </head>
    <body>
                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
    </body>
</html> -->

<div id="register" class="animate form">
                            <form  action="{{ route('register') }}" autocomplete="on" method="post">
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