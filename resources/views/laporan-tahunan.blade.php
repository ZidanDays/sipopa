@extends('layouts.main')

@section('container')

<!-- Page Header Start -->
<header class="page-header py-5 mb-5 text-center">
    <h1 class="display-3 text-white mb-4">Laporan Tahunan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan Tahunan</li>
        </ol>
    </nav>
</header>
<!-- Page Header End -->

<!-- Table and Chart Section Start -->
<section class="container my-5">
    <div class="card shadow mb-4">
        <div class="card-header bg-dark text-white text-center">
            <h2 class="card-title mb-0">Jumlah Perkara Diterima (2023)</h2>
        </div>
        <div class="card-body">
            <!-- Table -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Bulan</th>
                        <th>Jumlah Perkara Diterima</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Januari</td>
                        <td>4 Perkara</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Februari</td>
                        <td>32 Perkara</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Maret</td>
                        <td>40 Perkara</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>April</td>
                        <td>1 Perkara</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mei</td>
                        <td>5 Perkara</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Juni</td>
                        <td>12 Perkara</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Juli</td>
                        <td>8 Perkara</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Agustus</td>
                        <td>14 Perkara</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>September</td>
                        <td>5 Perkara</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Oktober</td>
                        <td>9 Perkara</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Nopember</td>
                        <td>2 Perkara</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Desember</td>
                        <td>3 Perkara</td>
                    </tr>
                    <tr>
                        <th colspan="2">Jumlah</th>
                        <th>135 Perkara</th>
                    </tr>
                </tbody>
            </table>
            <!-- Chart -->
            <div id="containerlaporantahunan2023" style="width:100%; height:500px; margin-top: 30px;"></div>
        </div>
    </div>
</section>

<!-- Chart Section Start -->
<section class="container my-5">
    {{-- <div class="card shadow mb-4">
        <div class="card-header bg-dark text-white text-center">
            <h2 class="card-title mb-0">Jumlah Perkara per Bulan (2023)</h2>
        </div>
        <div class="card-body">
            <div id="containerlaporantahunan" style="width:100%; height:500px;"></div>
        </div>
    </div> --}}

    <!-- New Section for Type-Based Cases -->
    <div class="card shadow">
        <h2 class="card-title mb-0">Perkara yang Diterima Berdasarkan Jenisnya (2023)</h2>
        <div class="card-header bg-dark text-white text-center">
        </div>
        <div class="card-body">
            <!-- Table Start -->
            <div class="table-responsive mb-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Perkara</th>
                            <th>Jumlah Perkara</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cerai Talak</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cerai Gugat</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dispensasi Kawin</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Isbat Nikah</td>
                            <td>42</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Isbat Nikah Contentius</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Perwalian</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Penguasaan Anak</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><strong>Jumlah</strong></td>
                            <td><strong>Total</strong></td>
                            <td><strong>135</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table End -->
            
            <!-- Chart Start -->
            <div id="containerjenislaporantiperkara" style="width:100%; height:500px;"></div>
            <!-- Chart End -->
        </div>
    </div>


{{-- 3 --}}
<div class="card shadow">
<div class="card-body">
    <!-- Table Start -->
    <div class="table-responsive mb-4">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kecamatan</th>
                    <th>Jumlah Perkara</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Motoling</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Motoling Barat</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kumelembuay</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Motoling Timur</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Tompaso Baru</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maesaan</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Modoinding</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Tenga</td>
                    <td>39</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Tatapaan</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Ranoyapo</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Sinonsayang</td>
                    <td>53</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Tareran</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Suluun Tareran</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Amurang</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Amurang Barat</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Amurang Timur</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Tumpaan</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td><strong>Jumlah</strong></td>
                    <td><strong>Total</strong></td>
                    <td><strong>135</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
    
    <!-- Chart Start -->
    <div id="containerlaporankecamatan" style="width:100%; height:500px;"></div>
    <!-- Chart End -->
</div>
</div>
</div>
</section>













    <section class="container my-5">
        <div class="card shadow mb-4">
            <div class="card-header bg-dark text-white text-center">
                <h2 class="card-title mb-0">Jumlah Perkara Diterima (2023)</h2>
            </div>
            <div class="card-body">
                <!-- Table -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Tingkat Pendidikan</th>
                            <th>Jumlah Perkara Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tidak Sekolah</td>
                            <td>1 Perkara</td>
                        </tr>
                        <tr>
                            <td>SD Sederajat</td>
                            <td>39 Perkara</td>
                        </tr>
                        <tr>
                            <td>SLTP Sederajat</td>
                            <td>36 Perkara</td>
                        </tr>
                        <tr>
                            <td>SLTA Sederajat</td>
                            <td>52 Perkara</td>
                        </tr>
                        <tr>
                            <td>Diploma</td>
                            <td>1 Perkara</td>
                        </tr>
                        <tr>
                            <td>Sarjana</td>
                            <td>5 Perkara</td>
                        </tr>
                        <tr>
                            <td>Magister</td>
                            <td>1 Perkara</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <th>135 Perkara</th>
                        </tr>
                    </tbody>
                </table>
                <!-- Chart -->
                <div id="containerlaporanpendidikanxx" style="width:100%; height:400px; margin-top:50px;"></div>
            </div>
        </div>
    </section>











<!-- Chart Section End -->

<!-- Table and Chart Section End -->
{{-- 
@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('containerlaporantahunan2023', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Jumlah Perkara Diterima Per Bulan Tahun 2023'
        },
        xAxis: {
            categories: [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember'
            ]
        },
        yAxis: {
            title: {
                text: 'Jumlah Perkara'
            }
        },
        series: [{
            name: 'Perkara',
            data: [4, 32, 40, 1, 5, 12, 8, 14, 5, 9, 2, 3]
        }]
    });
</script>
@endpush --}}

@endsection


