document.getElementsByClassName('InvokeModal')[0].onclick=function(){
	window.scrollTo(0,window.scrollY);
	document.body.style.overflow="hidden";
	document.getElementsByClassName('MyModal')[0].style.display="block";
}
document.getElementsByClassName('CloseModal')[0].onclick=function(){
	document.body.style.overflow="visible";
	document.getElementsByClassName('MyModal')[0].style.display="none";
}