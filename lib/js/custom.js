/**
 * CK-Editor version 5
 */
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
    console.error( error );
} );