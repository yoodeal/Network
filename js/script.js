jQuery(document).ready(function($) {
    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
	// validator
	if ($('.contact-form form').length) {
		$('.contact-form form').validate({
		});
		$('.contact-form form input:checkbox').customInput();
		$('input[placeholder]').placeholder();
        
	}
   $('.contact-form form').submit(function(e){
        
       if ($('.contact-form form').valid()) {
        e.preventDefault();
        $.post('./mail.php', $('.contact-form form').serializeObject(), function(){
            
            alert('Thank you!');
        });
        return false;
       }
    
    
   });

});