@extends('business.header')

@section('content')

<div class="container">

	<!-- Content Row -->
	<div class="row">
		<div class="col-lg-12">
			<h2 class="content-heading"><img src="/images/icons/messages.png" class="icon">Messages</h2>
			<div class="col-md-3 no-padding">
				<a href="#">
				<button type="button" class="btn btn-default edit-this-page no-margin-top"><img src="/images/icons/edit-white.png" class="icon">Compose New Message
				</button></a>
			</div>
			<div class="col-md-9 no-padding-right">
				<form action="#" name="search-message" class="search-message col-md-12 no-padding-right">
					<input type="text" class="search col-md-4 no-margin-right pull-right" id="search" placeholder="Search messages...">
					<select name="" class="col-md-4 pull-right">
						<option value="Any Message" selected>Any Message</option>
						<option value="Any Message 2">Any Message 2</option>
						<option value="Any Message 3">Any Message 3</option>
					</select>
					<input type="image" name="submit" src="/images/icons/search.png" border="0" alt="Submit" />
				</form>
			</div>
			<div class="clearfix spacer"></div>
			<div class="col-xs-3 all-contacts no-padding">
				<!-- required for floating -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-left" id="style-1">
					<li class="active">
						<a href="#message1" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete1"></button></span>
						<div class="modal fade delete1 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message2" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete2"></button></span>
						<div class="modal fade delete2 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message3" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete3"></button></span>
						<div class="modal fade delete3 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message1" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete4"></button></span>
						<div class="modal fade delete4 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message2" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete5"></button></span>
						<div class="modal fade delete5 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message3" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete6"></button></span>
						<div class="modal fade delete6 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message1" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete7"></button></span>
						<div class="modal fade delete7 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message2" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete8"></button></span>
						<div class="modal fade delete8 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message3" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete9"></button></span>
						<div class="modal fade delete9 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message1" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete10"></button></span>
						<div class="modal fade delete10 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message2" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete11"></button></span>
						<div class="modal fade delete11 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#message3" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ... </span>
						</div> </a>
						<span class="message-delete"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".delete12"></button></span>
						<div class="modal fade delete12 delete-dialogbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-body">
										<img src="/images/icons/delete-blue.png" class="delete-confirm">
										Are you sure you want to delete this message and its related conversation.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default gray-blue hollow">
											Yes
										</button>
										<button type="button" class="btn btn-primary btn-default gray-blue hollow" data-dismiss="modal">
											No
										</button>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>

			<div class="col-xs-9 all-correspondence" id="style-2">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="message1">
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<form action="#" class="reply-message">
							<input name="" type="text" placeholder="Write reply here ..." class="col-md-12 no-margin">
							<input type="image" name="submit" src="/images/icons/send.png" border="0" alt="Submit" />
						</form>
					</div>

					<div class="tab-pane" id="message2">
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-2.png"></span><span class="status offline"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<form action="#" class="reply-message">
							<input name="" type="text" placeholder="Write reply here ..." class="col-md-12 no-margin">
							<input type="image" name="submit" src="/images/icons/send.png" border="0" alt="Submit" />
						</form>
					</div>

					<div class="tab-pane" id="message3">
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Thu 08</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa. Curabitur pulvinar ante non dolor vehicula, nec tempor nisl mollis. Praesent elementum bibendum dui eu placerat. Duis malesuada libero a rhoncus gravida. Vestibulum eu risus vulputate, commodo nibh vitae, accumsan libero.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Wed 07</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Tue 06</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo business"><img src="/images/feed-business-1.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Business Name <span class="date pull-right">Mon 05</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem.</span>
							</div>
						</div>
						<div class="message-thread">
							<div class="col-md-2 no-padding correspondent-image">
								<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
							</div>
							<div class="col-md-11 no-padding correspondent-meta">
								<span class="message-meta"> <h5>Individual Name <span class="date pull-right">Sat 03</span></h5> Subject line of the message ...<span class="message-delete"><button></button></span> </span>
								<span class="message">Sed sodales consequat justo, eget tempor felis. Sed in rhoncus leo. Suspendisse porta consectetur dui ac maximus. Fusce ante massa, posuere eget consectetur mattis, mollis a sem. Nullam facilisis, tellus ut aliquam rhoncus, quam risus faucibus arcu, a feugiat orci justo vitae massa.</span>
							</div>
						</div>
						<form action="#" class="reply-message">
							<input name="" type="text" placeholder="Write reply here ..." class="col-md-12 no-margin">
							<input type="image" name="submit" src="/images/icons/send.png" border="0" alt="Submit" />
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /.row -->
</div>
@endsection