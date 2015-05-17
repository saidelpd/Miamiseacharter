
var headlineChart = {
    pointsFillColor: '#fff',
    pointsLineWidth: 4,
    linesLineWidth: 2,
    gridTickColor: 'rgba(255, 255, 255, 0.5)',
    axisFontColor: '#fff',
    xTickColor: '#fff'
}

function headlineSummaryChart(placeholder) {

    var currentWeek = [
        [gt(2013, 10, 21), 78], [gt(2013, 10, 22), 215], [gt(2013, 10, 23), 250], [gt(2013, 10, 24), 230], [gt(2013, 10, 25), 245],
        [gt(2013, 10, 26), 260], [gt(2013, 10, 27), 340]
    ];

    var lastWeek = [
        [gt(2013, 10, 21), 123], [gt(2013, 10, 22), 180], [gt(2013, 10, 23), 285], [gt(2013, 10, 24), 250], [gt(2013, 10, 25), 205],
        [gt(2013, 10, 26), 198], [gt(2013, 10, 27), 195]
    ];

    var plot = $.plot(placeholder,
        [
            {
                data: currentWeek,
                label: "Current Week",
                points: {
                    fillColor: headlineChart.pointsFillColor
                },
                lines: {
                    fill: true,
                    fillColor: { colors: [ {opacity: 0.1}, {opacity: 0.8} ] }
                }
            },
            {
                data: lastWeek,
                label: "Last Week",
                points: {
                    fillColor: headlineChart.pointsFillColor
                }
            }
        ],

        {
            series: {
                lines: {
                    show: true,
                    lineWidth: headlineChart.lineWidth
                },
                points: {
                    show: true,
                    lineWidth: headlineChart.pointsLineWidth,
                    fill: true
                },

                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderWidth: 0,
                tickColor: headlineChart.gridTickColor
            },
            colors: ["#238C47", "#A7F43D"],
            yaxis: {
                font: { color: headlineChart.axisFontColor },
                ticks: 5
            },
            xaxis: {
                mode: "time",
                timezone: "browser",
                minTickSize: [1, "day"],
                timeformat: "%a",
                font: { color: headlineChart.axisFontColor },
                tickColor: "transparent",
                autoscaleMargin: 0.02
            },
            legend: {
                labelBoxBorderColor: "transparent",
                backgroundColor: "transparent"
            },
            tooltip: true,
            tooltipOpts: {
                content: '%s: %y'
            }

        });

    return plot;
}

// init headline flot chart: sales area chart
function headlineSalesChart(placeholder) {

    var currentWeek = [
        [gt(2013, 10, 21), 50], [gt(2013, 10, 22), 75], [gt(2013, 10, 23), 205], [gt(2013, 10, 24), 170], [gt(2013, 10, 25), 205],
        [gt(2013, 10, 26), 198], [gt(2013, 10, 27), 195]
    ];

    var plot = $.plot(placeholder,
        [
            {
                data: currentWeek,
                label: "Current Week",
            },
        ],

        {
            series: {
                lines: {
                    show: true,
                    lineWidth: headlineChart.linesLineWidth,
                    fill: true,
                },
                points: {
                    show: true,
                    lineWidth: headlineChart.pointsLineWidth,
                    fill: true,
                    fillColor: headlineChart.pointsFillColor
                },

                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderWidth: 0,
                tickColor: headlineChart.gridTickColor
            },
            colors: ["#78AF2C"],
            yaxis: {
                font: { color: headlineChart.axisFontColor },
            },
            xaxis: {
                mode: "time",
                timezone: "browser",
                minTickSize: [1, "day"],
                timeformat: "%a",
                font: { color: headlineChart.axisFontColor },
                tickColor: "transparent",
                autoscaleMargin: 0.02
            },
            legend: {
                labelBoxBorderColor: "transparent",
                backgroundColor: "transparent"
            },
            tooltip: true,
            tooltipOpts: {
                content: '%s: %y'
            }

        });

    return plot;
}

// init headline flot chart: visit bar chart
function headlineBarChart(placeholder) {
    var basic = [
        [gt(2013, 10, 21), 188], [gt(2013, 10, 22), 205], [gt(2013, 10, 23), 250], [gt(2013, 10, 24), 230], [gt(2013, 10, 25), 245], [gt(2013, 10, 26), 260], [gt(2013, 10, 27), 290]
    ];

    var gold = [
        [gt(2013, 10, 21), 100], [gt(2013, 10, 22), 110], [gt(2013, 10, 23), 155], [gt(2013, 10, 24), 120], [gt(2013, 10, 25), 135], [gt(2013, 10, 26), 150], [gt(2013, 10, 27), 175]
    ];

    var platinum = [
        [gt(2013, 10, 21), 75], [gt(2013, 10, 22), 65], [gt(2013, 10, 23), 80], [gt(2013, 10, 24), 60], [gt(2013, 10, 25), 65], [gt(2013, 10, 26), 80], [gt(2013, 10, 27), 110]
    ];

    var plot = $.plot(placeholder,
        [
            {
                data: basic,
                label: "Basic"
            },
            {
                data: gold,
                label: "Gold"
            },
            {
                data: platinum,
                label: "Platinum"
            }
        ],
        {
            bars: {
                show: true,
                barWidth: 15*60*60*300,
                fill: true,
                order: true,
                lineWidth: 0,
                fillColor: { colors: [ { opacity: 0.8 }, { opacity: 0.1 } ] }
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderWidth: 0,
                tickColor: headlineChart.gridTickColor,
            },
            colors: ["#7bae16", "#d7ea2b", "#5399D6"],
            yaxis: {
                font: { color: headlineChart.axisFontColor },
            },
            xaxis: {
                mode: "time",
                timezone: "browser",
                minTickSize: [1, "day"],
                timeformat: "%a",
                font: { color: headlineChart.axisFontColor },
                tickColor: "transparent",
                autoscaleMargin: 0.2
            },
            legend: {
                labelBoxBorderColor: "transparent",
                backgroundColor: "transparent"
            },
            tooltip: true,
            tooltipOpts: {
                content: '%s: %y'
            }
        });

    return plot;
}

$(document).ready(function () {

    if( $('.headline').length > 0 ) {
        /* init chart */
        $('.headline a:first').tab('show');
        headlineSummaryChart('#headline-summary-chart');

        $('.headline a').click( function(e) {
            e.preventDefault();

            $tabId = $(this).attr('href');
            $chartId = $(this).attr('data-cid');

            /* adjust tab nav status */
            $('.headline li').removeClass('active');
            $(this).parent().addClass('active');

            /* show/hide tab pane */
            $('.headline .tab-pane').css('opacity', 0).removeClass('active');
            $('.headline .tab-pane'+$tabId).addClass('active').animate({
                opacity: 1
            }, 300);

            if( $chartId == '#headline-summary-chart' ) {
                headlineSummaryChart($chartId);
            }else if( $chartId == '#headline-sales-chart' ) {
                headlineSalesChart($chartId);
            }else if( $chartId == '#headline-bar-chart' ) {
                headlineBarChart($chartId);
            }
        });
    }
});