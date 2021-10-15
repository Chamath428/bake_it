var xValues = ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
// var xValues = Utils.months({count: 12});
new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "orange",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "brown",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
        display: true,
        text: "Company Sales for the year"
    },
    scales: {
        xAxes: [{
           gridLines: {
              display: false
           }
        }],
        yAxes: [{
           gridLines: {
              display: true
           }
        }]
    },
    animations: {
        tension: {
          duration: 1000,
          easing: 'linear',
          from: 1,
          to: 0,
          loop: true
        }
    }
  }
});
var x2Values = ["Kasbewa", "Maharagama", "Piliyandala"];
var y2Values = [55, 90, 44];
var barColors = ["red","orange","brown"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: x2Values,
    datasets: [{
      backgroundColor: barColors,
      data: y2Values
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Company Sales for the month"
    },
    scales: {
        xAxes: [{
           gridLines: {
              display: false
           }
        }],
        yAxes: [{
           gridLines: {
              display: false
           }
        }]
   }
  }
});
var x3Values = ["Pastry", "Cakes", "Doughnuts","Muffins","Snacks","Beverages"];
var y3Values = [55, 150, 44, 80, 75, 90];
var barColors = ["red","orange","brown"];

new Chart("myChart3", {
  type: "bar",
  data: {
    labels: x3Values,
    datasets: [{
      backgroundColor: barColors,
      data: y3Values
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Company Sales for the month"
    },
    scales: {
        xAxes: [{
           gridLines: {
              display: false
           }
        }],
        yAxes: [{
           gridLines: {
              display: false
           }
        }]
   }
  }
});

var x4Values = ["Choclate Cakes", "Butter Cakes", "Ribbon Cakes","Birthday Cakes","Coffee Cakes","Marbel Cakes","Fruit Cakes"];
var y4Values = [55, 90, 44, 30, 16, 32, 70];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart4", {
  type: "doughnut",
  data: {
    labels: x4Values,
    datasets: [{
      backgroundColor: barColors,
      data: y4Values
    }]
  },
  options: {
    title: {
      display: true,
      text: "Best Category Sales for the week"
    }
  }
});