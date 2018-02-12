function scroll_down_effect_on_header(){
			var content=document.getElementById("content");
			var header=document.getElementById("header");
			var logo=document.getElementById("logo");
			var scroll_y = 200-content.scrollTop/12;
			header.style.height=scroll_y+"px";
			
		
			if (scroll_y < 140 ){
				header.classList.add("is-compact");
				logo.style.marginTop=scroll_y-180+"px";
				if (scroll_y < 64 ){
				logo.style.marginTop=-114+"px";
				}
			}
			if (scroll_y > 160 ){
				header.classList.remove("compact",1000);
			}
					 
		}