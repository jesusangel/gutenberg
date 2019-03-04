/**
 * WordPress dependencies
 */
import {
	registerBlockType,
	setDefaultBlockName,
} from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import * as code from './code';
import * as heading from './heading';
import * as more from './more';
import * as paragraph from './paragraph';
import * as image from './image';
import * as nextpage from './nextpage';
import * as list from './list';

export const registerCoreBlocks = () => {
	[
		paragraph,
		heading,
		code,
		more,
		image,
		nextpage,
		list,
	].forEach( ( { name, settings } ) => {
		registerBlockType( name, settings );
	} );
};

setDefaultBlockName( paragraph.name );
