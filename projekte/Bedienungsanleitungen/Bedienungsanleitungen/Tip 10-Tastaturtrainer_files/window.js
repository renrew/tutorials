function newWindow(url,width,height) {
	
	var swidth = screen.availWidth;
	var sheight = screen.availHeight;

	var wwidth;
	var wheight;
	var wleft;
	var wtop;
	
	if (!width) {
		wwidth = 770;
		wheight = 570;
	} else {
		wwidth = width+20;
		wheight = height+20;
	}
	
	wleft = (swidth/2)-((wwidth)/2);
	wtop = (sheight/2)-((wheight+40)/2);
	
	simpleparams = "menubar=yes,status=yes,statusbar=yes";
	
	Fhelpwindow=open(url,11,"width="+(wwidth)+",height="+(wheight)+",left="+(wleft)+",top="+(wtop)+",location=no,resizable=yes,scrollbars=yes,dependent=yes,"+simpleparams);
	Fhelpwindow.focus();
}
