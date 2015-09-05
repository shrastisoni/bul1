/**
 * @author Bhaskar Rajoriya
 */
function followIt(toType, typeId) 
{
	var followData = 
	{
		"toType" : toType,
		"typeId" : typeId,
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
	};
	console.log(followData);
	$.ajax
	({
		data : followData,
		url : '/follow',
		type : 'POST',
		beforeSend : function() 
		{
			
		},
		success : function(data) 
		{
			console.log(data);
		},
		error: function(data)
		{
	    	console.log(data);
	    }
	});
}