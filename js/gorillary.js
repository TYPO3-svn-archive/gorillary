var gorillary = {};


gorillary.init = function(){

	
	$('.tx_gorillary_image').css('position', 'relative');
	$('.tx_gorillary_overlay').hide();
	
	$('.tx_gorillary_collection li a').bind('click',function(e){
		var top = $('.tx_gorillary_image img').height()/2-50;
		var left = $('.tx_gorillary_image img').width()/2-50;
		$('.tx_gorillary_loader_container').css('top',top+'px');
		$('.tx_gorillary_loader_container').css('left',left+'px');
		$('.tx_gorillary_loader_container').fadeIn();
		$('.tx_gorillary_overlay').load(this.href+' .tx_gorillary_image',"",function(){	//html loaded
			$('.tx_gorillary_overlay img').bind('load', function(){	//image loaded
				$('.tx_gorillary_loader_container').fadeOut();
				$('.tx_gorillary_overlay').fadeIn(1000,gorillary.fadeFinished);
			});	
		});

		return false;
	});

}

gorillary.fadeFinished = function(){
	$('.tx_gorillary_image')[0].innerHTML = $('.tx_gorillary_overlay')[0].innerHTML;
	$('.tx_gorillary_overlay').hide();
}
$(document).ready(function(){
	gorillary.init();
});
