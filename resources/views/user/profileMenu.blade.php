<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<a href="/user/{{$user->userName}}/profile" @if(end($sections) == 'profile') class="active" @endif>Profile</a>
			</li>
			<li>
				<a href="/user/{{$user->userName}}/photos" @if(end($sections) == 'photos') class="active" @endif>Photos</a>
			</li>
			<li>
				<a href="/user/{{$user->userName}}/connections" @if(end($sections) == 'connections') class="active" @endif>Connections</a>
			</li>
			<li>
				<a href="/user/{{$user->userName}}/messages" @if(end($sections) == 'messages') class="active" @endif>Messages</a>
			</li>
			<li>
				<a href="/user/{{$user->userName}}/settings" @if(end($sections) == 'settings') class="active" @endif>Settings</a>
			</li>
			<li>
				<a href="/user/{{$user->userName}}/our-feed" @if(end($sections) == 'our-feed') class="active" @endif>My Feed</a>
			</li>
		</ul>
	</div>
</div>