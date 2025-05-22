<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMAPAN - Sistem Informasi Manajemen Pertanian Kabupaten Lampung Barat</title>
    <style>
        :root {
            --light-green: #e6ebd6;
            --medium-green: #8ba663;
            --dark-green: #2c5324;
            --text-color: #333;
            --subcategory-bg: #5a7d54;
            --content-bg: #7a9a74;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--light-green);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: var(--light-green);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px;
            margin-right: 10px;
        }

        .logo-text {
            color: var(--dark-green);
            font-size: 0.9rem;
            line-height: 1.2;
        }

        .logo-text h1 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--dark-green);
        }

        .logo-text p {
            margin: 0;
            font-size: 0.8rem;
        }

        .right-header {
            display: flex;
            align-items: center;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-right: 15px;
        }

        .social-icon {
            color: var(--dark-green);
            font-size: 18px;
        }

        .search-container {
            position: relative;
            margin-right: 15px;
        }

        .search-input {
            padding: 5px 10px;
            border-radius: 15px;
            border: 1px solid #ccc;
            font-size: 0.8rem;
        }

        .user-profile {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
        }

        /* Navigation Styles */
        .main-nav {
            background-color: var(--dark-green);
            padding: 0;
        }

        .nav-list {
            text-align: center;
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            background-color: #b8a228;
        }

        /* Main Content Styles */
        .main-content {
            padding: 20px;
        }

        .category {
            margin-bottom: 5px;
        }

        .category-header {
            background-color: var(--dark-green);
            color: white;
            padding: 10px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-radius: 3px;
        }

        .category-header i {
            margin-right: 10px;
        }

        .subcategory {
            background-color: var(--subcategory-bg);
            color: white;
            padding: 10px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-top: 1px;
            margin-left: 25px;
            border-radius: 3px;
        }

        .subcategory i {
            margin-right: 10px;
        }

        .content-area {
            margin-left: 30px;
            display: flex;
            background-color: var(--content-bg);
            padding: 15px;
            margin-top: 1px;
            border-radius: 3px;
            overflow-x: auto;
        }

        .chart-container {
            padding-left: 60px;
            flex: 0 0 300px;
            margin-right: 20px;
        }

        .chart-image {
            width: 400px;
            border-radius: 5px;
            background-color: white;
            padding: 10px;
        }

        .chart-title {
            text-align: center;
            color: white;
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: bold
        }

        .text-content {
            flex: 1;
            color: white;
            font-size: 14px;
            line-height: 1.5;
            text-align: justify;
            padding-top: 20px;
            padding-right: 60px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-poppins flex flex-col min-h-screen">
    <x-navbar />
    <div class="main-content h-fit flex-grow" >
        <div class="category">
            <div class="category-header">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">PERTANIAN</span>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">PADI/BERAS</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">
                        Statistik Harga Padi/Beras
                    </div>
                    <div class="chart-image">
                        <canvas id="priceChart" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                        Statistik harga padi/beras yang diperbarui pada 30 Maret 2025
                        menunjukkan fluktuasi harga yang cukup signifikan sepanjang minggu. Harga minggu ini (garis
                        hijau tua) dan minggu lalu (garis hijau muda putus-putus) memiliki pola yang berbeda, di mana
                        harga minggu ini mencapai puncaknya pada Kamis di angka 15+ ribu, sementara minggu lalu
                        cenderung lebih tinggi pada Jumat dan Minggu. Tren minggu ini menunjukkan kenaikan harga di
                        pertengahan minggu dan penurunan menjelang akhir pekan, berbeda dengan minggu lalu yang justru
                        mengalami lonjakan harga tajam pada Minggu.
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">CABAI RAWIT</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">
                        Statistik Harga Cabai Rawit
                    </div>
                    <div class="chart-image">
                        <canvas id="priceChartCabaiRawit" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Statistik harga cabai rawit menunjukkan tren kenaikan di awal minggu dengan puncak pada hari Rabu
                        mencapai 50 ribu rupiah per kilogram. Dibandingkan minggu lalu, harga cabai rawit minggu ini
                        cenderung lebih tinggi di awal minggu namun lebih rendah di akhir minggu. Fluktuasi harga ini
                        dipengaruhi oleh pasokan yang tidak stabil akibat cuaca yang tidak menentu.</p>
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">WORTEL</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Wortel</div>
                    <div class="chart-image">
                        <canvas id="priceChartWortel" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Harga wortel menunjukkan tren kenaikan yang stabil dari awal hingga pertengahan minggu, dengan
                        puncak harga pada hari Jumat mencapai 20 ribu rupiah per kilogram. Dibandingkan minggu lalu,
                        harga wortel minggu ini secara konsisten lebih tinggi, menunjukkan adanya peningkatan permintaan
                        atau penurunan pasokan di pasaran.</p>
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">TOMAT</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Tomat</div>
                    <div class="chart-image">
                        <canvas id="priceChartTomat" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Statistik harga tomat minggu ini menunjukkan tren kenaikan yang signifikan dari awal hingga
                        pertengahan minggu, berbeda dengan minggu lalu yang cenderung lebih stabil. Puncak harga tomat
                        minggu ini terjadi pada hari Jumat mencapai 14 ribu rupiah per kilogram, sementara minggu lalu
                        harga tertinggi hanya mencapai 13 ribu rupiah.</p>
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">BUNCIS</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Buncis</div>
                    <div class="chart-image">
                        <canvas id="priceChartBuncis" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Harga buncis minggu ini menunjukkan pola yang mirip dengan minggu lalu, namun dengan level harga
                        yang sedikit lebih tinggi. Puncak harga terjadi pada hari Kamis mencapai 11.5 ribu rupiah per
                        kilogram. Secara keseluruhan, harga buncis relatif stabil dengan fluktuasi yang tidak terlalu
                        signifikan.</p>
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">KUBIS</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Kubis</div>
                    <div class="chart-image">
                        <canvas id="priceChartKubis" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Statistik harga kubis menunjukkan tren kenaikan dari awal hingga pertengahan minggu, dengan
                        puncak harga pada hari Kamis mencapai 9.5 ribu rupiah per kilogram. Dibandingkan minggu lalu,
                        harga kubis minggu ini secara konsisten lebih tinggi sekitar 0.5 ribu rupiah, menunjukkan adanya
                        sedikit peningkatan permintaan di pasaran.</p>
                </div>
            </div>
        </div>

        <!-- PERKEBUNAN Category -->
        <div class="category">
            <div class="category-header">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">PERKEBUNAN</span>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">KOPI</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Kopi</div>
                    <div class="chart-image">
                        <canvas id="priceChartKopi" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Harga kopi menunjukkan tren kenaikan yang stabil dari awal hingga pertengahan minggu, dengan
                        puncak harga pada hari Jumat mencapai 89 ribu rupiah per kilogram. Dibandingkan minggu lalu,
                        harga kopi minggu ini secara konsisten lebih tinggi sekitar 2 ribu rupiah, menunjukkan adanya
                        peningkatan permintaan atau penurunan pasokan di pasaran.</p>
                </div>
            </div>

            <div class="subcategory">
                <i class="fas fa-chevron-down"></i>
                <span class="font-bold">LADA</span>
            </div>

            <div class="content-area">
                <div class="chart-container">
                    <div class="chart-title">Statistik Harga Lada</div>
                    <div class="chart-image">
                        <canvas id="priceChartLada" width="100%" height="200"></canvas>
                    </div>
                </div>

                <div class="text-content">
                    <p>Statistik harga lada menunjukkan tren yang berbeda dibandingkan minggu lalu. Harga minggu ini cenderung lebih rendah dengan kisaran 89-98 ribu rupiah per kilogram, sementara minggu lalu mencapai level yang lebih tinggi yaitu 93-102 ribu rupiah. Puncak harga minggu ini terjadi pada hari Jumat di angka 98 ribu rupiah, sedangkan minggu lalu harga tertinggi mencapai 102 ribu rupiah pada hari Kamis dan Jumat. Penurunan harga ini menunjukkan adanya peningkatan pasokan atau penurunan permintaan di pasaran.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle subcategories
            const categoryHeaders = document.querySelectorAll('.category-header, .subcategory');

            categoryHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const isSubcategory = this.classList.contains('subcategory');
                    const nextElement = isSubcategory ? this.nextElementSibling : this.parentElement
                        .querySelector('.subcategory');

                    if (nextElement) {
                        if (isSubcategory && nextElement.classList.contains('content-area')) {
                            nextElement.style.display = nextElement.style.display === 'none' ?
                                'flex' : 'none';
                        } else if (!isSubcategory) {
                            const subcategories = this.parentElement.querySelectorAll(
                                '.subcategory');
                            subcategories.forEach(sub => {
                                sub.style.display = sub.style.display === 'none' ? 'flex' :
                                    'none';

                                // Also hide content areas
                                if (sub.nextElementSibling && sub.nextElementSibling
                                    .classList.contains('content-area')) {
                                    sub.nextElementSibling.style.display = 'none';
                                }
                            });
                        }
                    }

                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-right');
                });
            });

            // Function to create price charts
            function createPriceChart(canvasId, thisWeekData, lastWeekData, minY, maxY, stepSize) {
                const ctx = document.getElementById(canvasId).getContext('2d');
                return new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                        datasets: [{
                                label: 'Minggu Ini',
                                data: thisWeekData,
                                borderColor: '#2c5324',
                                backgroundColor: 'rgba(44, 83, 36, 0.1)',
                                borderWidth: 2,
                                tension: 0.4
                            },
                            {
                                label: 'Minggu Lalu',
                                data: lastWeekData,
                                borderColor: '#8ba663',
                                backgroundColor: 'rgba(139, 166, 99, 0.1)',
                                borderWidth: 2,
                                borderDash: [5, 5],
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: false,
                                min: minY,
                                max: maxY,
                                ticks: {
                                    stepSize: stepSize
                                },
                                title: {
                                    display: true,
                                    text: 'Rp (ribu)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }

            // Create charts using the function
            const chartPadi = createPriceChart(
                'priceChart',
                [13.5, 13.8, 14.5, 15.5, 14.8, 14.2, 13.5],
                [14.0, 13.5, 13.2, 13.8, 14.5, 14.2, 15.0],
                12, 16, 1
            );

            const chartCabai = createPriceChart(
                'priceChartCabaiRawit',
                [45.0, 47.5, 50.0, 48.5, 46.0, 45.5, 44.0],
                [42.0, 43.5, 45.0, 47.0, 48.5, 47.0, 46.0],
                40, 55, 5
            );

            const chartWortel = createPriceChart(
                'priceChartWortel',
                [18.0, 18.5, 19.0, 19.5, 20.0, 19.0, 18.5],
                [17.5, 18.0, 18.5, 19.0, 19.5, 18.5, 18.0],
                16, 21, 1
            );

            const chartTomat = createPriceChart(
                'priceChartTomat',
                [12.0, 12.5, 13.0, 13.5, 14.0, 13.5, 13.0],
                [13.0, 12.5, 12.0, 11.5, 12.0, 12.5, 13.0],
                11, 15, 1
            );

            const chartBuncis = createPriceChart(
                'priceChartBuncis',
                [10.0, 10.5, 11.0, 11.5, 11.0, 10.5, 10.0],
                [9.5, 10.0, 10.5, 11.0, 10.5, 10.0, 9.5],
                9, 12, 1
            );

            const chartKubis = createPriceChart(
                'priceChartKubis',
                [8.0, 8.5, 9.0, 9.5, 9.0, 8.5, 8.0],
                [7.5, 8.0, 8.5, 9.0, 8.5, 8.0, 7.5],
                7, 10, 1
            );

            const chartKopi = createPriceChart(
                'priceChartKopi',
                [85.0, 86.0, 87.0, 88.0, 89.0, 88.0, 87.0],
                [83.0, 84.0, 85.0, 86.0, 87.0, 86.0, 85.0],
                82, 90, 2
            );

            const chartLada = createPriceChart(
                'priceChartLada',
                [93.0, 94.0, 100.0, 102.0, 102.0, 101.0, 102.0],
                [90.0, 92.0, 92.0, 95.0, 98.0, 90.0, 89.0],
                88, 104, 2
            );
        });
    </script>
        <x-footer />
</body>
</html>