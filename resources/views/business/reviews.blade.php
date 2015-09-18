@extends('business.header')

@section('content')

<div class="container">

	<!-- Content Row -->
	<div class="row">
		<!-- Sidebar Column -->
		<div class="col-md-3 sidebar">
			<div class="filter-by list search-list">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <h4 class="list-title">Sort by</h4> </a></h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<ul class="fa-ul no-margin-left">
									<li>
										<a href="#" class="no-color">Newest first</a>
									</li>
									<li>
										<a href="#" class="no-color">Oldest first</a>
									</li>
									<li class="active">
										<a href="#" class="no-color">Ratings (high-low)</a>
									</li>
									<li>
										<a href="#" class="no-color">Ratings (low-high)</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="review-key">
				<span><img src="/images/icons/star-green.png" class="icon">Not so great</span>
				<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Just okay</span>
				<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Pretty good</span>
				<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Great business</span>
				<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Highly Recommended!</span>
			</div>
		</div>
		<!-- Content Column -->
		<div class="col-md-9 content">
			<h2 class="content-heading"><img src="/images/icons/star-hollow.png" class="icon baseline">Reviews</h2>
		</div>
	</div>
	<!-- /.row -->

</div>
@endsection