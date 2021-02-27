@extends('layouts.dashboard')
@section('content-title')
    <h2>General Statistics</h2>
@endsection
@section('content')

<canvas class="my-4 chartjs-render-monitor" id="myChart" width="1104" height="466" style="display: block; width: 1104px; height: 466px;"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["January ", "February ", "March ", "April ", "May ", "June", "July", "August ", "September", "October", "November", "December"],
        datasets: [{
          data: [1, 2, 3, 4, 5, 6, 7,8,9,10,11,12],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>

@endsection