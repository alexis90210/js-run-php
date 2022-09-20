let execPhp = require('exec-php');

execPhp('pdf.php', (err, php, out) => {
    
  if( out ) {
    console.log(out);
  }

  if( err) {
    console.log(err);
  }
})