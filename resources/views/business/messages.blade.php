@extends('business.header')

@section('content')

<div class="container" ng-app="messagePage">

	<!-- Content Row -->
	<div class="row"  ng-controller="messageCtrl">
		<div class="col-lg-12" ng-init="getMessage();">
			<h2 class="content-heading"><img src="/images/icons/messages.png" class="icon">Messages</h2>
			<div class="col-md-3 no-padding">
				<a href="#">
				<button type="button" class="btn btn-default edit-this-page no-margin-top"><img src="/images/icons/edit-white.png" class="icon">
					Compose New Message
				</button>
				</a>
			</div>

			<!-- compose a message box -->
			<div class="col-md-6 no-padding-right">
				<!-- <table >
					<tr><td><label>To</label></td><td><input type="text" ng-model="message.to" class="search col-md-6 no-margin-right pull-right" placeholder="To.."></td></tr>
					<tr></tr>
					<tr><td><label>Subject</label></td><td><input type="text" ng-model="message.subject" class="search col-md-6 no-margin-right pull-right" placeholder="subject"></td></tr>
					<tr></tr>
					<tr><td><label>Message</label></td><td><input type="text" ng-model="message.text" class="search col-md-6 no-margin-right pull-right" placeholder="message"></td></tr>
					<tr></tr>
					<tr><td><button type="button" ng-click="sendMessage()" class="btn btn-default edit-this-page no-margin-top">
						Sent Message
					</button>
					</td>
					</tr>
				</table> -->
			</div>
			<!-- compose a message box -->

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
			<div class="col-xs-3 all-contacts no-padding" ng-init="sendShortMessage()">
				<!-- required for floating -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-left" id="style-1" ng-repeat="displayShort in displayShortData" ng-click="getUserMessage(displayShort.from)">
					<li class="active">
						<a href="#message1" data-toggle="tab">
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img src="/images/reviews-1.png"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding">
							<span class="message-meta"> <h5><% displayShort.from %><span class="date pull-right"><% displayShort.created_at | date:'EEE d' %></span></h5> <% displayShort.subject %></span>
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
				</ul>
			</div>

			<div class="col-xs-9 all-correspondence" id="style-2" ng-init="getMessage();">
				<!-- Tab panes -->
				<div class="tab-content" ng-repeat="display in displayData">
					<div class="message-thread" >
						<div class="col-md-2 no-padding correspondent-image">
							<span class="user-photo"><img src="/images/reviews-3.png"></span><span class="status busy"></span>
						</div>
						<br>
						<div class="col-md-11 no-padding correspondent-meta" >
							<span class="message-meta"><h5><% display.subject %><span class="date pull-right"><% display.created_at | date:'EEE d' %></span></h5> <span><% display.from %></span><span class="message-delete"><button></button></span> </span>
							<br>
							<span class="message"><% display.message %></span>
						</div>
						<br>
					</div>
				</div>
				<input id="hideInputField" type="text" placeholder="Write reply here ..." class="col-md-12 no-margin" ng-focus="expandTextArea();" />
				<div id="showTextField" style="position: relative;display:none">
					
					<textarea ng-model="message.text" id="expand" placeholder="Write reply here ..." class="col-md-12 no-margin"  >
					</textarea>
					<input type="image" name="submit" src="/images/icons/send.png" border="0" alt="Submit" ng-click="sendMessage()" /> 
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- /.row -->
</div>

@endsection
<script src="/js/jquery.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/tinymce.min.js"></script>
<!-- tinymce text editor UI Customization-->
<script>
	tinymce.init(
		{
			selector:'textarea',
			menubar: false,
			height : "50",
			file_browser_callback : 'myFileBrowser'
		});

	
</script>

<script>
var app = angular.module('messagePage', [], function($interpolateProvider) {
	        $interpolateProvider.startSymbol('<%');
	        $interpolateProvider.endSymbol('%>');
    	});

//inserting send message into the database 
app.controller('messageCtrl', function($scope, $http) {
	
	$scope.expandTextArea = function() {

	    $("#expand").animate({ height: "8em" }, 500); 
	    $("#showTextField").css('display', 'block');
	    $("#hideInputField").css('display', 'none');
    };

	//function for sending message
	$scope.sendMessage = function() {
		$("#showTextField").css('display', 'none');
	    $("#hideInputField").css('display', 'block');
	    tinyData = tinyMCE.activeEditor.getContent();
	    console.log(tinyData);
		var data = {
					message: tinyData
				   };
		$http({
		    url: "/sentMessages", 
		    method: "GET",
		    params: data
		 })
		.success(function(response) {
			$scope.getMessage();
			$scope.sendShortMessage();
		});
	};

	//get all the message which is realted to logged in user
	$scope.getMessage = function() {
		$http({
		    url: "/getAllMessage", 
		    method: "GET",
	    })
	    .success(function(response) {
	    });
	};

	$scope.getUserMessage = function($fromID) {
		var data = {user: $fromID};
		$http({
		    url: "/getUserMessage", 
		    method: "GET",
		    params: data
	    })
	    .success(function(response) {
	    	$scope.displayData = response;
	 	});
	};

	//get short description 
	//function for sending message
	$scope.sendShortMessage = function() {
		$http({
		    url: "/getShortDescriptions", 
		    method: "GET"
	    })
		.success(function(response) {
			console.log(response);
			$scope.displayShortData = response;
	 	});
	};
});
</script>
