import { addFilter } from '@wordpress/hooks';
import { unregisterBlockStyle } from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';

/**
 * Remove Core Block Style Variations
 */
function removeCoreBlockStyleVariations() {
	/* ---- Core Button Block ---- */
	unregisterBlockStyle('core/button', 'fill');
	unregisterBlockStyle('core/button', 'outline');

	/* ---- Core Quote Block ---- */
	unregisterBlockStyle('core/quote', 'default');
	unregisterBlockStyle('core/quote', 'plain');
	unregisterBlockStyle('core/quote', 'large');

	/* ---- Core Table Block ---- */
	unregisterBlockStyle('core/table', 'regular');
	unregisterBlockStyle('core/table', 'stripes');

	/* ---- Core Image Block ---- */
	unregisterBlockStyle('core/image', 'default');
	unregisterBlockStyle('core/image', 'rounded');

	/* ---- Core Separator Block ---- */
	unregisterBlockStyle('core/separator', 'default');
	unregisterBlockStyle('core/separator', 'wide');
	unregisterBlockStyle('core/separator', 'dots');

	/* ---- Core Site Logo Block ---- */
	unregisterBlockStyle('core/site-logo', 'default');
	unregisterBlockStyle('core/site-logo', 'rounded');
}

domReady(removeCoreBlockStyleVariations);

function normalizeMediaTextBlock(settings, name) {
	if (name !== 'core/media-text') {
		return settings;
	}

	return {
		...settings,
		attributes: {
			...settings.attributes,
			align: {
				...settings.attributes.align,
				default: '', // remove the default wide alignment
			},
		},
	};
}

addFilter(
	'blocks.registerBlockType',
	'normalize-blocks--media-text-block',
	normalizeMediaTextBlock,
);