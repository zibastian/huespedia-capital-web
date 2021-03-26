jQuery( document ).ready(function() {
	// Init some global vars
	init();

    // Adding listener for submit entry form
    jQuery(document).on( 'submit', 'form#contact-footer', sendContact );

    // Adding listener for submit questions on deal's page
    jQuery(document).on( 'click', 'button#sendQuestionDeal', sendQuestionDeal );

    // Adding listener for submit questions on deal's page
    jQuery(document).on( 'click', 'button#sendInvestment', sendInvestment );

    // Adding listener for Help Center
    jQuery(document).on( 'click', '.help-center li.tablinks', openQuestion );

    // Opening default element for Help Center
    jQuery('li.tablinks[data-id="0"]').click();

    // Adding listener for load more button in Posts Categories display
    jQuery(document).on( 'click', 'body.page-template-list-entries-template .kasseb-load-more button.load-more-button', loadMoreEntries );

    // Adding listener for load more button in MarketPlace
    jQuery(document).on( 'click', 'body.page-template-market-place-template .kasseb-load-more button.load-more-button', loadMoreDeals );

    // Adding listener for submit new password form
    jQuery(document).on( 'submit', 'form#set-password-form', sendNewPassword );
    
    // Adding listener for 
    jQuery(document).on( 'click', '#close-button', function(){
    	jQuery('div#check').remove();
    });
});

function init(){
	jQuery.fn.extend({
		isEmpty: function() {
			return this.val() == "";
		},
	    clear: function() {
	        return this.val("");
	    }
	});

	if (typeof KASSEB === 'undefined') {
		window.KASSEB = {};
	}

	jQuery.extend( KASSEB, {
		sendWpAjaxRequest: function(formdata,type,success,failure){
		    jQuery.ajax({
		        type: "POST",
		        url: "/wp-admin/admin-ajax.php",
		        enctype: 'multipart/form-data',
		        processData: false,
		        contentType: false,
		        data: formdata,
		        dataType : type,
		        success: success,
		        error: failure
		    });
		},
		sendWpAjaxJSONRequest: function(formdata,success,failure){
		    KASSEB.sendWpAjaxRequest(formdata,'json',success,failure);
		},
		sendWpAjaxHTMLRequest: function(formdata,success,failure){
		    KASSEB.sendWpAjaxRequest(formdata,'html',success,failure);
		}
	});
}

function sendContact(e){
	e.preventDefault();

    var submit = jQuery(this).find('button[type="submit"]');
    if(submit.hasClass('kasseb_disable_link')) return;

    submit.addClass('kasseb_disable_link');
    submit.data( 'copy', submit.html() );
    submit.html( KASSEB_LANG.SENDING_CONTACT_FORM+" ..." );

    var formdata = new FormData(this);
    formdata.append('action' , 'kasseb');
    formdata.append('type'   , 'send-contact-form');

    var self = this;
    KASSEB.sendWpAjaxJSONRequest(formdata,function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	if(res.data == '1'){
			jQuery(self).find('input.form-control').clear();
			showSuccessContactAlert( KASSEB_LANG.SUCCESS_SEND_CONTACT_FORM );
        }else{
            alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM+"." );
        }
    },function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM );
    });
}

function sendQuestionDeal(e){
	e.preventDefault();

    var submit = jQuery(this);
    if(submit.hasClass('kasseb_disable_link')) return;

    submit.addClass('kasseb_disable_link');
    submit.data( 'copy', submit.html() );
    submit.html( KASSEB_LANG.SENDING_CONTACT_FORM+" ..." );

    var formdata = new FormData();
    formdata.append('action'   , 'kasseb');
    formdata.append('type'     , 'send-question-deal');
    formdata.append('question' , jQuery('textarea#questionText').val());

    var self = this;
    KASSEB.sendWpAjaxJSONRequest(formdata,function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	if(res.data == '1'){
			jQuery('textarea#questionText').val('');
			showSuccessContactAlert( KASSEB_LANG.SUCCESS_SEND_CONTACT_FORM );
        }else{
            alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM+"." );
        }
    },function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM );
    });
}

function sendInvestment(e){
	e.preventDefault();

    var submit = jQuery(this);
    if(submit.hasClass('kasseb_disable_link')) return;

    submit.addClass('kasseb_disable_link');
    submit.data( 'copy', submit.html() );
    submit.html( KASSEB_LANG.SENDING_CONTACT_FORM+" ..." );

    var formdata = new FormData();
    formdata.append('action', 'kasseb');
    formdata.append('type'  , 'send-investment');

    var self = this;
    KASSEB.sendWpAjaxJSONRequest(formdata,function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	if(res.data == '1'){
			showSuccessContactAlert( KASSEB_LANG.SUCCESS_SEND_CONTACT_FORM );
        }else{
            alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM+"." );
        }
    },function(res) {
        submit.removeClass('kasseb_disable_link');
    	submit.html(submit.data('copy'));
    	alert( KASSEB_LANG.FAILED_SEND_CONTACT_FORM );
    });
}

function openQuestion(evt) {
	jQuery('div.tabcontent').hide();
	jQuery('li.tablinks.active').removeClass('active');
	jQuery(this).addClass('active');
	jQuery('div#answer_'+jQuery(this).data('id')).show();
}

function loadMoreEntries(e){
	e.preventDefault();

	jQuery(this).data( 'copy', jQuery(this).html() );
	jQuery(this).html( KASSEB_LANG.LOADING_TEXT );

	var formdata = new FormData();
    formdata.append('action'   , 'kasseb');
    formdata.append('type'     , 'load-more-entries');
    formdata.append('category' , jQuery(this).data('category'));
    formdata.append('page'     , jQuery(this).data('page'));

    var self = this;
    KASSEB.sendWpAjaxHTMLRequest(formdata,function(res) {
        jQuery('.kasseb-load-more').replaceWith(res);
    },function(res) {
        jQuery(self).html( jQuery(self).data('copy') );
    });
}

function loadMoreDeals(e){
	e.preventDefault();

	jQuery(this).data( 'copy', jQuery(this).html() );
	jQuery(this).html( KASSEB_LANG.LOADING_TEXT );

	var formdata = new FormData();
    formdata.append('action'   , 'kasseb');
    formdata.append('type'     , 'load-more-deals');
    formdata.append('page'     , jQuery(this).data('page'));

    var self = this;
    KASSEB.sendWpAjaxHTMLRequest(formdata,function(res) {
        jQuery('.kasseb-load-more').replaceWith(res);
    },function(res) {
        jQuery(self).html( jQuery(self).data('copy') );
    });
}

function sendNewPassword(e){
	if( jQuery(this).find("input[name='password']").val() != jQuery(this).find("input[name='rpassword']").val() ){
        alert(KASSEB_LANG.PASSWORDS_ARE_NOT_EQUAL);
        jQuery(this).find("input[name='password']").focus();
        e.preventDefault();
    }
}

function showSuccessContactAlert( text ){
	jQuery('body').append('\
		<div class="pop-up-check" id="check">\
		    <div class="content">\
				<img class="img-check" src="/wp-content/themes/kasseb/assets/images/pop-up.png" alt="check">\
		        <div class="content-text">\
					<h1>Thank You.</h1>\
					<p>Your message has been received and we will <br> be contacting you shortly to follow-up.</p>\
		        </div>\
		        <div class="content-buttons"><a href="javascript:void(0);" id="close-button">Agree</a></div>\
		    </div>\
		</div>');
}
