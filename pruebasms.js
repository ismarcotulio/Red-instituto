
function sms(){
	alert('hola');
	var text = require('textbelt/index.js');
	text.debug(enable);

	text.sendText('14053264519', 'hola prueba', null, 'us',  function(err) {
		  if (err) {
		    console.log(err);
		  }
		}); 
};
