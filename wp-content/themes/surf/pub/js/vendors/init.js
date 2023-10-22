;(function ($) {


	if ($('body').hasClass('page-template-tpl-dev-fintech-new')) {
		const start = new Date().getTime();

		let oldtitle = $('#contact .contact__title').text();
		let oldbtntext = $('#contact #send').text();
		setTimeout(function() {
			let serc = "#contact";
			jQuery.fancybox.open({ 
				src: serc,
				wrapCSS : 'contacts-wrap',
				afterLoad: function() {
					$('#contact.fancybox-content .contact__title').text("Let's develop your banking app!")
					$('#contact.fancybox-content .th-btn-gray').css('display', 'block')
					$('#contact.fancybox-content #send').text("Send your request")
				},
				afterClose: function() {
					$("#contact").show().css('display', 'flex');
					$('#contact .contact__title').text(oldtitle);
					$('#contact .th-btn-gray').css('display', 'none')
					$('#contact #send').text(oldbtntext)
				}
			  });

			  const end = new Date().getTime();
			  console.log('SecondWays:' + (end - start));
		}, 40000)
	}
// 	else if (
// 			$('body').hasClass('postid-2581') ||
// 			$('body').hasClass('postid-4160') ||
// 			$('body').hasClass('postid-3895') ||
// 			$('body').hasClass('postid-2264') ||
// 			$('body').hasClass('postid-3656') ||
// 			$('body').hasClass('postid-2753') ||
// 			$('body').hasClass('postid-249') ||
// 			$('body').hasClass('postid-4475') ||
// 			$('body').hasClass('postid-3064') ||
// 			$('body').hasClass('postid-5780')
// 		) {
// 			const start = new Date().getTime();

// 		let oldtitle = $('#contact .contact__title').text();
// 		let oldbtntext = $('#contact #send').text();
// 		setTimeout(function() {
// 			let serc = "#contact";
// 			jQuery.fancybox.open({ 
// 				src: serc,
// 				wrapCSS : 'contacts-wrap',
// 				afterLoad: function() {
// 					$('#contact .contact__title').text("Let's develop your banking app!")
// 					$('#contact .th-btn-gray').css('display', 'block')
// 					$('#contact #send').text("Send your request")
// 				},
// 				afterClose: function() {
// 					$("#contact").show().css('display', 'flex');
// 					$('#contact .contact__title').text(oldtitle);
// 					$('#contact .th-btn-gray').css('display', 'none')
// 					$('#contact #send').text(oldbtntext)
// 				}
// 			  });

// 			  const end = new Date().getTime();
// 			  console.log('SecondWay:' + (end - start));
// 		}, 50000)
// 	}
	
 

	

})(jQuery);