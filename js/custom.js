
DD_roundies.addRule('.container, .qbutton a, blockquote,.comment-reply-link', '10px', true);
DD_roundies.addRule('#sidebarsearch div, .navigation a, .comment-nav a', '20px', true);
DD_roundies.addRule('.wp-caption,.portfnav a', '5px', true);
DD_roundies.addRule('.commentlist li', '10px', true);

function equalHeight(group) {
	tallest = 0;
	group.each(function() {
		thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}