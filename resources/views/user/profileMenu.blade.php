<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<a href="/user/{{$user->uName}}/profile" @if(end($sections) == 'profile') class="active" @endif>Profile</a>
			</li>
			<li>
				<a href="/user/{{$user->uName}}/photos" @if(end($sections) == 'photos') class="active" @endif>Photos</a>
			</li>
			<li>
				<a href="/user/{{$user->uName}}/connections" @if(end($sections) == 'connections') class="active" @endif>Connections</a>
			</li>
			<li>
				<a href="/user/{{$user->uName}}/messages" @if(end($sections) == 'messages') class="active" @endif>Messages</a>
			</li>
			<li>
				<a href="/user/{{$user->uName}}/settings" @if(end($sections) == 'settings') class="active" @endif>Settings</a>
			</li>
			<li>
				<a href="/user/{{$user->uName}}/our-feed" @if(end($sections) == 'our-feed') class="active" @endif>My Feed</a>
			</li>
		</ul>
	</div>
</div>