<!-- ChartComponent.vue -->
<template>
  <div>
    <canvas ref="myChart"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js';

export default {
  data() {
    return {
      chart: null,
      chartData: null,
    };
  },
  mounted() {
    this.fetchChartData();
  },
  methods: {
    fetchChartData() {
      // Replace with your CI4 API endpoint
      const apiUrl = 'http://localhost:8080/chart-view';

      // Fetch chart data from the CI4 API
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          this.chartData = data;
          this.renderChart();
        })
        .catch(error => console.error('Error fetching chart data:', error));
    },
    renderChart() {
      // Get the canvas element
      const ctx = this.$refs.myChart.getContext('2d');

      // Create a new Chart instance
      this.chart = new Chart(ctx, {
        type: 'bar',
        data: this.chartData,
        options: {
          responsive: true,
          maintainAspectRatio: false,
        },
      });
    },
  },
};
</script>

<style scoped>

</style>
