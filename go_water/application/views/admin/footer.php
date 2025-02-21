
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class=" card" >
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 2018 
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed by <a href="#">Sasori</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->


    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js1/vendor/Jquery3.1.js"></script>
    
    <script src="<?php echo base_url() ?>assets/js1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/main.js"></script>

    <!--Chartist Chart-->
    <script src="<?php echo base_url() ?>assets/js1/lib/chartist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/chartist/chartist-plugin-legend.js"></script> 
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url() ?>assets/weather/js1/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/weather/js1/weather-init.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/moment/moment.js"></script>
    <script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/calendar/fullcalendar-init.js"></script>
     <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/excanvas.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/curvedLines.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/flot-chart-init.js"></script>    <!--  Chart js -->
    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/chartjs-init.js"></script>
    <script src="<?php echo base_url() ?>assets/data_table/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/data_table/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
      



    <script>
        jQuery(document).ready(function($) {
            "use strict"; 

            // Pie chart flotPie1 
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: { 
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });

            // Pie chart flotPie1  End




            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'} 
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: { 
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }
                
            });

            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End

            


            //Traffic chart chart-js 
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        } 
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End 



            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End

        });  // End of Document Ready 
    </script>

<script>
    jQuery(document).ready(function() {
   jQuery('#member').DataTable( {
         "language": {
            "lengthMenu": "Tampilkan _MENU_ ",
            "zeroRecords": "Data Tidak Ada",
            "info": "Halaman _PAGE_ Dari _PAGES_",
            "infoEmpty": "Data Tidak Ada",
            "search": "Cari",
            "paginate": {
                       "next":       "Lanjut",
                        "previous":   "Sebelumnya"
                        },
            
            
        },
        select: {
        style: 'single'
        },
        fixedHeader: {
            header: true,
            footer: true
        }
       
    } );
} );


</script>

<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

 <script>
            jQuery(document).ready(function(){
            jQuery('#set').modal('show');
            });
</script>   

<div id="container">
  
 
  
</div>



</body>
</html>
