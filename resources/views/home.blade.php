@extends('layouts.app')

@section('content')
    <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">

            <div class="col-12">
                <div class="row g-32">
                    <div class="col-md-4 col-6">
                        <div class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer"
                            onclick="window.location.href='{{ route('aset.index') }}'">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                    style="width: 48px; height: 48px;">
                                    <i class="fa fa-warehouse"></i>
                                </div>

                                <div class="d-flex mt-12">
                                    <span
                                        class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                        Total Aset </span>
                                    <div>
                                        <svg class="hp-text-color-success-1" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path fill="currentColor"
                                                d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81v8.37C2 19.83 4.17 22 7.81 22h8.37c3.64 0 5.81-2.17 5.81-5.81V7.81C22 4.17 19.83 2 16.19 2zm1.06 10.33c0 .41-.34.75-.75.75s-.75-.34-.75-.75V9.31l-7.72 7.72c-.15.15-.34.22-.53.22s-.38-.07-.53-.22a.754.754 0 010-1.06l7.72-7.72h-3.02c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h4.83c.41 0 .75.34.75.75v4.83z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>

                                <span class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                    {{ $card['asetLastUpdate'] }} </span>
                                <span class="d-block mt-12 mb-8 h3"> {{ $card['totalAset'] }} </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer"
                            onclick="window.location.href='{{ route('peminjaman.index') }}'">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                    style="width: 48px; height: 48px;">
                                    <i class="fa fa-marker"></i>
                                </div>

                                <div class="d-flex mt-12">
                                    <span
                                        class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                        Total Peminjaman </span>
                                    <div>
                                        <svg class="hp-text-color-danger-1" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path fill="currentColor"
                                                d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81v8.37C2 19.83 4.17 22 7.81 22h8.37c3.64 0 5.81-2.17 5.81-5.81V7.81C22 4.17 19.83 2 16.19 2zm1.34 5.53l-7.72 7.72h3.02c.41 0 .75.34.75.75s-.34.75-.75.75H8c-.41 0-.75-.34-.75-.75v-4.83c0-.41.34-.75.75-.75s.75.34.75.75v3.02l7.72-7.72c.15-.15.34-.22.53-.22s.38.07.53.22c.29.29.29.77 0 1.06z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>

                                <span class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                    {{ $card['peminjamanLastUpdate'] }} </span>
                                <span class="d-block mt-12 mb-8 h3"> {{ $card['totalPeminjaman'] }} </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer"
                            onclick="window.location.href='{{ route('pengembalian.index') }}'">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                    style="width: 48px; height: 48px;">
                                    <i class="fa fa-book"></i>
                                </div>

                                <div class="d-flex mt-12">
                                    <span
                                        class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                        Pengembalian </span>
                                    <div></div>
                                </div>

                                <span class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                    {{ $card['pengembalianLastUpdate'] }} </span>
                                <span class="d-block mt-12 mb-8 h3"> {{ $card['totalPengembalian'] }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="mb-18 col-12">
                        <div class="row align-items-center justify-content-between">
                            <div class="hp-flex-none w-auto col">
                                <span class="d-block mt-4 h3 fw-semibold hp-text-color-black-bg hp-text-color-dark-0">
                                    Data Aset
                                </span>
                            </div>

                            <div class="hp-flex-none w-auto col">
                                <span class="hp-p1-body d-block">{{ $card['asetLastUpdate'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden col-12 mb-n24">
                        <div id="dashboard-analytics-balance-chart" class="overflow-hidden"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hp-flex-none w-auto hp-dashboard-line px-0 col">
        <div class="hp-bg-black-40 hp-bg-dark-80 h-100 mx-24" style="width: 1px;"></div>
    </div>

    <div class="col hp-analytics-col-2">
        <div class="row g-32">
            <div class="col-12">
                <div class="overflow-hidden position-relative hp-bg-primary-1 pt-24 px-24 pb-18 rounded-5"
                    style="min-height: 200px;">
                    <div class="position-absolute w-100" style="height: 90%; bottom: 0px; left: 0px;">
                        <svg width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M370.717 85.179 180.539 10.257l46.817 86.462L99.151 44.63l129.884 138.803L55.517 116.68l60.47 87.899-127.415-32.922"
                                stroke="url(#a)" stroke-width="20" stroke-linejoin="bevel"></path>
                            <defs>
                                <linearGradient id="a" x1="151.96" y1="17.382" x2="195.449" y2="191.807"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="0.737" stop-color="#fff" stop-opacity="0">
                                    </stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('') }}app-assets/img/logo/logo-blue.svg" alt="Yoda">
                        </div>

                        <div class="mt-32 col-12">
                            <span class="h4 d-block hp-text-color-black-0"> 4512 0000 0000 0000 0000
                            </span>
                        </div>

                        <div class="mt-4 mb-n16 col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col">
                                    <span class="hp-caption fw-medium hp-text-color-black-0"> Edward
                                        Adams </span>
                                </div>

                                <div class="d-flex hp-flex-none w-auto col">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="64" width="64" xmlns="http://www.w3.org/2000/svg"
                                        class="hp-text-color-black-0">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M22.222 15.768l-.225-1.125h-2.514l-.4 1.117-2.015.004a4199.19 4199.19 0 0 1 2.884-6.918c.164-.391.455-.59.884-.588.328.003.863.003 1.606.001L24 15.765l-1.778.003zm-2.173-2.666h1.62l-.605-2.82-1.015 2.82zM7.06 8.257l2.026.002-3.132 7.51-2.051-.002a950.849 950.849 0 0 1-1.528-5.956c-.1-.396-.298-.673-.679-.804C1.357 8.89.792 8.71 0 8.465V8.26h3.237c.56 0 .887.271.992.827.106.557.372 1.975.8 4.254L7.06 8.257zm4.81.002l-1.602 7.508-1.928-.002L9.94 8.257l1.93.002zm3.91-.139c.577 0 1.304.18 1.722.345l-.338 1.557c-.378-.152-1-.357-1.523-.35-.76.013-1.23.332-1.23.638 0 .498.816.749 1.656 1.293.959.62 1.085 1.177 1.073 1.782-.013 1.256-1.073 2.495-3.309 2.495-1.02-.015-1.388-.101-2.22-.396l.352-1.625c.847.355 1.206.468 1.93.468.663 0 1.232-.268 1.237-.735.004-.332-.2-.497-.944-.907-.744-.411-1.788-.98-1.774-2.122.017-1.462 1.402-2.443 3.369-2.443z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <span class="h3 d-block fw-semibold hp-text-color-black-bg hp-text-color-dark-0 mb-0">
                    Penghapusan Aset </span>
                <span class="hp-p1-body d-block mt-4">{{ date('d M Y') }}</span>

                <div class="row mt-24">
                    @foreach ($requestTrash as $item)
                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="{{ asset('') }}app-assets/img/dashboard/zendesk-logo.svg"
                                                    alt="Zendesk">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                {{ $item->user->nama_lengkap }} </span>
                                            <span class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                {{ $item->created_at->diffForHumans() }} </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0">
                                        {{ $item->detail->detaset->aset->nama_aset ?? '' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('customjs')
    <script>
        $(document).ready(function() {
            let optionsAnalyticsBalanceChart = {
                series: [{
                    name: "Aset Masuk",
                    data: [],
                }, ],
                fill: {
                    opacity: 1,
                    colors: [
                        document.body.classList.contains("dark") ? "#ffffff" : "#2D3436"
                    ],
                },
                chart: {
                    fontFamily: "Manrope, sans-serif",
                    type: "bar",
                    height: "250",
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                },
                labels: {
                    style: {
                        fontSize: "14px",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                grid: {
                    borderColor: "#B2BEC3",
                    opacity: 1,
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        borderRadius: 2,
                        columnWidth: "60%",
                        colors: {
                            backgroundBarColors: ["#B2BEC3"],
                            backgroundBarOpacity: 0.2,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ["transparent"],
                },
                xaxis: {
                    axisTicks: {
                        show: false,
                        borderType: "solid",
                        height: 6,
                        offsetX: 0,
                        offsetY: 0,
                    },
                    tickPlacement: "between",
                    labels: {
                        style: {
                            colors: [
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                                "#B2BEC3",
                            ],
                            fontSize: "12px",
                        },
                    },
                    categories: [],
                },
                legend: {
                    horizontalAlign: "right",
                    offsetX: 40,
                    position: "top",
                    markers: {
                        radius: 12,
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: ["#636E72"],
                            fontSize: "14px",
                        },
                        // formatter: (value) => {
                        //     return value == "0" ? value / 1000 : value / 1000 + "K";
                        // },
                    },
                    min: 0,
                    // max: 60000,
                    tickAmount: 4,
                }
            };



            $.ajax({
                url: "{{ route('home.chart') }}",
                type: "get",
                responseType: "json",
                success: function(res) {
                    let datas = res.map((el) => el.count)
                    let month = res.map((el) => el.month)

                    optionsAnalyticsBalanceChart.series[0].data = datas
                    optionsAnalyticsBalanceChart.xaxis.categories = month

                    console.log(optionsAnalyticsBalanceChart)

                    let chart = new ApexCharts(document.querySelector(
                            "#dashboard-analytics-balance-chart"),
                        optionsAnalyticsBalanceChart);
                    chart.render();
                }
            });
        })
    </script>
@endpush
