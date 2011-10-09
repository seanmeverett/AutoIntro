$('button').click(function(){
	var userID = 1;
		
	//cycle through the AngelList users (userIDs go up to at least 11,000)
	for (userID = 1; userID<=30; userID++){
		$.getJSON('lib/angelapi.php?user=' + userID,function(json){
			
			//initialize variables
			var rolesArr = [];
			var isInvestor = 0;
                
			//cycle through each of the person's roles (e.g., Angel, VC, Entrepreneur)
			$.each(json.roles, function(i,roles){
			   	rolesArr.push('<a href="'+roles.angellist_url+'">'+roles.display_name+'</a>');
			   	if (roles.id == 9300 || roles.id == 9306){
			   		isInvestor = 1; //yes
			   	};
			});
				
			//only show those people who have Angel (id=9300) OR VC (id=9306) roles
			if (isInvestor == 1){
			
				//extract twitter handles from Angellist API
				var twitterString = json.twitter_url;			
            	if (twitterString.search("!") > 0 && twitterString.search("www") > 0){
                	//FORMAT:  http://www.twitter.com/#!/handle
            		var twitterHandle = twitterString.substr(26);
            	};
            	if (twitterString.search("!") > 0 && twitterString.search("www") < 0){
                	//FORMAT:  http://twitter.com/#!/handle
                	var twitterHandle = twitterString.substr(22);
                };
                if (twitterString.search("!") < 0 && twitterString.search("www") > 0){
                	//FORMAT:  http://www.twitter.com/handle
                	var twitterHandle = twitterString.substr(23);
                };
				if (twitterString.search("!") < 0 && twitterString.search("www") < 0){
                	//FORMAT:  http://twitter.com/handle
                	var twitterHandle = twitterString.substr(19);
                }; 
				
				//set up image blocks and data of only investors
				var roles = rolesArr.join(', ');
				var imgCont = '<div class="image-container" style="background: url('+json.image+');"><div class="image-info"><p class="top"><a class="title" href="'+json.angellist_url+'">'+json.name+'</a> <span class="author">Connect: <a href="'+json.twitter_url+'">Twitter </a><a href="'+json.linkedin_url+'">Linkedin </a></span></p></p>';
				
                imgCont += '<p><span class="infoTitle">Investor Type:</span> '+roles+'</p>';     
                $(imgCont).appendTo('#image-container');
                
                //need to modify this to show a list of twitter handles instead of a new block for each handle        
                var twitterDisplay = '<div class="twitter-container";"><div class="twitter-info-active"><p class="top"><span class="author"><a href="'+twitterString+'">'+twitterHandle+'</a></span></p></p>';	
				$(twitterDisplay).appendTo('#twitter-container');
        	};
		});
	};
		
	//assign hover actions to each image
    $('.image-container').live('mouseover', function(){
       	$(this).children('div').attr('class', 'image-info-active');
    });
	$('.image-container').live('mouseout', function(){
        $(this).children('div').attr('class', 'image-info');
	});
});
