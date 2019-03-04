var handleSubmit = function( evt ) {
  var username = document.getElementById("username").value;
  var [ userid, domain, ext ] = username.split(/[.@]/);
  var password = document.getElementById("password");
  var quantities = Array.from(document.getElementsByClassName("quantity"));
  var shipping = document.querySelector("input[name=shipping]:checked");
  // Validate input username
  if( !userid || !domain || !ext ) {
    evt.preventDefault();
    alert("Invalid username!\nMust be in the form: john@example.com");
    return false;
  }
  // Validate password length
  if( password.length < 1 ) {
    evt.preventDefault();
    alert("Password may not be left blank!");
    return false;
  }
  // Validate numerical input for quantities
  // 1. parse into integer value
  // 2. check if any value is less than 0
  if( quantities.map( (x) => parseInt( x.value ) )
                .some( (x) => x < 0 ) ) {
    evt.preventDefault();
    alert("Invalid item quantities!");
    return false;
  }
  if( shipping == null ) {
    evt.preventDefault();
    alert("Must select one shipping option!");
    return false;
  }

  return true;
}

var form = document.getElementById( "form1" );

if( form.addEventListener ) {
  form.addEventListener( "submit", handleSubmit, false );
} else {
  form.attachEvent( "onsubmit", handleSubmit );
}
