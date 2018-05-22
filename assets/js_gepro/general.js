function textpolitique(){
	$('.tblFooters-text-politique').slideToggle();

}


$(".connected>spasn").on("click", function() {
        $(".connected>span").removeClass("entr-link text-dark font-weight-bold border border-warning border-bottom-0");  // remove active class from all
        $(this).addClass("entr-link text-dark font-weight-bold border border-warning border-bottom-0");         // add active class to clicked element
        
 });

