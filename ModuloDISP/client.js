window.onload = function () {
  var url, 
      i,
      jqxhr;

  for (i = 0; i < 3; i++) {
      url = document.URL + 'sensores/' + i;
      $.getJSON(url, function(data) {
      console.log('API response received');
      $('#input').append('<p>Sensor de ' + data.sensor + ' con valor de  ' + 
					            data.valor + ' y estado ' + data.estado + '</p>');
			          });
		    }
};
