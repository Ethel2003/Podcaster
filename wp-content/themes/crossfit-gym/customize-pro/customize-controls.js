( function( api ) {
	// Extends our custom "crossfit-gym" section.
	api.sectionConstructor['crossfit-gym'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );