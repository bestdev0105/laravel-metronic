$(document).ready(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        names = ['MSFT', 'AAPL', 'GOOG'],
        // create the chart when all data is loaded
        createChart = function () {

            $('#highstock_1').highcharts('StockChart', {
                chart: {
                    style: {
                        fontFamily: 'Open Sans'
                    }
                },

                rangeSelector: {
                    selected: 0,
                    inputEnabled: false,
                    buttons: [{
                        type: 'month',
                        count: 3,
                        text: 'Day',
                        dataGrouping: {
                            forced: true,
                            units: [
                                ['day', [1]]
                            ]
                        }
                    }, {
                        type: 'year',
                        count: 1,
                        text: 'Week',
                        dataGrouping: {
                            forced: true,
                            units: [
                                ['week', [1]]
                            ]
                        }
                    }, {
                        type: 'all',
                        text: 'Month',
                        dataGrouping: {
                            forced: true,
                            units: [
                                ['month', [1]]
                            ]
                        }
                    }],
                    buttonTheme: {
                        width: 60
                    }
                },

                yAxis: {
                    labels: {
                        formatter: function () {
                            return (this.value > 0 ? ' + ' : '') + this.value + '%';
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: 'silver'
                    }]
                },

                title: {
                    text: 'UAUC Trend',
                    align: 'left',
                    x: 0,
                    y: 10
                },

                legend: {
                    enabled: true,
                    align: 'right',
                    verticalAlign: 'top',
                    x: -100,
                    y: 0
                },

                plotOptions: {
                    series: {
                        compare: 'percent',
                    }
                },

                navigator: {
                    enabled: false
                },

                credits: {
                    enabled: false
                },

                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                    valueDecimals: 2
                },

                series: seriesOptions
            });
        };

    $.each(names, function (i, name) {

        $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=' + name.toLowerCase() + '-c.json&callback=?', function (data) {
            chart_type = 'spline';
            if(i == 2)
                chart_type = 'column';
            seriesOptions[i] = {
                type: chart_type,
                name: name,
                data: data
            };

            // As we're loading the data asynchronously, we don't know what order it will arrive. So
            // we keep a counter and create the chart when all the data is loaded.
            seriesCounter += 1;

            if (seriesCounter === names.length) {
                createChart();
            }
        });
    });

    $('#highchart_1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        xAxis: {
            categories: [
                '2011',
                '2012',
                '2013',
                '2014',
                '2015',
                '2016',
                '2017',
                '2018'
            ],
            crosshair: false,
            minorTickLength: 0,
            tickLength: 0,
            lineWidth: 0
        },
        yAxis: {
            min: 0,
            gridLineWidth: 0,
            title: {
                text: null
            },
            categories: [
                '0',
                '100',
                '200',
                '300',
                '400',
                '500'
            ]
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
            data: [2.5, 3.2, 1, 2.9, 3.2, 5, 5, 5]
        }]
    });

    $('#highchart_2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        xAxis: {
            categories: [
                '2011',
                '2012',
                '2013',
                '2014',
                '2015',
                '2016',
                '2017',
                '2018'
            ],
            crosshair: false,
            minorTickLength: 0,
            tickLength: 0,
            lineWidth: 0
        },
        yAxis: {
            min: 0,
            gridLineWidth: 0,
            title: {
                text: null
            },
            categories: [
                '0',
                '20',
                '40',
                '60',
                '80',
                '100'
            ],
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
                color: '#5b9e99'
            }
        },
        series: [{
            showInLegend: false,
            data: [2.5, 3.2, 1, 2.9, 3.2, 5, 5, 5]
        }]
    });
});