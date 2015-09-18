<!-- Page Content -->
		<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
			<div class="container">
				<ul class="nav navbar-nav">
					<li>
						<a href="/business/{{$business->uName}}/profile" @if(end($sections) == 'profile') class="active" @endif>Profile</a>
					</li>
					<li>
						<a href="/business/{{$business->uName}}/photos" @if(end($sections) == 'photos') class="active" @endif>Photos</a>
					</li>
					<li>
						<a href="/business/{{$business->uName}}/connections" @if(end($sections) == 'connections') class="active" @endif>Connections</a>
					</li>
					<li>
						<a href="/business/{{$business->uName}}/reviews" @if(end($sections) == 'reviews') class="active" @endif>Reviews</a>
					</li>
					<li>
						<a href="/business/{{$business->uName}}/messages" @if(end($sections) == 'messages') class="active" @endif>Messages</a>
					</li>
					<li>
						<a href="/business/{{$business->uName}}/our-feed" @if(end($sections) == 'our-feed') class="active" @endif>Our Feed</a>
					</li>
				</ul>
			</div>
		</div>