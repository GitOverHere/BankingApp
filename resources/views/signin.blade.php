<!DOCTYPE html>

<html lang="en">
<head>
<title>Sign In</title>
<link rel="stylesheet" type="text/css" href ="{{ asset('css/login.css')}}">

<meta name="title">Login to {Bank}</meta>
<meta name="description">Login to {Bank} here </meta>
<meta name = "tags">bank,checking,savings</meta>
<script src="{{ asset('js/login.js') }}">


</head>






<body>

<script>





</script>




<div class="backdrop" style="background-image: url('../img/sunset-ocean.jpg');">

</div>







<div class="loginarea">
<div class="link-div">

<a class="forgot-password">Forgot Password?</a>
<a class="signin-button">Sign In </a>
<a class="signup-button">Sign Up</a>


</div>


<div class="login">
<form>
<h1>Sign In</h1>

<label for="username">Email</label>
<input name="email" type="email" required>

<label for="email">Password</label>
<input name="password" type="password" required>



<button>Login</button>
</form>


</div>

<div class="sign-up hide">

<form>
<h1> Sign Up</h1>

<label for="name">Full Name</label>
<input name="name" type="text" required>

<label for="email">Email</label>
<input name="email" type="email" required>

<h3>Phone Number</h3>
<input id="phone" type="tel">
<button id="btn" type="button">Validate</button>
<span id="valid-msg" class="hide">✓ Valid</span>
<span id="error-msg" class="hide"></span>




<div class="field address">
<label for="street-address">Street Address</h4>
<input name="street-address" type="text" required>

<label for="street-address">City</h4>
<input name="street-address" type="text" required>

<label for="region">Geographic Region</h4>
<input name="region" type="text" required>


<label for="zip">Postal Code</h4>
<input name="email" type="text"  maxlength="16" required>

<label for="country">Country</label>
<input name="country" type="text"  maxlength="16" required>

    <button>Register</button>

</form>
</div>

</div>


<div class="reset hide">



<form>
<h1> Reset</h1>
<label for= "email">Email Address</label>
<input name="email" type="email" required>

<button>Reset</button>

</form>



</div>



</div>



</body>



</html>
