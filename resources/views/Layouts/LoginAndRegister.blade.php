<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/LoginRegisterStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="{{route('register')}}" method="POST">
            @csrf
			<h1>Create Account</h1>


			<input type="text" required placeholder="Name" name="name"/>
			<input type="email" required placeholder="Email" name="email"/>
            <select name="role" required aria-placeholder="Role">
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
            </select>
            <div class="password-container">
                <input type="password" placeholder="Password" class="password" id="password1" name="password">
                <span class="password-toggle-icon"><i class="fa-solid fa-eye toggle-eye" data-target="password1"></i></span>
            </div>
            <div class="password-container">
                <input type="password" placeholder="Confirm Password" class="password" id="password2" name="c_password">
                <span class="password-toggle-icon"><i class="fa-solid fa-eye toggle-eye" data-target="password2"></i></span>
            </div>

			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{route('login')}}" method="POST">
            @csrf
			<h1>Sign in</h1>

			<input type="email" required placeholder="Email" name="email" />
			<input type="password" required placeholder="Password" name="password" />
            <select name="role" required aria-placeholder="Role">
                <option value="admin">Admin</option>
                <option value="user" selected>User</option>
            </select>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="js/Login.js"></script>
</body>
</html>
