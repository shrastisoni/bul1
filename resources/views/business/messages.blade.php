@extends('home.header')

@section('content')
<div class="container" ng-app="messagePage">

	<!-- Content Row -->

	<div class="row"  ng-controller="messageCtrl">
	
		<div class="col-lg-12" >
			<h2 class="content-heading"><img src="/images/icons/messages.png" class="icon">Messages</h2>
			<div class="col-md-3 no-padding">
				<a href="#">
				<button type="button" class="btn btn-default edit-this-page no-margin-top" data-toggle="modal" data-target="#myModal"	><img src="/images/icons/edit-white.png" class="icon">
					Compose New Message
				</button>
				<!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    	<!-- Modal content-->
			        <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="text-align: center;">Compose Message</h4>
			        </div>
		            
				        <div class="form-group">
				            <label for="inputEmail">To</label>
				           <input id="tags" style="margin: 0 !important" type="text" class="form-control"  ng-model="compose.to" > 
				        </div>
				        <div class="form-group">
				            <label for="inputPassword">Subject</label>
				            <input style="margin: 0 !important" type="text" class="form-control" auto-complete ui-items="names" ng-model="compose.subject">
				        </div>
				        <div class="form-group" >
						  <label for="comment">Message:</label>
						  <textarea ng-model="compose.message" style="margin: 0 !important;resize: none;" class="form-control" rows="5" id="comment"></textarea>
						</div>
						<br>
						<button id="upload" type="submit" ng-click='composeMessage();'  class="btn btn-primary">Send</button>
				    </div>
			    </div>
			  </div>
				</a>
			</div>

			<!-- compose a message box -->
			<div class="col-md-6 no-padding-right">
				
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
			<div class="col-xs-3 all-contacts no-padding" style="z-index:10" ng-init="sendShortMessage()" >
				<!-- required for floating -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-left" >
					<li class="active" ng-repeat="displayShort in displayShortData" ng-click="getUserMessage(displayShort.id);select($index);" >
						<a href="#message1" data-toggle="tab" ng-style="myStyle" >
						<div class="col-md-2 no-padding">
							<span class="user-photo"><img style="width: 40px;" ng-src="<% displayShort.path ? displayShort.path :'/images/bg-logo.png'%>"></span><span class="status online"></span>
						</div>
						<div class="col-md-10 no-padding" ng-click="select($index);" >
							<span class="message-meta"> <h5 ng-class="{myActive: $index === selectedIndex }"><% displayShort.from %><span class="date pull-right"><% displayShort.epoch | date:'EEE d' %></span></h5> <% displayShort.subject %></span>
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

			<div class="col-xs-9 all-correspondence" style="z-index:10" id="style-2" >
				<!-- Tab panes -->
				<div class="tab-content" ng-repeat="display in displayData track by $index">
					<div class="message-thread" >
						<div class="col-md-2 no-padding correspondent-image">
							<span class="user-photo"><img style="width: 40px;"  ng-src="<% display.path ? display.path :'/images/bg-logo.png'%>"></span><span class="status busy"></span>
						</div>
						<br>
						<div class="col-md-11 no-padding correspondent-meta" >
							<span class="message-meta" style="width: 800px;"><h5> <% display.subject %> <span class="date pull-right"><% display.created_at | date:'EEE d' %></span></h5> <span><% display.from %></span><span class="message-delete"><button></button></span> </span>
							<br>
							<span class="message" ng-bind-html="display.escapedHtml"><% display.message %></span>
						</div>
						<br>
					</div>
				</div>
			</div>

			<input id="hideInputField" type="text" style="width: 74%;margin-left: 26% !important;" placeholder="Write reply here ..." class="col-md-12 no-margin" ng-focus="expandTextArea();" />
			<div id="showTextField" style="display:none;width: 74%;margin-left: 26%;">
				<div  id="expand" placeholder="Write reply here ..." class="col-md-12 no-margin"  >
					
				</div>
				<br>
				<input type="image" name="submit" src="/images/icons/send.png" border="0" alt="Submit" ng-click="sendMessage()" /> 
			</div>
		</div>
		
	</div>

</div>
	<!-- /.row -->
</div>

@endsection


<script src="/js/jquery.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="/js/tinymce.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/tag-it.js" type="text/javascript" charset="utf-8"></script>

<script>
tinymce.init({
	selector:'#expand',
	menubar: false,
	height : "50",
 	plugins: "emoticons",
    toolbar: "emoticons"
});

 
$(document).ready(function(){
  $('.comment').each(function(i, d){
    $(d).emoji();
  });
});

</script>
<style>
.mce-panel
{
	background-color: #fff !important;
}

#dragandrophandler
{
	border:2px dotted #337ab7 !important;
	width:100%;
	color:#92AAB0;
	text-align:left;vertical-align:middle;
	padding:10px 10px 10 10px;
	margin-bottom:10px;
	font-size:200%;
}

.progressBar 
{
    width: 38%;
    height: 22px;
    border: 1px solid #ddd;
    border-radius: 5px; 
    overflow: hidden;
    display:inline-block;
    margin:0px 10px 5px 5px;
    vertical-align:top;
}
 
.progressBar div 
{
    height: 100%;
    color: #fff;
    width: 100%;
    text-align: center;
    line-height: 22px; /* same as #progressBar height if we want text middle aligned */
    width: 0;
    background-color: #337ab7; border-radius: 3px; 
}

.statusbar
{
    border-top:1px solid #A9CCD1;
    min-height:25px;
    width:100%;
    padding:10px 10px 0px 10px;
    vertical-align:top;
}

.statusbar:nth-child(odd){
    background:#EBEFF0;
}

.filename
{
	display:inline-block;
	vertical-align:top;
	width:25%;
}
.filesize
{
	display:inline-block;
	vertical-align:top;
	color:#30693D;
	width:100px;
	margin-left:10px;
	margin-right:5px;
}
.abort
{
    background-color:#A8352F;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;display:inline-block;
    color:#fff;
    font-family:arial;font-size:13px;font-weight:normal;
    padding:4px 15px;
    cursor:pointer;
    vertical-align:top
    display: block !important;
}
.myActive
{
	color: #4fb74c !important;
	font-size: 16px !important;
	font-weight: bolder;
}

.ui-widget-content
{
	z-index: 10000000 !important;

}

.drop-box {
    background: #F8F8F8;
    border: 5px dashed #DDD;
    width: 100%;
    height: 65px;
    text-align: center;
    padding-top: 25px;
    
}

.fileUpload
{
	background-color: #fff !important;
}
</style>