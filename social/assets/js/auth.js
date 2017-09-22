$(document).ready(function(){
// 	$("#login").click(function(event){
// 		event.preventDefault();
// 		var username = $("#username").val();
// 		var password = $("#password").val();
// 		var data = $("username=" + username + "&password" + password);

// 		$.ajax({
// 			type: "POST",
// 			url: '/auth/login',
// 			dataType: "json",
// 			data: data,
// 			// data: {username: username, password: password},
// 			success: function(data){

// 			}
// 		});
// 		return false;
// 	});

	$('.message a').click(function(){
	   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});

});

