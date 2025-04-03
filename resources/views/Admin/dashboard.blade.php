@extends('Admin.layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-6">
      <h3 class="mb-0 font-weight-bold">{{ Auth::guard('admin')->user()->name }}</h3>
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
      fetch(`/admin/orders/chart-data?year=${year}&month=${month}`)
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
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
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