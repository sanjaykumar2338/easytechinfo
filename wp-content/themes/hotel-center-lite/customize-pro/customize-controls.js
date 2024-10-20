( function( api ) {
	// Extends our custom "hotel-center-lite" section.
	api.sectionConstructor['hotel-center-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );