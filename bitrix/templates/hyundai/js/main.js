
$('#_wJumpToCars').click(function () {

    yaCounter49157044.reachGoal('avto_v_nalichii', false, function () {
        console.log('goal avto_v_nalichii');
    });

    gtag('event', 'avto_v_nalichii', {
        event_category: 'click',
        event_label: 'avto_v_nalichii'
    });

});

window.onload = function() {
    $('.showroom-car__name').each(function (id, elem) {
        if($(this).text() == 'i30 N'){
            $(this).closest('.showroom-car').remove();
        }
    });
};