$(document).ready(function(){
		$("#tweet").keyup(function(){
			
			//count down the number of characters left in tweet (i.e., count down from 140)
			var box=$(this).val();
			var main = box.length *100;
			var value= (main / 140);
			var count= 140 - box.length;
			
			//animate bar with # of characters left in twitter (fill bar as #character's left decrease)
			if(box.length <= 140){
				$('#count').html(count);
				$('#bar').animate({
					"width": value+'%',
				}, 1);
			}
			else{
				alert('Character Limit Exceeded!');
				;
			}
			return false;
		});

});