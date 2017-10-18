var bgcolor = [
  '#EF5350',
  '#EC407A',
  '#AB47BC',
  '#5C6BC0',
  '#29B6F6',
  '#76FF03',
  '#FFEE58',
  '#FFA726',
  '#8D6E63',
];

var bdcolor = [
  '#F44336',
  '#E91E63',
  '#9C27B0',
  '#3F51B5',
  '#03A9F4',
  '#64DD17',
  '#FFEB3B',
  '#FF9800',
  '#795548',
];

var option = {
  responsive: true,
  scaleStartValue: 0,
  maintainAspectRatio: true,
  animation: {
    animateScale: true
  },
  legend: {
    display: true
  },
  // tooltips: {
  //   callbacks: {
  //     label: function(tooltipItem, data) {
  //       var dataset = data.datasets[tooltipItem.datasetIndex];
  //       var currentLabel = data.labels[tooltipItem.index];
  //       var currentValue = dataset.data[tooltipItem.index];
  //       return currentLabel + " : " + Number(parseFloat(currentValue).toFixed(3)).toLocaleString('en', {
  //         minimumFractionDigits: 3
  //       }) + " บาท";
  //     }
  //   }
  // }
  // scales: {
  //   xAxes: [{
  //     ticks: {}
  //   }],
  //   yAxes: [{
  //     ticks: {
  //       beginAtZero: true,
  //       userCallback: function(value, index, values) {
  //         value = value.toString();
  //         return Number(parseFloat(value).toFixed(2)).toLocaleString('en',{minimumFractionDigits: 2});
  //       }
  //     }
  //   }]
  // }
};

pieChart("pieChart", dataChart, "Pie Chart");
barChart("barChart", dataChart, "Bar Chart");

function pieChart(target, arr, message) {
  var type = "pie";

  var canvas = $("#" + target);

  var data = {
    labels: arr.label,
    datasets: [{
      label: message,
      data: arr.count,
      backgroundColor: bgcolor,
      borderColor: bdcolor,
    }]
  };

  chart(type, canvas, data, target);
}

function barChart(target, arr, message) {
  var type = "bar";

  var canvas = $("#" + target);

  var data = {
    labels: arr.label,
    datasets: [{
      label: message,
      data: arr.count,
      backgroundColor: bgcolor,
      borderColor: bdcolor,
    }]
  };

  chart(type, canvas, data, target);
}

function chart(type, target, data, place) {
  var myChart = new Chart(target, {
    type: type,
    data: data,
    options: option,
  });

  return myChart;
}
