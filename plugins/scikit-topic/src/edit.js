// /**
//  * Retrieves the translation of text.
//  *
//  * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
//  */
// import { __ } from '@wordpress/i18n';

// /**
//  * React hook that is used to mark the block wrapper element.
//  * It provides all the necessary props like the class name.
//  *
//  * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
//  */
// import { useBlockProps } from '@wordpress/block-editor';

// /**
//  * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
//  * Those files can contain any CSS code that gets applied to the editor.
//  *
//  * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
//  */
// import './editor.scss';

// /**
//  * The edit function describes the structure of your block in the context of the
//  * editor. This represents what the editor will render when the block is used.
//  *
//  * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
//  *
//  * @return {WPElement} Element to render.
//  */
// export default function Edit() {
// 	return (
// 		<p { ...useBlockProps() }>
// 			{ __( 'Scikit Topic – hello from the editor!', 'scikit-topic' ) }
// 		</p>
// 	);
// }

import { __ } from '@wordpress/i18n';
import { useBlockProps,InnerBlocks } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';
import './editor.scss';
 
export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	const updateFieldValue = ( val ) => {
        setAttributes( { content: val } );
    }
    return (
        <div { ...blockProps }>
			<TextControl
                    value={ attributes.content }
					onChange={ updateFieldValue }
					class={
						"topic-title"
					}
            />
			<InnerBlocks />
			
        </div>
    );
}