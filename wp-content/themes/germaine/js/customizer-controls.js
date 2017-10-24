var api = wp.customize;

api.bind( 'ready', function () {
    api.previewer.bind( 'customizer-ready', function() {
        jQuery('.datetimepicker').datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm'
        });
    } );
} );
