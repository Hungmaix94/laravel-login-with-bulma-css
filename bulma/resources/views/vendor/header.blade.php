<header class="is-fluid">
	<div class="notification">
		<div class="columns">
			<div class="column">            
				<a href="{{ url('/home') }}">
					{{ config('app.name', 'Radio') }}
				</a>
			</div>
			<div class="column has-text-right">
				<ul>
					<!-- Authentication Links treba da se dopravi css3 drowdown -->
					@if (Auth::guest())
						<li><a href="{{ url('/register') }}">Register</a></li>
					@else

					
						<li class="sub-menu-parent">
							<a href="#" class="dropbtn" data-toggle="dropdown" role="button" aria-expanded="false">
							<p>
								Wellcome
								 {{ Auth::user()->name }} 
							</p>

								<span class="caret"></span>
							</a>

							<ul class="sub-menu" role="menu">
								<li>
									<a href="{{ url('/logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
</header>