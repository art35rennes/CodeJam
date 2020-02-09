
//Charts init
$(function () {
    $('.min-chart').easyPieChart({
        barColor: "#4caf50",
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });
});
// Tooltips Initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

/*Global settings*/
const $graph1 = {
    type: 'line',
    data: {
        labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        datasets: [{
            label: "Production panneaux solaire (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            backgroundColor: 'rgba(0,150,24,0.2)',
            borderColor: 'rgb(0,150,24)',
            borderWidth: 1,
            data: [3, 6, 5, 5, 8, 9, 7]
        },
            {
                label: "Niveau de charge des batteries (%)",
                yAxisID: 'Charge',
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgb(205,119,17)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                backgroundColor: 'rgba(255,121,0,0.2)',
                borderColor: 'rgb(255,121,0)',
                borderWidth: 1,
                data: [70, 20, 0, 12, 60, 90, 100]
            },
            {
                label: "Consommation Hydro-Quebec (MW)",
                yAxisID: 'Energie',
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgb(205,119,17)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                backgroundColor: 'rgba(255,246,244,0.2)',
                borderColor: 'rgb(228,241,255)',
                borderWidth: 1,
                data: [0, 5, 12, 6, 3, 0, 0]
            }
        ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                id: 'Energie',
                type: 'linear',
                position: 'left',
                ticks: {
                    min: 0
                },
            }, {
                id: 'Charge',
                type: 'linear',
                position: 'right',
                ticks: {
                    max: 100,
                    min: 0
                },
            }]
        },
    }
};
const $graph2 = {
    type: 'line',
    data: {
        labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        datasets: [{
            label: "Production panneaux solaire (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            backgroundColor: 'rgba(0,150,24,0.2)',
            borderColor: 'rgb(0,150,24)',
            borderWidth: 1,
            data: [3, 6, 5, 5, 8, 9, 7]
            },
            {
            label: "Production Géothermique (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            backgroundColor: 'rgba(150,15,120,0.2)',
            borderColor: 'rgb(150,15,120)',
            borderWidth: 1,
            data: [6, 5, 4, 6, 8, 9, 5]
            },
            {
            label: "Niveau de charge des batteries (%)",
            yAxisID: 'Charge',
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(205,119,17)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            backgroundColor: 'rgba(255,121,0,0.2)',
            borderColor: 'rgb(255,121,0)',
            borderWidth: 1,
            data: [0, 0, 0, 12, 60, 100, 90]
            },
            {
            label: "Consommation Hydro-Quebec (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(205,119,17)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            backgroundColor: 'rgba(255,246,244,0.2)',
            borderColor: 'rgb(228,241,255)',
            borderWidth: 1,
            data: [6, 5, 5, 1, 0, 0, 0]
            }
        ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                id: 'Energie',
                type: 'linear',
                position: 'left',
                ticks: {
                    min: 0
                },
            }, {
                id: 'Charge',
                type: 'linear',
                position: 'right',
                ticks: {
                    max: 100,
                    min: 0
                },
            }]
        },
    }
};
const $graph3 = {
    type: 'line',
    data: {
        labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        datasets: [{
            label: "Production panneaux solaire (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            backgroundColor: 'rgba(0,150,24,0.2)',
            borderColor: 'rgb(0,150,24)',
            borderWidth: 1,
            data: [3, 6, 5, 5, 8, 9, 7]
        },
            {
                label: "Niveau de charge des batteries (%)",
                yAxisID: 'Charge',
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgb(205,119,17)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                backgroundColor: 'rgba(255,121,0,0.2)',
                borderColor: 'rgb(255,121,0)',
                borderWidth: 1,
                data: [70, 20, 0, 12, 60, 90, 100]
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                id: 'Energie',
                type: 'linear',
                position: 'left',
                ticks: {
                    min: 0
                },
            }, {
                id: 'Charge',
                type: 'linear',
                position: 'right',
                ticks: {
                    max: 100,
                    min: 0
                },
            }]
        },
    }
};
const $graph4 = {
    type: 'line',
    data: {
        labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        datasets: [{
            label: "Production Géothermique (MW)",
            yAxisID: 'Energie',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            backgroundColor: 'rgba(150,15,120,0.2)',
            borderColor: 'rgb(150,15,120)',
            borderWidth: 1,
            data: [6, 5, 4, 6, 8, 9, 5]
            },
            {
            label: "Niveau de charge des batteries (%)",
            yAxisID: 'Charge',
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(205,119,17)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            backgroundColor: 'rgba(255,121,0,0.2)',
            borderColor: 'rgb(255,121,0)',
            borderWidth: 1,
            data: [0, 0, 0, 12, 60, 100, 90]
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                id: 'Energie',
                type: 'linear',
                position: 'left',
                ticks: {
                    min: 0
                },
            }, {
                id: 'Charge',
                type: 'linear',
                position: 'right',
                ticks: {
                    max: 100,
                    min: 0
                },
            }]
        },
    }
};
Chart.defaults.global.defaultFontColor = '#fff';
$(document).ready(function () {
    //batiments
    var ctxL1 = document.getElementById("batiment1").getContext('2d');
    var ctxL2 = document.getElementById("batiment2").getContext('2d');
    var myLineChart1 = new Chart(ctxL1, $graph1);
    var myLineChart2 = new Chart(ctxL2, $graph2);

    //installation
    var ctxL3 = document.getElementById("install1").getContext('2d');
    var ctxL4 = document.getElementById("install2").getContext('2d');
    var ctxL5 = document.getElementById("install3").getContext('2d');
    var ctxL6 = document.getElementById("install4").getContext('2d');
    var myLineChart3 = new Chart(ctxL3, $graph3);
    var myLineChart4 = new Chart(ctxL4, $graph3);
    var myLineChart5 = new Chart(ctxL5, $graph4);
    var myLineChart6 = new Chart(ctxL6, $graph3);
});

