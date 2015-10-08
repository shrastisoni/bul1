		
var app = angular.module('messagePage', ['ngSanitize'], function($interpolateProvider) {
        		$interpolateProvider.startSymbol('<%');
        		$interpolateProvider.endSymbol('%>');
    		});

app.controller('messageCtrl', ['$scope', '$http', '$compile', '$sce', '$timeout', 'fileUpload', function($scope, $http, $compile, $sce, $timeout, fileUpload) {

	
	$scope.names = ["john"];
 	$scope.string = "";
 	$scope.tags = [];

 	 $scope.message = "String including Emoji codes :smiley:";

	$scope.select= function(i) {
		
	  $scope.selectedIndex = i;
	};

	$scope.loadAll = function() {
		
		$http({
		    url: "/autoLoadAllUsers", 
		    method: "GET",
		 })
		.success(function(response) {
			var i = 0;
			angular.forEach(response, function(value) {
			  $scope.names[i] = value['email'];  
			  i++;
			});
			
		});
	};

	$scope.loadAll();
	
	$scope.expandTextArea = function() {
	    $("#expand").animate({ height: "100px" }, 500); 
	    $("#showTextField").css('display', 'block');
	    $("#hideInputField").css('display', 'none');
    };
	
	$scope.sendMessage = function() {
		$("#showTextField").css('display', 'none');
	    $("#hideInputField").css('display', 'block');
	    tinyData = tinyMCE.activeEditor.getContent();
	
		var data = {
					message: tinyData
				   };
		$http({
		    url: "/sentMessages", 
		    method: "GET",
		    params: data
		 })
		.success(function(response) {
			
			$scope.sendShortMessage();
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
	    	angular.forEach(response, function(value) {
			  	value.escapedHtml = $sce.trustAsHtml(value.message);
			});
	    	$scope.displayData = response;
	    	
	 	});
	};


	$scope.sendShortMessage = function() {
		
		$http({
		    url: "/getShortDescriptions", 
		    method: "GET"
	    })
		.success(function(response) {

			$scope.displayShortData = response;
	 	});
	};


	$scope.composeMessage = function() {
	
		var data = {
						to: $scope.compose.to,
						subject: $scope.compose.subject,
						message: $scope.compose.message,
					};
		$http({
		    url: "/createMessage", 
		    method: "GET",
		    params: data
	    })
		.success(function(response) {
			console.log(response);
	 	});
	};

	/*function refershCountinue()
	{
		$scope.sendShortMessage();
		$scope.getUserMessage();
		$timeout(refershCountinue, 500);
	}

	$timeout(refershCountinue, 500);*/
	
	$scope.uploadImages = function() {
		
		console.log("file upload");
		console.log(fileData);
		
		alert(1);
		$.ajax({
            url: 'upload.php', // point to server-side PHP script 
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(php_script_response){
                alert(php_script_response); // display response from the PHP script, if any
        	}
    	});
	};

	$(function() {
    var availableTags = $scope.names;
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#tags" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  });
		


}]);

app.directive('autoComplete', function($timeout) {
    return function(scope, iElement, iAttrs) {
            iElement.autocomplete({
                source: scope[iAttrs.uiItems],
                select: function() {
                    $timeout(function() {
                      iElement.trigger('tagManager');
                    }, 0);
                }
            });
    };
});

app.directive('fileModel', ['$parse', function($parse) {
   return {
     restrict: 'A',
     link: function(scope, element, attrs) {
       var model = $parse(attrs.fileModel);
       var modelSetter = model.assign;

       element.bind('change', function() {
         scope.$apply(function() {
           modelSetter(scope, element[0].files[0]);
         });
       });
     }
   };
 }]);

app.service('fileUpload', ['$http', function($http) {
   this.uploadFileToUrl = function(file, uploadUrl, id) {
     var fd = new FormData();
     fd.append('file', file);
     $http.post(uploadUrl, fd, {
         transformRequest: angular.identity,
         headers: {
           'Content-Type': undefined
         },
         params: {
           id: id
         }
       })
       .success(function(data) {
         console.log(data);
       })
       .error(function(data) {
         console.log(data);
       });
   }
 }]);

app.directive('tagManager', function() {
    return {
        restrict: 'E',
        scope: { tags: '=' },
        template:
            "<div class='tags'>" +
            "<a ng-repeat='(idx, tag) in tags' class='tag' ng-click='remove(idx)'>{{tag}}</a>" +
            "</div>" +
            "<input type='text' placeholder='Add a tag...' ng-model='new_value'></input>" +
            "<a class='btn' ng-click='add()'>Add</a>",
        link: function ( $scope, $element ) {
            // FIXME: this is lazy and error-prone
            var input = angular.element( $element.children()[1] );
            
            // This adds the new tag to the tags array
            $scope.add = function() {
                $scope.tags.push($scope.new_value);
                $scope.new_value = "";
            };
            
            // This is the ng-click handler to remove an item
            $scope.remove = function ( idx ) {
                $scope.tags.splice( idx, 1 );
            };
            
            // Capture all keypresses
            input.bind( 'keypress', function ( event ) {
                // But we only care when Enter was pressed
                if ( event.keyCode == 13 ) {
                    // There's probably a better way to handle this...
                    $scope.$apply( $scope.add );
                }
            });
        }
    };
});


