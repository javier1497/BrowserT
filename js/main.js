let app = document.getElementById('typewriter');
 
let typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});
 
typewriter
  .pauseFor(2500)
  .typeString('La Capital del Sol')
  .pauseFor(200)
  .deleteChars(10)
  .start();


document.querySelector('#consulta').addEventListener('click', function(){
  obtenerDatos();
});
          var lati = 0;
            var long = 0;
            var humeda = 0;
  function obtenerDatos() {
    var select = document.getElementById('ciudad').value;
   
    if(select != "Seleccione"){
      /* Seleccionamos primero la Lat y Long de la Ciudad*/
      let url = 'http://api.openweathermap.org/geo/1.0/direct?q=' + select + '&limit=1&appid=fd9e8b7afb8f8b90649defdace6faaf2';
      const api = new XMLHttpRequest();
      api.open('GET', url, true);
      api.send();

      api.onreadystatechange = function(){

        if(this.status == 200 && this. readyState == 4){
          /* Los datos fueron obetnidos*/
            

            
            let datos = JSON.parse(this.responseText);
              for(let item of datos){
                lati = item.lat;
                long = item.lon;
              }
            /* Consultamos la segunda API que nos trae la informacion del lugar */
            let url2 = 'https://api.openweathermap.org/data/2.5/weather?lat=' + lati + '&lon=' + long + '&appid=fd9e8b7afb8f8b90649defdace6faaf2';
            const api2 = new XMLHttpRequest();
            api2.open('GET', url2, true);
            api2.send();  
            api2.onreadystatechange = function(){
              
              if(this.status == 200 && this. readyState == 4){
                /*Cargamos el Mapa */ 
    
                let datos2 = JSON.parse(this.responseText);
                humeda = datos2.main.humidity;
                var options = {
                  zoom: 10,
                  center: {lat: lati, lng: long} // cordenadas
                };
            
                var map = new google.maps.Map(document.getElementById('map'), options);
                
                var marker = new google.maps.Marker({
                    position: {lat: lati, lng: long}, // cordenadas
                    map: map
                });
                
                var contentString = '<div id="content">'+
                                  '<h3>Humedad: ' + humeda + '%</h3>'+
                                  '</div>';
                
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
            
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                /* Fin del Mapa */
                var parametros = {
                  "longitud" : long,
                  "latitud" : lati,
                  "humeda" : humeda
                };
                
                  $.ajax({
                    type:  'post', //método de envio
                    url:   './ajax/guarda_historial.php', //archivo que recibe la peticion
                    data:  parametros, //datos que se envian a traves de ajax
                    beforeSend: function (parametros) {
                      $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                            $("#resultado").html(response);
                    }
                  });
                
               
              }
            }
            

        }else{
          

        }

    }

  }
  
}  