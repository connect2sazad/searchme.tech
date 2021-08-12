var current_page = 0;

	var total_pages = document.getElementsByClassName('page');

	// console.log("Initially, current_page = "+current_page+", total pages = "+total_pages.length);

	function next_page(){
			// console.log("current_page = "+current_page+1+", total pages = "+total_pages.length);
			if(current_page == 0){
				$("#prev").show();
				
			}
			if(current_page == (total_pages.length-2)){
				$("#next").hide();
				$("#btn").show();
			}
			$('#page-'+current_page).animate({
				"margin-left": "-100%"
			}, 200, function(){
				$('#page-'+current_page).hide();
				current_page+=1;
				$("#page-"+current_page).animate({
					"margin-left": "0%"
				}, 50, function(){
					$("#page-"+current_page).show();
					if(current_page == 0) 
						$('#prev').show();
					
				});
			
            });
			
        }
	function prev_page(){
			
			if(current_page <= 0){
				$("#prev").hide();
			}
			if(current_page == (total_pages.length-1)){
				$("#next").show();
				$("#btn").hide();
			}
			// $('#page-'+current_page).fadeOut('500');
			$('#page-'+current_page).animate({
				"margin-left": "50%",
				"opacity":"0"
				
			}, 200, function(){
				$('#page-'+current_page).hide();
				$('#page-'+current_page).css('opacity',1);
				--current_page;
				$("#page-"+current_page).animate({
					"margin-left": "0%"
				}, 50, function(){
					$("#page-"+current_page).show();
					if(current_page == 0) 
						$('#prev').show();
				});
            });
        }
   //      function prev_page(){
			// console.log("current_page = "+current_page+", total pages = "+total_pages.length);
			// if(current_page <= 0){
			// 	$("#prev").hide();
			// }
			// if(current_page == (total_pages.length-1)){
			// 	$("#next").show();
			// 	$("#btn").hide();
			// }
			// $('#page-'+current_page).animate({
			// 	"margin-left": "100%"
			// }, 500, function(){
			// 	$('#page-'+current_page).hide();
			// 	--current_page;
			// 	$("#page-"+current_page).animate({
			// 		"margin-left": "0%"
			// 	}, 500, function(){
			// 		$("#page-"+current_page).show();
			// 		if(current_page == 0) 
			// 			$('#prev').show();
			// 	});
   //          });
   //      }