<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elecciones</title>
    <!-- Styles -->
    <link href="{{ asset('asset/bootstrap/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
</head>
<body>
    <div class="container-fluid bg-primary py-2">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Elecciones 2022</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="myChart" style="width:100%;max-width:500px"></canvas>    
                    </div>
                    <div class="col-md-6 text-center">
                        <canvas id="myChart2" style="width:100%;max-width:500px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <h4>Mesas</h4>
                <p class="h5 text-success" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">
                    <i class="fa-solid fa-check-to-slot text-success"></i>
                    Mesa 1 (Estudiantes)
                </p>
                <p class="h5 text-success" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">
                    <i class="fa-solid fa-check-to-slot text-success"></i>
                    Mesa 1 (Estudiantes)
                </p>
                <p class="h5 text-success" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">
                    <i class="fa-solid fa-check-to-slot text-success"></i>
                    Mesa 1 (Estudiantes)
                </p>
                <p class="h5 text-success" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">
                    <i class="fa-solid fa-check-to-slot text-success"></i>
                    Mesa 1 (Estudiantes)
                </p>
                <hr>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <label>Ing. Pedro Lopez Cortez</label>
                        <input type="text" class="form-control" placeholder="0">
                        <label>Lic. Victor H. Villegas</label>
                        <input type="text" class="form-control" placeholder="0">
                        <label>Blanco</label>
                        <input type="text" class="form-control" placeholder="0">
                        <label>Nulo</label>
                        <input type="text" class="form-control" placeholder="0">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <script src="{{ asset('asset/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        Chart.register(ChartDataLabels);

        var xValues = ["Italy", "France", "Spain", "USA"];
        var yValues = [55, 49, 44, 24];
        var barColors = ["red", "green","blue","orange"];
        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production"
                }
            }
        });
        
        new Chart("myChart2", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    //backgroundColor: barColors,
                    data: yValues,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        formatter: function(value, context) {
                            return Math.round(value*100/yValues.reduce((a, b) => a + b, 0)) + '%';
                        },
                        color: '#000'
                    }
                }
            }            
        });
    </script>
</body>
</html>