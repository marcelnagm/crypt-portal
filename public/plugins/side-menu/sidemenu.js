(function () {
	"use strict";

	var slideMenu = $('.side-menu');

	// Toggle Sidebar
	$(document).on('click','[data-toggle="sidebar"]',function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	$(window).on('load resize',function(){
        if($(window).width() < 739){
            $('.side-menu').hover(function(event) {
				event.preventDefault();
				$('.app').addClass('sidenav-toggled');
			});
		}
		if($(window).width() > 739.5){
			$('.side-menu').hover(function(event) {
				event.preventDefault();
				$('.app').removeClass('sidenav-toggled');
			});
		}
    });


	// Activate sidebar slide toggle
	$("[data-toggle='slide']").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.slide-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});
	
	// Activate sidebar slide toggle
	$("[data-toggle='sub-slide']").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.sub-slide-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});
	
	

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();
	
	
	// ______________Active Class
	$(".app-sidebar a").each(function() {
	  var pageUrl = window.location.href.split(/[?#]/)[0];
		if (this.href == pageUrl) { 
			$(this).addClass("active");
			$(this).parent().addClass("active"); // add active to li of the current link
			$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
			$(this).parent().parent().parent().parent().parent().addClass("active"); 
			$(this).parent().parent().prev().click(); // click the item to make it drop
		}
	});
	
	var toggleSidebar = function() {
		var w = $(window);
		if(w.outerWidth() <= 1024) {
			$("body").addClass("sidebar-gone");
			$(document).off("click", "body").on("click", "body", function(e) {
				if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
					$("body").removeClass("sidebar-show");
					$("body").addClass("sidebar-gone");
					$("body").removeClass("search-show");
				}
			});
		}else{
			$("body").removeClass("sidebar-gone");
		}
	}
	toggleSidebar();
	$(window).resize(toggleSidebar);
	
	//p-scroll
	const ps1 = new PerfectScrollbar('.sidebar-scroll', {
		suppressScrollX: true
		});
		
		
	
	//sticky-header
		$(window).on("scroll", function(e){
		if ($(window).scrollTop() >= 70) {
			$('.main-header').addClass('fixed-header');
			$('.main-header').addClass('visible-title');
		}
		else {
			$('.main-header').removeClass('fixed-header');
			$('.main-header').removeClass('visible-title');
		}
    });
	
	

})();