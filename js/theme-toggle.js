// Get current theme
var theme = localStorage.getItem( 'theme' );
// Set defaults if theme is not defined.
if ( ! theme ) {
  localStorage.setItem( 'theme', 'light' );
  theme = 'light';
}
// Add theme to the body.
document.body.classList.add( theme );

// Handle onClick events
document.getElementById( 'theme-toggle' ).addEventListener( 'click', () => {
  // Cleanup classes from body.
  document.body.classList.remove( 'light' );
  document.body.classList.remove( 'dark' );
  // Change the theme.
  theme = ( theme === 'light' ) ? 'dark' : 'light';
  // Save the theme.
  localStorage.setItem( 'theme', theme );
  // Apply the theme.
  document.body.classList.add( theme );
});