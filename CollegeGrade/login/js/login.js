var main = function () {$(':button').click(function () {
	user = $("input[name='user']").val()
	window.location.replace("../homePageStu/homePage.php?user="+user+"&class=cumGrades");
	});
	};
