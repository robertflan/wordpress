( function( api ) {

	// Extends our custom "avis-pro" section.
	api.sectionConstructor['sketch-upsell'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );