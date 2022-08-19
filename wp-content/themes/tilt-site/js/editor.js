wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/paragraph', [
		{
			name: 'header-para',
			label: 'Header Para',
      isDefault: true,

		},
		{
			name: 'first-line',
			label: 'First Line',
		},

	]);

  wp.blocks.registerBlockStyle( 'core/button', [
    {
      name: 'cube',
      label: 'Cube',
      isDefault: true,

    }

  ]);
} );
