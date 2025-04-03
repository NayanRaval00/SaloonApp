@extends('Barber.layouts.barber')

@section('title', 'Barber Dashboard')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-6">
      <h3 class="mb-0 font-weight-bold">{{ Auth::guard('barber')->user()->name }}</h3>

    </div>
    <div class="col-sm-6">
      <div class="d-flex align-items-center justify-content-md-end">
        <div class="mb-3 mb-xl-0 pr-1">
          <div class="dropdown">
            <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button"
              id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
              <h6 class="dropdown-header">Last 14 days</h6>
              <a class="dropdown-item" href="#">Last 21 days</a>
              <a class="dropdown-item" href="#">Last 28 days</a>
            </div>
          </div>
        </div>
        <div class="pr-1 mb-3 mr-2 mb-xl-0">
          <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i
              class="typcn typcn-arrow-forward-outline mr-2"></i>Export</button>
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
          <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i
              class="typcn typcn-info-large-outline mr-2"></i>info</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-xl-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Orders Analytics</h4>

          <div class="d-flex mb-3">
            <select id="yearFilter" class="form-control mr-2">
              @foreach(range(date('Y') - 5, date('Y')) as $year)
              <option value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>{{ $year }}</option>
              @endforeach
            </select>

            <select id="monthFilter" class="form-control">
              <option value="all">All Months</option>
              @foreach(range(1, 12) as $month)
              <option value="{{ $month }}" {{ $month == date('m') ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
              @endforeach
            </select>
          </div>

          <canvas id="ordersChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('ordersChart').getContext('2d');
    let ordersChart;

    function fetchChartData(year, month) {
      fetch(`/barber/orders/chart-data?year=${year}&month=${month}`)
        .then(response => response.json())
        .then(data => {
          if (ordersChart) ordersChart.destroy();
          ordersChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: data.labels,
              datasets: [{
                label: 'Orders',
                data: data.orders,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        });
    }

    document.getElementById('yearFilter').addEventListener('change', function() {
      fetchChartData(this.value, document.getElementById('monthFilter').value);
    });

    document.getElementById('monthFilter').addEventListener('change', function() {
      fetchChartData(document.getElementById('yearFilter').value, this.value);
    });

    fetchChartData(new Date().getFullYear(), new Date().getMonth() + 1);
  });
</script>

@endsection