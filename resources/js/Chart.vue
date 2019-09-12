<template>
    <div id="app">
        <div id="content">
            <canvas ref="chartJson"></canvas>
            <canvas ref="chartDatabase"></canvas>
        </div>
    </div>
</template>

<script>
    import Chart from 'chart.js';
    import DataTest from './test.json';

    export default {
        mounted() {
            this.initChartWithJson();
            this.initChartWithDatabase();
        },

        methods: {
            initChartWithJson() {
                var chart = this.$refs.chartJson;
                var ctx = chart.getContext("2d");
                this.createChart(ctx, DataTest);
            },

            async initChartWithDatabase() {
                const { data } = await axios.get('/chart');

                var chart = this.$refs.chartDatabase;
                var ctx = chart.getContext("2d");
                this.createChart(ctx, data);
                
            },

            createChart(ctx, data) {
                var myChart = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'My First dataset',
                            data: data.data,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    },
                });
            }
        }
    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
    #content {
        margin: auto;
        width: 400px;
        background-color: #FFFFFF;
        padding: 20px;
    }
</style>
