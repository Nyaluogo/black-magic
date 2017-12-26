var stripe = Stripe('pk_test_XRZh2TCZ4G477reQz4QEsd2f');

var $form = $('#checkout-form');

$form.submit(function(event){
  $('#charge-error').addClass('hidden');
  $form.find('button').prop('disabled',true);
  Stripe.card.createToken({
    number: $('#card-number').val(),
    cvc: ('#card-cvc').val(),
    exp-month: $('#card-expiry-month').val(),
    exp-year: $('#card-expiry-year').val(),
    name: $('#card-name').val(),
  }, stripeResponseHandler);
  return false;//to quit the form submition to pave way for laravel
});

function stripeResponseHandler(status, response){
  if(response.error){
    $('#charge-error').removeClass('hidden');
    $('#charge-error').text(response.error.message);
    $form.find('button').prop('disabled',false);
  }else{
    var token = response.id;
    // Insert the token into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken" />').val(token));

    // Submit the form:
    $form.get(0).submit();
  }
}
