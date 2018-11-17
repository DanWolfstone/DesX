Mousetrap.bind('up up down down left right left right b a', function() {
	$('#konami').animate({"right": '+=1000'}, 3000).delay(10).animate({"right": '+=1200'}, 2000).delay(2).animate({"right": '+=1200'}, 2000);
});