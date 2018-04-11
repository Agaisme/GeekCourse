	<nav class="navbar is-transparent">
		<div class="navbar-brand">
			<a class="navbar-item" href="#">
				<img src="https://bulma.io/images/bulma-logo.png" alt="GeekCourse" width="112" height="28">
			</a>
			<div class="navbar-burger burger" data-target="navbarMainMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<div id="navbarMainMenu" class="navbar-menu">
			<div class="navbar-start">
				<router-link to="/home" class="navbar-item">Home</router-link>
				<router-link to="/about" class="navbar-item">About</router-link>
			</div>

			<div class="navbar-end">
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link" href="#">
						Login
					</a>
					<div class="navbar-dropdown is-right">
						<a class="navbar-item" href="/login">
							Login
						</a>
						<a class="navbar-item" href="/signup">
							Signup
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>