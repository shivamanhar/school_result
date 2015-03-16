$(document).ready(function() {

    $('#datepicker-example1').Zebra_DatePicker();

    $('#datepicker-example2').Zebra_DatePicker({
        direction: 1    // boolean true would've made the date picker future only
                        // but starting from today, rather than tomorrow
    });

    $('#datepicker-example3').Zebra_DatePicker({
        direction: true,
        disabled_dates: ['* * * 0,6']   // all days, all monts, all years as long
                                        // as the weekday is 0 or 6 (Sunday or Saturday)
    });

    $('#datepicker-example4').Zebra_DatePicker({
        direction: [1, 10]
    });

  $('#datepic').Zebra_DatePicker({
        format: 'd-m-Y'
    });
   $('#datepic_feedback').Zebra_DatePicker({
        format: 'd-m-Y'
    });
    $('#datepicker-from').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        //format: 'd-m-Y',
         direction: ['2013-11-17', '2014-11-17']
       // 
       
    });
    $('#datepicker-to').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
         direction: ['2013-11-17', '2014-11-17']
         //format: 'd-m-Y'
    });

    $('#datepicker-example6').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        direction: ['2012-08-01', false]
    });

    $('#datepicker-example7-start').Zebra_DatePicker({
        direction: true,
        pair: $('#datepicker-example7-end')
    });

    $('#datepicker-example7-end').Zebra_DatePicker({
        direction: 1
    });

    $('#datepicker-example8').Zebra_DatePicker({
        format: 'd-m-Y',
        view: 'years'
    });

    $('#datepicker-example9').Zebra_DatePicker({
        show_week_number: 'Wk'
    });

    $('#datepicker-example10').Zebra_DatePicker({
        view: 'years'
    });

    $('#datepicker-example11').Zebra_DatePicker({
        format: 'm Y'
    });

    $('#datepicker-example12').Zebra_DatePicker({
        onChange: function(view, elements) {
            if (view == 'days') {
                elements.each(function() {
                    if ($(this).data('date').match(/\-24$/))
                        $(this).css({
                            background: '#C40000',
                            color:      '#FFF'
                        });
                });
            }
        }
    });

    $('#datepicker-example13').Zebra_DatePicker({
        always_visible: $('#container')
    });

    $('#datepicker-example14').Zebra_DatePicker();

});