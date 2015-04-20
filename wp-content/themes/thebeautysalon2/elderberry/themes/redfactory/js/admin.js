jQuery( document ).ready( function() {

	jQuery( '.eb-datepicker-monthday' ).datepicker({
		dateFormat: "MM dd",
	})



	jQuery( '.add_seasonal_pricing' ).click( function() {
		jQuery( '.eb-datepicker-monthday' ).datepicker( 'destroy' );

		container = jQuery( this ).parents( '.control:first' );
		element = jQuery( '.seasonal_pricing:first' ).clone();
		element.find( 'input' ).val( '' );
		container.find( '.control-subgroups' ).append( element )

		element.find( '.eb-datepicker-monthday' ).removeAttr( 'id' )
		jQuery( '.eb-datepicker-monthday' ).datepicker({
			dateFormat: "MM dd",
		})
	})



})