$(document).ready(function () {
    $('#highchart_1').highcharts({
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        xAxis: {
            title: {
                enabled: true,
                text: 'Incident(Frequency)'
            },
            min: 0,
            Max: 1,
            startOnTick: true,
            minorTickLength: 0,
            labels: {
                enabled: false
            },
            lineWidth: 0,
            lineColor: 'transparent',
            tickLength: 0,
            gridLineWidth: 0,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'UAUC Reported(Frequency)'
            },
            min: 0,
            max: 1,
            minorTickLength: 0,
            tickLength: 0,
            endOnTick: true,
            showLastLabel: true,
            labels: {
                enabled: false
            },
            lineWidth: 0,
            lineColor: 'transparent',
            minorGridLineWidth: 0,
            gridLineWidth: 0
        },
        credits: {
            enabled: false
        },
        title: {
            text: null
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: 'X: {point.x}, Y: {point.y}'
                }
            }
        },
        legend: {
            align: 'right',
            verticalAlign: 'top',
            x: 0,
            y: 0
        },
        series: [{
            name: 'Location',
            color: 'rgba(223, 83, 83, .5)',
            data: [
                [0.42, 0.6],
                [0.5, 0.34],
                [0.5, 0.2]
            ]
        }, {
            name: 'Activity',
            color: 'rgba(119, 152, 191, .7)',
            data: [
                [0.83, 0.85],
                [0.89, 0.37],
                [0.84, 0.32]
            ]
        }, {
            name: 'Entity',
            color: 'rgba(19, 242, 11, .7)',
            data: [
                [0.5, 0.2],
                [0.3, 0.7],
                [0.23, 0.27]
            ]
        }, {
            name: 'People',
            color: 'rgba(9, 12, 91, .7)',
            data: [
                [0.64, 0.38],
                [0.34, 0.87],
                [0.26, 0.72]
            ]
        }]
    });
});