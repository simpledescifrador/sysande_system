<body class="text-center">

	<form class="form-login">
		<p id="message"></p><!-- This is validation message -->
		<label for="username" class="sr-only">Username</label>
		<input type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPass" class="form-control" placeholder="Password" required>
		<button class="btn btn-sm btn-primary btn-block" type="submit" name="login" onclick="javascript:return validateEntries()">Login</button>
		<p class="mt-5 mb-3 text-muted">Market View Research&copy; 2018</p>
	</form>
</body>

