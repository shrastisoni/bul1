angular.module('profileUpdate', ['imageupload'], function($interpolateProvider, $compileProvider) {
	               $interpolateProvider.startSymbol('<%');
	               $interpolateProvider.endSymbol('%>');
	           })
	            .controller('profileUpdateController', function($scope, $http) {

	            	$scope.makeEditableFunc = function(inputId) {
	            		inputId.disabled = !(inputId.disabled);
				        if (inputId.disabled)
				            inputId.classStyle = "profileEditDisableInput";
				        else
				            inputId.classStyle = "profileEditEnableInput";
	            	};

	            	$scope.chooseImage = function(imageId) {
	            		$('#'+imageId).click();
					};
	                $scope.single = function() {
	                	var profilePic = $scope.profilePic;
	                	var coverPic = $scope.coverPic;
	                    var formData = new FormData();
	                    formData.append('profilePic', profilePic, profilePic.name);
	                    formData.append('coverPic', coverPic, coverPic.name);
	                    var data = {
							profilePic: $scope.profilePic,
							coverPic: $scope.coverPic
						};
	                    $http({
						    url: "/profileDataSave", 
						    method: "POST",
						    params: data
						 })
						.success(function(response) {
							console.log(response);
						});
	                };
	                $scope.updateProfileData = function(){
	                	
	                	@if($business->businessId)

	                	$scope.edit.name.disabled = true;
	                	$scope.edit.location.disabled = true;
	                	$scope.edit.about.disabled = true;
	                	$scope.edit.serviceCoverage.disabled = true;
	                	$scope.edit.phone.disabled = true;
	                	$scope.edit.website.disabled = true;

	                	var data = {
	                		name : $scope.edit.name.value,
	                		location : $scope.edit.location.value,
	                		about : $scope.edit.about.value,
	                		serviceCoverage : $scope.edit.serviceCoverage.value,
	                		phone : $scope.edit.phone.value,
	                		website : $scope.edit.website.value
	                	};

	                	@else

	                	$scope.edit.name.disabled = true;
	                	$scope.edit.location.disabled = true;
	                	$scope.edit.about.disabled = true;
	                	var data = {
	                		name : $scope.edit.name.value,
	                		location : $scope.edit.location.value,
	                		about : $scope.edit.about.value
	                	};

	                	@endif

				        $http({
						    url: "/profileDataSave", 
						    method: "GET",
						    params: data
						 })
						.success(function(response) {
							console.log(response);
						});
				    };
	            });