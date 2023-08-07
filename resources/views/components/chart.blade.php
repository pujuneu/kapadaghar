<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

    

<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  
  
  
  <div class="flex justify-end m-4">
  
    <!-- Chart wrapper -->
      <input type="month" onchange="changemonth(this.value)" value="{{date('Y-m')}}">
    </div>
    <div class="container mx-auto px-4 py-8">
      <canvas id="myLineChart" class="w-full h-100 mt-4"></canvas>
    </div>
  
  </div>
  
  
   <script>
  
  function changemonth(date){
  
    $.ajax({
          url: "{{ route('changemonth')}}", // Replace with your server API endpoint
          method: "POST",
          dataType: "json",
          data:{
            month:date,
            _token:"{{csrf_token()}}"
          },
          success: function(response) {
            // Update the content with the fetched data
          //  console.log(response.sales);
           myLineChart.data.datasets[0].data=response.sales; 
           myLineChart.data.datasets[1].data=response.ordercounts; 
  
            
           myLineChart.data.labels=response.orderdates; 
  
  
  
           myLineChart.update();
  
           console.log(response);
  
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // Handle error if the request fails
            console.error("AJAX request failed: " + textStatus, errorThrown);
          }
        });
  }
  
      // Sample data for the line chart
      const labels = @json($orderdates);
      const totalSalesData = @json($sales); // Replace with your total sales data for each day of the month
      const totalProfitData = @json($profits); // Replace with your total profit data for each day of the month
      const totalOrdersData = @json($ordercount); // Replace with your total orders data for each day of the month
  
      // Configuration options
      const options = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: {
            beginAtZero: true
          },
          y: {
            beginAtZero: true
          }
        }
      };
  
      // Get the canvas element and initialize the chart
      const ctx = document.getElementById('myLineChart').getContext('2d');
      const myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [
            {
              label: 'Total Sales',
              borderColor: 'rgba(75, 196, 182, 1)',
              backgroundColor: 'rgba(128, 255, 0, 0.54)',
              data: totalSalesData,
              fill: true,
            },
            {
              label: 'Total Orders',
              borderColor: 'rgba(54, 162, 235, 1)',
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              data: totalOrdersData,
              fill: true,
            },
          ]
        },
        options: options
      });
  
      console.log(myLineChart.data.labels);
    </script>
  
  
  
  
  
  
  </div>
</div>