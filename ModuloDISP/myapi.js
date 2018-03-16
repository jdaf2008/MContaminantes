var http = require('http');
var express = require('express');
var datetime = new Date();

var app = express();
var inputs = [{  Sensor: 'Temperatura', valor: '20 C' , estado: 1 },
	      {  Sensor: 'Calidad de aire', valor:'20 ppm', estado:0},
	      {  Sensor: 'Monoxido de carbono', valor:'50 ppm', estado:1}
	      ];

var periodos = [{  Sensor: 'Temperatura', valor: ['10 C', '20', '30', '40'] , estado: 1 },
	      {  Sensor: 'Calidad de aire', valor:[], estado:0},
	      {  Sensor: 'Monoxido de carbono', valor:['50 ppm','100 ppm', '800 ppm', '1000 ppm'], estado:1}
	      ];

app.use(express['static'](__dirname ));


// Express route for incoming requests for a customer name
 app.get('/sensores/:id', function(req, res) {
   res.status(200).send({estado: 'OK', mensaje: 'Transaccion completa', sensores: inputs[req.params.id], fechaServidor: new Date()});

   }); 

app.get('/periodos/:id', function(req, res) {
   
   res.status(200).send({estado: 'OK', mensaje: 'Transaccion completa', periodos: periodos[req.params.id], fechaServidor: new Date()});
	
}); 

app.get('/fecha/', function(req, res) {
   res.status(200).send(new Date());
   }); 



   // Express route for any other unrecognised incoming requests
   app.get('*', function(req, res) {
     res.status(404).send('llamada a API no reconocida');
     });

     // Express route to handle errors
     app.use(function(err, req, res, next) {
       if (req.xhr) {
           res.status(500).send('Oops, Algo funciona incorrectamente!');
             } else {
                 next(err);
                   }
                   });

app.listen(3000);
console.log('App Server running at port 3000');



