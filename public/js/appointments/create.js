function ForceError(text)
{
    $('.payment-errors').toggle().text(text);
    setTimeout(function(){ $('.payment-errors').toggle('slow'); }, 5000);
}

function Clear()
{
    $('#service').parent().parent().removeClass('has-error');
    $('.date_picker_form').removeClass('has-error');
    $('#hours').html('<option value="0">Select One</option>').prop('disabled',true);
}

 function CheckHours(id,date)
{
    $.post("/services/hours", { id: id, date: date })
        .done(function( data ) {
            var value = $.parseJSON(data);
            if(value.has_error)
            {
                ForceError('Service Error Please Refresh The Page. IF the problem continue please contact Admin')
            }
            else{
                var html='';
                if(value.hours)
                {
                    $.each(value.hours, function( index, value ) {
                        html+='<option value="'+index+'">'+value+'</option>'
                    });
                }
                if(html == '')
                {
                    ForceError('Sorry but there is no availability for this date');
                    $('.date_picker_form').addClass('has-error');
                    return false;
                }
                $('#hours').append(html).prop('disabled',false);
            }
        });
}

(function() {
    $("#app_date").datepicker({minDate:new Date()});


    $("#app_date,#service").change(function(){
        Clear();
        var id = $('#service').val();
        var date = $('#app_date').val();
        if(id==0)
        {
            ForceError('Please Select Service First');
            $('#service').parent().parent().addClass('has-error');
            return false;
        }
        CheckHours(id,date)
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