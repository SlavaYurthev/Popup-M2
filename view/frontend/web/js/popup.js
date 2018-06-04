define([
	'jquery', 
	'Magento_Ui/js/modal/modal', 
	'jquery/jquery.cookie'
], function(jQuery, modal, cookie){
	return function(config, element){
		if(!jQuery.cookie('popup')){
			jQuery(element).modal(config.options).modal("openModal").on('modalclosed', function(){
				var date = new Date();
				date.setTime(date.getTime() + (parseInt(config.lifetime) * 1000));
				jQuery.cookie('popup', true, {
					expires: date
				});
			});
		}
	}
});