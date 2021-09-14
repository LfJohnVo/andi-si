@extends('layouts.app')
@section('titulo', 'Dashboard')
@section('content')

    <style type="text/css">
        main {
            scroll-behavior: smooth;
        }

        .div_fijo {
            position: -webkit-sticky;
            position: sticky;
            top: 0px;
        }

        .div_fijo a {
            width: 24%;
            text-align: center;
        }

        section {
            padding-top: 40px;
        }

    </style>

    <div
        class="flex items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-b-lg shadow-md div_fijo focus:outline-none focus:shadow-outline-purple">
        <a href="#sect1"
            class="py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-600 focus:outline-none focus:shadow-outline-purple">Estadisticas
            Generales </a>
        <a href="#sect2"
            class="py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-600 focus:outline-none focus:shadow-outline-purple">Productoras
        </a>
        <a href="#sect3"
            class="py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-600 focus:outline-none focus:shadow-outline-purple">Obras</a>
        <a href="#sect4"
            class="py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-600 focus:outline-none focus:shadow-outline-purple">
            Socios Interpretes </a>
    </div>

    <div class="">

        <section id="sect1">
            @include('dashboard.estadisticas')
        </section>

        <section id="sect2">
            @include('dashboard.productoras')
        </section>


        <section id="sect3">
            @include('dashboard.obras')
        </section>



        <section id="sect4">
            @include('dashboard.socios')
        </section>

    </div>











    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        var ctx = document.getElementById("graf1");

        var stars = [135850, 52122, 148825, 16939, 9763];
        var frameworks = ["Televisa", "Tv Azteca", "Netflix", "Amazon", "Blim"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf2");

        var stars = [135850, 52122, 148825, 16939, 9763];
        var frameworks = ["socios1", "socios2", "socios3", "socios4", "socios5"];

        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf3");

        var stars = [135850, 52122, 148825, 16939, 9763];
        var frameworks = ["Televisa", "Tv Azteca", "Netflix", "Amazon", "Blim"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf4");

        var stars = [14, 22, 8, 19, 4];
        var frameworks = ["productora1", "productora2", "productora3", "productora4", "productora5"];

        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf5");

        var stars = [12, 4];
        var frameworks = ["Obras Activas", "Obras Finalizadas"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf8");

        var stars = [20, 24, 15, 13, 26];
        var frameworks = ["Tipo1", "Tipo2", "Tipo3", "Tipo4", "Tipo5"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementById("graf9");

        var stars = [135850, 52122, 148825, 16939, 9763];
        var frameworks = ["Obra1", "Obra2", "Obra3", "Obra4", "Obra5"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>


    <script>
        var ctx = document.getElementById("graf10");

        var stars = [23, 43, 12];
        var frameworks = ["Suspendidos", "Activos", "Baja"];

        var myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: "gray",
                        boxWidth: 20,
                        padding: 8
                    }
                }
            }
        });

    </script>


    <script>
        var ctx = document.getElementById("graf11");

        var stars = [135850, 52122, 148825, 16939, 9763];
        var frameworks = ["productora1", "productora2", "productora3", "productora4", "productora5"];

        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: frameworks,
                datasets: [{
                    label: "",
                    data: stars,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.8)",
                        "rgba(54, 162, 235, 0.8)",
                        "rgba(255, 206, 86, 0.8)",
                        "rgba(75, 192, 192, 0.8)",
                        "rgba(153, 102, 255, 0.8)",
                    ]
                }]
            }
        });

    </script>
@endsection
