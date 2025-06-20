<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-blue-500 text-white rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-lg font-semibold">Jumlah Produk</h3>
                    <p class="text-3xl font-bold mt-2">7</p>
                </div>
                <div class="bg-cyan-500 text-white rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-lg font-semibold">Total Penjualan</h3>
                    <p class="text-3xl font-bold mt-2">7</p>
                </div>
                <div class="bg-green-500 text-white rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-lg font-semibold">Total Keuntungan</h3>
                    <p class="text-3xl font-bold mt-2">Rp 4.337.000,00</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-semibold mb-4">Perkiraan Penjualan Selama Seminggu Kedepan</h3>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('salesChart');

            new Chart(ctx, {
              type: 'line',
              data: {
                // Label dan data ini nantinya akan didapat dari API Anda
                labels: ['29/08/2024', '30/08/2024', '31/08/2024', '01/09/2024', '02/09/2024', '03/09/2024', '04/09/2024'],
                datasets: [{
                  label: 'Perkiraan Penjualan',
                  data: [210, 90, 210, 320, 310, 325, 175], // Data contoh dari PDF
                  borderColor: 'rgb(59, 130, 246)', // Warna biru
                  tension: 0.1
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
    </script>
    @endpush
</x-app-layout>
