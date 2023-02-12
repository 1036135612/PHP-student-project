$(".fixed").each(function () {
	var e = $(this);
	var style = e.attr("data-style");
	var top = e.attr("data-offset-fixed");
	if (top == null) { top = e.offset().top; } else { top = e.offset().top - parseInt(top); };
	if (style == null) { style = "fixed-top"; };
	$(window).bind("scroll", function () {
		var thistop = top - $(window).scrollTop();
		if (style == "fixed-top" && thistop < 0) {
			e.addClass("fixed-top");
		} else {
			e.removeClass("fixed-top");
		};
		var thisbottom = top - $(window).scrollTop() - $(window).height();
		if (style == "fixed-bottom" && thisbottom > 0) {
			e.addClass("fixed-bottom");
		} else {
			e.removeClass("fixed-bottom");
		};
	});

});
jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",delayTime:300,triggerTime:0,returnDefault:true});