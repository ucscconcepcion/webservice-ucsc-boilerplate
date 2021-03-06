# Webservice UCSC Boilerplate
Funciones básicas para la creación de un webservice

## <a name='TOC'>Tabla de Contenido</a>


* [Webservice UCSC](#about)
* [Consultar Webservice](#consultar)
* [Formato Respuesta](#formato)

## <a name='about'>Webservice UCSC</a>
Los webservice de la [UCSC](http://ucsc.cl) son controlados por la Dirección de Servicios Informáticos de la universidad (DSI). Estos son solicitados por Directores o Decanos enviando el formulario *Formulario Solicitud Desarrollo Webservice* disponible en la intranet institucional al email *webservices@ucsc.cl*.

El lenguaje de desarrollo de los webservices es en PHP, teniendo como base el framework Codeigniter.

Para un lenguaje práctico de este mini tutorial, se utilirá la siguiente nomenclatura:

* **webservice**: es el nombre del webservice dado por el desarrollador o por la DSI.
* **modulo**: representa los módulos (controllers) que compone el webservice.
* **metodo**: representa los métodos que compone un módulo.


## <a name='consultar'>Consultar Webservice</a>
Dirección de Servicios Informáticos, para los webservices tiene un ambiente de desarrollo y un ambiente de producción, se consulta distinto para cada ambiente y los niveles de seguridad también son distintos.

####Desarrollo
```
http://ws.dev.ucsc.cl/<webservice>/<modulo>/<metodo>/
```

####Producción
```
https://ws.ucsc.cl/<webservice>/<modulo>/<metodo>/
```


## <a name='formato'>Formato Respuesta</a>
Por defecto el webservice tiene comom formato de salida el *XML*, pero también puede utilizar *json*.
####Ejemplo
```
https://ws.ucsc.cl/<webservice>/<modulo>/<metodo>/format/json
```
