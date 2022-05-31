var options = {
    fill: {
  colors: ['#B0C4DE']
},
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'Penjualan',
    data: [10,20,28,15,18,22,29]
  }],
  xaxis: {
    categories: ["Senin","Selasa","Rabu","Kamis","jum'at","Sabtu","Minggu"]
  }
}

var chart = new ApexCharts(document.querySelector("#distributed-column"), options);

chart.render();

var options = {
    fill: {
  colors: ['#B0C4DE']
},
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'Penjualan',
    data: [156,165,143,152,151,139,150,156,172,230,157,143]
  }],
  xaxis: {
    categories: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"]
  }
}

var chart = new ApexCharts(document.querySelector("#datalabels-column"), options);

chart.render();
var options = {
  chart: {
    height: 350,
    type: "line",
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  colors: ["#00FF7F","#0000CD"],
  series: [
    {
      name: "Minggu Sekarang",
      data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
    },
    {
      name: "Minggu Lalu",
      data: [20, 29, 37, 36, 44, 45, 50, 58]
    }
  ],
  stroke: {
    width: [4, 4]
  },
  plotOptions: {
    bar: {
      columnWidth: "20%"
    }
  },
  xaxis: {
    categories: ["Senin","Selasa","Rabu","Kamis","jum'at","Sabtu","Minggu"]
  },
  yaxis: [
    {
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#FF1654"
      },
      labels: {
        style: {
          colors: "#FF1654"
        }
      },
      title: {
        text: "Minggu Sekarang",
        style: {
          color: "#FF1654"
        }
      }
    },
    {
      opposite: true,
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#247BA0"
      },
      labels: {
        style: {
          colors: "#247BA0"
        }
      },
      title: {
        text: "Minggu Lalu",
        style: {
          color: "#247BA0"
        }
      }
    }
  ],
  tooltip: {
    shared: false,
    intersect: true,
    x: {
      show: false
    }
  },
  legend: {
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);

chart.render();
