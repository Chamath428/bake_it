var xValues = ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
// var xValues = Utils.months({count: 12});
new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [1860,1340,1960,1760,1070,1210,1630,2210,6830,5478],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
        display: true,
        text: "Branch Sales for the year"
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
var x2Values = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
var y2Values = [55, 90, 44, 23, 43, 54, 65];
var barColors = ["red","orange","brown","blue","green","#00aba9","pink"];

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
      text: "Branch Sales for last week"
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
  "#1e7145",
  "#800000",
  "#daa520"
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


function getDetails(){
  let httprequest =new XMLHttpRequest();
  httprequest.onreadystatechange = function(){
      if (httprequest.readyState===4 && httprequest.status===200){
        console.log(httprequest.responseText)
        const obj = JSON.parse(httprequest.responseText);
          console.log(obj)
          //obj[0].order_id
          //data
          var categoryName = [];
          var totalQuantity =[];  
          for(i=0; i<obj[1].length; i++){
            categoryName.push(obj[1][i].category_name);
            totalQuantity.push(obj[1][i].total_quantity);
          }
          alert(categoryName)
    
          var x3Values = categoryName;
          var y3Values = totalQuantity;
          var barColors = ["red","orange","brown","	#800080","#800000","#daa520"];

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
                text: "Branch Sales for the month"
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
      }
  }
  
  var url="http://localhost/bakeit/branchManagerReportController/getdetails";
  httprequest.open("POST",url,true)
  httprequest.send()
  
}
getDetails()