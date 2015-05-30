function ForceError(text)
{
    $('.payment-errors').toggle().text(text);
    setTimeout(function(){ $('.payment-errors').toggle('slow'); }, 5000);
}

(function() {
    $("#app_date").datepicker({minDate:new Date()});
    $("#app_date").change(function(){
        $('#service').parent().parent().removeClass('has-error');
        var id = $('#service').val();
        if(id==0)
        {
            ForceError('Please Select Service First');
            $('#service').parent().parent().addClass('has-error');
            return false;
        }
        $.post("/services/hours", { id: id, date: $(this).val() })
            .done(function( data ) {
                var value = $.parseJSON(data);
                console.log(value);
                if(value.has_error)
                {
                    ForceError('Service Error Please Refresh The Page. IF the problem continue please contact Admin')
                }
            });
    });

    var StripeBilling = {
        init: function() {
            this.form = $('#billing-form');
            this.submitButton = this.form.find('input[type=submit]');
            this.submitButtonValue = this.submitButton.val();
            var stripeKey = 'pk_test_eCTKi0YvxposAMlAwkYW6cli';
            Stripe.setPublishableKey(stripeKey);
            this.bindEvents();
        },
        bindEvents: function() {
            this.form.on('submit', $.proxy(this.sendToken, this));
        },

        sendToken: function(event) {
            this.submitButton.val('One Moment').prop('disabled', true);
            Stripe.createToken(this.form, $.proxy(this.stripeResponseHandler, this));
            event.preventDefault();
        },
        stripeResponseHandler: function(status, response) {
            if (response.error) {
                ForceError(response.error.message);
                return this.submitButton.prop('disabled', false).val(this.submitButtonValue);
            }
            $('<input>', {
                type: 'hidden',
                name: 'stripe-token',
                value: response.id
            }).appendTo(this.form);
            this.form[0].submit();
        }
    };
    StripeBilling.init();

})();