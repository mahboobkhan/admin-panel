<div class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60 flex items-center">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Reason for Refunds</h2>    
    </header>
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">449</div>
            <div class="text-sm font-medium text-red-700 px-1.5 bg-red-500/20 rounded-full">-22%</div>
        </div>
    </div>   
    <div class="grow">
        <div class="grow flex flex-col justify-center">
            <div>
                <canvas id="dashboard-card-11" width="100" height="48"></canvas>
            </div>
            <div id="dashboard-card-11-legend" class="px-5 pt-2 pb-2">
                <ul class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60"></ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('dashboard-card-11').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar', // Choose your chart type
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    datasets: [{
                        label: 'Product Sales',
                        data: [30, 25, 36, 45, 50], // Your data
                        borderColor: 'rgba(75, 192, 192, 1)',
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });
        });
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>