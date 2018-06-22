var TableDatatablesColreorder = function () {

    var initTable1 = function () {
        var table = $('#sample_1');

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "_MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // set the initial value
            "pageLength": 10,
            "dom": "t<'row'p>"

            //"dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });

        //oTable.buttons().disable();
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable1();
        }

    };

}();

$(document).ready(function () {

    TableDatatablesColreorder.init();

    // add button style 
    $("[name='poll_bar'").addClass("btn btn-default");
    // Add button style with alignment to left with margin.
    $("[name='poll_bar'").css({
        "text-align": "left",
        "margin": "5px"
    });

    //loop 
    $("[name='poll_bar'").each(function (i) {
        //get poll value 	
        var bar_width = (parseFloat($("[name='poll_val'").eq(i).text()) / 2).toString();
        bar_width = bar_width + "%"; //add percentage sign.										
        //set bar button width as per poll value mention in span.
        $("[name='poll_bar'").eq(i).width(bar_width);

        //Define rules.
        $("[name='poll_bar'").eq(i).addClass("purple")

    });

    $('#location-bar').highcharts({
        chart: {
            type: 'column',
            height: 200
        },
        title: {
            text: null
        },
        xAxis: {
            categories: [
                'Cellar Deck',
                'Wellhead',
                'Main Deck',
                'FSO Deck',
                'Others'
            ],
            crosshair: false,
            minorTickLength: 0,
            tickLength: 0
        },
        yAxis: {
            min: 0,
            title: {
                text: null
            },
            visible: false
        },
        tooltip: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                color: '#dd660b'
            }
        },
        series: [{
            showInLegend: false,
            data: [12, 10, 8, 6, 8]
        }]
    });

    $('#activity-bar').highcharts({
        chart: {
            type: 'column',
            height: 200
        },
        title: {
            text: null
        },
        xAxis: {
            categories: [
                'Offloading',
                'Lifting',
                'Maintenance',
                'Installation',
                'Others'
            ],
            labels: {
                style: {
                    fontSize: '10px'
                }
            },
            crosshair: false,
            minorTickLength: 0,
            tickLength: 0
        },
        yAxis: {
            min: 0,
            title: {
                text: null
            },
            visible: false
        },
        tooltip: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                color: '#1da7d1'
            }
        },
        series: [{
            showInLegend: false,
            data: [12, 10, 8, 6, 8]
        }]
    });

    var categories = [
            "Rigger",
            "Contractor",
            "Null"
        ],
        data = [{
                "y": 5,
                "drilldown": {
                    "name": "Rigger"
                }
            },
            {
                "y": 35,
                "drilldown": {
                    "name": "Contractor"
                }
            },
            {
                "y": 45,
                "drilldown": {
                    "name": "Null"
                }
            }
        ],
        browserData = [],
        versionsData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness;

    var pieColors = (function () {
        var colors = [],
            base = '#8215d6',
            i;

        for (i = 0; i < 7; i += 1) {
            // Start out with a darkened base color (negative brighten), and end
            // up with a much brighter color
            colors.push(Highcharts.Color(base).brighten((i - 1) / 5).get());
        }
        return colors;
    }());

    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {

        // add browser data
        browserData.push({
            name: categories[i],
            y: data[i].y,
            color: pieColors[i]
        });

        // add version data
    }

    // Create the chart
    $('#report-pie').highcharts({
        chart: {
            type: 'pie',
            height: 200
        },
        title: {
            enabled: false,
            text: null
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%'],
                innerSize: '65%',
                colors: pieColors
            }
        },
        tooltip: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Browsers',
            data: browserData,
            size: '60%',
            dataLabels: {
                formatter: function () {
                    return "<span style='font-size: 16px'>" + this.point.y + "%</span><br/>" + this.point.name;
                },
                color: function () {
                    return this.point.color
                },
                fontSize: '14',
                connectorWidth: 0
            }
        }]
    });
});