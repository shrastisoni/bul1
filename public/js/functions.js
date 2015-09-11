/**
 * @author Bhaskar Rajoriya
 */
function followIt(toType, typeId) 
{
	var followData = 
	{
		"toType" : toType,
		"typeId" : typeId,
		"_token": $('meta[name="csrf-token"]').attr('content')
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
listen 80 default_server;
        listen [::]:80 default_server ipv6only=on;

        root /usr/share/nginx/html;
        index index.php index.html index.htm;

        # Make site accessible from http://localhost/
        server_name localhost;
        include hhvm.conf;

        location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ /index.php?$query_string;
                # Uncomment to enable naxsi on this location
                # include /etc/nginx/naxsi.rules
        }