 $(document).ready(function () {
     "use strict";
     // toat popup js
     $.toast({
         heading: 'Bienvenido al Panel de Administración',
         text: 'Visualice y controle el estado de uso del software de pruebas',
         position: 'top-right',
         loaderBg: '#fff',
         icon: 'warning',
         hideAfter: 3500,
         stack: 6
     })


     //ct-visits
     new Chartist.Line('#ct-visits', {
         labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015'],
         series: [
    [5, 2, 1, 4, 5, 3, 5, 4]
    , [2, 5, 2, 6, 2, 5, 2, 4]
             , [1, 2, 3, 1, 7, 5, 0, 7]
  ]
     }, {
         top: 0,
         low: 1,
         showPoint: true,
         fullWidth: true,
         plugins: [
    Chartist.plugins.tooltip()
  ],
         axisY: {
             labelInterpolationFnc: function (value) {
                 return (value / 1) + '';
             }
         },
         showArea: true
     });
     // counter
     $(".counter").counterUp({
         delay: 100,
         time: 1200
     });

     var sparklineLogin = function () {
         $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#7ace4c'
         });
         $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#7460ee'
         });
         $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#11a0f8'
         });
         $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#f33155'
         });
     }
     var sparkResize;
     $(window).on("resize", function (e) {
         clearTimeout(sparkResize);
         sparkResize = setTimeout(sparklineLogin, 500);
     });
     sparklineLogin();
 });
