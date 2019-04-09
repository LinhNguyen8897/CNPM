document.addEventListener("DOMContentLoaded",function(){
	var x= document.querySelectorAll(' .step ul li.link-item h3.title');
	var page=document.querySelectorAll('.block1');
	console.log(page);
	sumx=x.length;
	var current=0;
	x[current].classList.add('active');
	page[current].classList.add('show');
	var next=document.querySelector('a.next');
	var prev=document.querySelector('a.prev');
	prev.style.opacity=0;
	var nutnao=function(btnnao){
		current=(btnnao=="prev")?((current>0)?current-1:prev.style.opacity=1):((current<sumx-1)?current+1:2);
		for(var i=0;i<sumx;i++){
			x[i].classList.remove('active');
			page[i].classList.remove('show');
		}
		if(current<sumx && current>=0){
		x[current].classList.add('active');
		page[current].classList.add('show');
		}
		// console.log(current);
		(current==sumx-1)?next.innerHTML="Done":next.innerHTML="Next";
		(current>0 && current<=sumx-1)?prev.style.opacity=1:prev.style.opacity=0;
	}
	var nextPage=function(){nutnao("next"); }
	var prevPage=function(){nutnao("prev");}
	next.addEventListener('click',nextPage);
	prev.addEventListener('click',prevPage);
},false)