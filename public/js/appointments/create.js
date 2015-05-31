var subtotal,tax,total = null;

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
    $('.subtotal-amount').text('$ 0.00');
    $('.tax-amount').text('$ 0.00');
    $('.total-amount').text('$ 0.00');
}

function UpdatePrice(id)
{
    if(subtotal != null && tax != null && total != null) {
        if (typeof subtotal === 'string')
        {
            $('.subtotal-amount').text(subtotal);
            $('.tax-amount').text(tax);
            $('.total-amount').text(total);
        }
        else{
            $('.subtotal-amount').text(subtotal[id]);
            $('.tax-amount').text(tax[id]);
            $('.total-amount').text(total[id]);
        }
    }
    else {
        $.post("/services/price", { id: id })  .done(function(data) {
            var value = $.parseJSON(data);
            $('.subtotal-amount').text(value.cost);
            $('.tax-amount').text(value.tax);
            $('.total-amount').text(value.total_price);
        });
    }
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
                    subtotal = value.cost;
                    tax = value.tax;
                    total = value.total_price;
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

    $('#hours').change(function(){

       if($(this).val()!=0)
       {
           UpdatePrice($(this).val());
       }
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