# Demo de AdminLTE para OA
Este pequeño demo de [AdminLTE](https://almsaeedstudio.com/preview), ha sido creado usando laravel para así facilitar la integración de de todas las librerías necesarias.
Todas estas dependencias están declaradas en el archivo **bower.json**, donde también se especifica la versión usada.

## Instalación
```bash
composer install
bower install
php artisan migrate --seed
```

## Personalizaciones
### Hojas de estilo
Se hicieron utilizando [SASS](http://sass-lang.com) y los archivos fuentes están en la ruta `resources/assets/sass`

### Javascript
Solo a modo de ejercicio, la funcionalidad de cambio de tema, se usó la librería [Vue.js](http://vuejs.org), pero solo haciendo un uso muy básico. De todos modos estos códigos estan en le archivo `/resources/assets/js/app.js`

## Animaciones CSS
Las animaciones no se escribieron de manera particular, sino que se usaron las creadas por la libreria [Animate.css](https://daneden.github.io/animate.css)

## Gráfico
El gráfico fue realizado con la librería [Chart.js](http://www.chartjs.org).
```javascript
var ctx1 = document.getElementById('grafico1').getContext('2d');
var chart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Proceso 1', 'Proceso 2', 'Proceso 3'],
        datasets: [
            {
                label: "En Proceso",
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                data: [10, 10, 100]
            },
            {
                label: "Finalizadas",
                backgroundColor: "rgba(54, 162, 235,0.4)",
                borderColor: "rgba(54, 162, 235, 1)",
                data: [120, 100, 40]
            },
            {
                label: "No Comenzadas",
                backgroundColor: "rgba(255, 99, 132, 0.4)",
                borderColor: "rgba(255, 99, 132, 1)",
                data: [80, 50, 10]
            }
        ]
    }
});
```

## Sliders
Para la utilización de los sliders instaló la librería [Bootstrap-Sliders](https://github.com/seiyria/bootstrap-slider)


El HTML necesario para crear este ejemplo fue el siguiente:
```html
<input type="text"
       value=""
       class="slider form-control"
       data-provide="slider"
       data-slider-min="0"
       data-slider-max="100"
       data-slider-step="1"
       data-slider-value="0"
       data-slider-tooltip="show"
       data-slider-id="red">
```