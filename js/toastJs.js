window.toast = (function () {
    // function Toast (els) {
         
    // }
   // var close_img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjIyQUYxMEEwOUNCMDExRTc4NUFGOTJBMjU3QkIzOTM4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjIyQUYxMEExOUNCMDExRTc4NUFGOTJBMjU3QkIzOTM4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjJBRjEwOUU5Q0IwMTFFNzg1QUY5MkEyNTdCQjM5MzgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjJBRjEwOUY5Q0IwMTFFNzg1QUY5MkEyNTdCQjM5MzgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7zM9tTAAAAT0lEQVR42mL4////aSB+AsS6DGgAJAaVO80AZYDAa2TFUEWvoXJP0AVeQ/kYYth0v4diDFuQFcMUwDTAFTExkAKIsppoz5ASPEQFOECAAQA4yAGmL70ofgAAAABJRU5ErkJggg==';
    var close_img2 = 'close.png';
     
    var toast = {
		//ALERT AXAMPLE
		
        show: function (text, time) {
        	var t = document.getElementById('toast');
        	if (t == null) {
        		var div = document.createElement('div');
        			div.setAttribute('id', 'toast');
        		document.body.appendChild(div);
        		t = document.getElementById('toast');
        	}

        	var g = document.querySelectorAll.bind(document);
			var l = g('#toast > div').length;
			var id = 'toast-notification-'.concat(l);


			var close = document.createElement('img');
				close.setAttribute('src', close_img);
	        	close.setAttribute('onclick', 'toast.close(this)');


        	var notification = document.createElement('div');
	        	notification.setAttribute('id', id);
	        	notification.setAttribute('class', 'toast');
	        	notification.innerHTML = text;
	        	notification.appendChild(close);
			t.appendChild(notification);
			
        	setTimeout(function() {
        		document.getElementById(id).style.transform = 'translateY(0px)';
        	}, 10)
        	
        	if (time === undefined)
        		time = 2500;
        	
        	setTimeout(function() {
        		document.getElementById(id).style.transform = 'translateY(70px)';
        		document.getElementById(id).style.opacity = '0';
        		setTimeout(function() {
        			var elem = document.querySelector('#'.concat(id));
						elem.parentNode.removeChild(elem);
	        	}, 280)
        	}, time)
		},
		//ALERT STYLE
		show_e: function (text, time) {
			
			//TOMA EL VALOR DEL ID = TOAST
			var t = document.getElementById('toast');
			//SI NO EXISTE EL ID LO CREAMOS
        	if (t == null) {
				//CREA UN DIV
				var div = document.createElement('div');
				//AGREGA UN ATRIBUTO ID CON NOMBRE TOAST
				div.setAttribute('id', 'toast');
				
				// Y LO AÑADE AL ELEMENTO DIV
				document.body.appendChild(div);
				//AQUI VOLVEMOS A TOMAR EL YA CREADO ID = TOAST
        		t = document.getElementById('toast');
        	}
				//DEVUELVE UNA LISTA DE TODOS LOS ELEMENTOS DEL DOCUMENTO Y SE VINCULA CON ELLA
			var g = document.querySelectorAll.bind(document);
				//SE BUSCA POR EL LARGO DEL DOCUMENTO AL ID=#TOAST DENTRO DE UN DIV
				//EMPIEZA VALIENDO CERO
			var l = g('#toast > div').length;
		
			// SE CONCATENA EL 0 CON LA NOTIFICACION DEL TOAST: "toast-notification-0"
			var id = 'toast-notification-'.concat(l);
			
				//CREAR ELEMENTO IMAGEN PARA EL CIERRE DEL ALERT
			var close = document.createElement('img');
				//DIRECCIONAMOS LA IMAGEN
				close.setAttribute('src', close_img2);
				//Y LE AGREGAMOS UNA FUNCIÓN AL DARLE CLICK
	        	close.setAttribute('onclick', 'toast.closee(this)');

				//CREA UN DIV
				var notification = document.createElement('div');
				//SE LE ASIGNA UN ATRIBUTO ID
				notification.setAttribute('id', id);
				//SE LE ASIGNA UN ATRIBUTO CLASS CON NOMBRE TOAST2 PARA QUE CAMBIE POR EL CSS
				notification.setAttribute('class', 'toast2');
				//DEVUELVE EL CONTENIDO EN BASE AL TEXTO(EL QUE SE COLOCA COMO PARAMETRO)
				notification.innerHTML = text;
				//ADIERE EL NODO CLOSE A NOTIFICATION
				notification.appendChild(close);
				//AQUI TOMAMOS AL DIV DE ID TOAST Y LE ADERIMOS NOTIFICATION[]
				t.appendChild(notification);
				
				//por 10 milisegundos se tomara el id, tomara un estilo y lo transforma,
				//en este caso el id= "toast-notification-0"
        	setTimeout(function() {
        		document.getElementById(id).style.transform = 'translateY(-10px)';
				
			}, 10)
        	
        	
        },

		//regresa la transformacion al inicio
        closee: function (el) {
			//escondido
			el.parentNode.style.transform = 'translateY(70px)';
			// e invisible
			el.parentNode.style.opacity = '0';
			// con un tiempo de 280 milisegundos para efectuarse
        	setTimeout(function() {
				//removemos el nodo hijo
				el.parentNode.parentNode.removeChild(el);
        	}, 280)
        }
	
	};

     
    return toast;
}());

 function papa(A,B){
	 this.A = A;
	 this.B = B;
	var result = A+B;
	toast.show_e(result);

	
 }