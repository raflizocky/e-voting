<!DOCTYPE html>
<html lang="en">

<x-header>{{ $title }}</x-header>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <x-topbar></x-topbar>

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <!-- Descriptive Text -->
                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="col-md-6 text-center">
                            <p class="lead mb-0" style="font-family: 'Open Sans', sans-serif; color: #7f8c8d;">Here is
                                the vote count chart for the candidates.</p>
                        </div>
                    </div>

                    <!-- Bar Chart -->
                    <div class="col-xl-10 col-lg-12 mx-auto">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center"
                                style="background-color: #2c3e50; color: #fff;">
                                <h6 class="m-0 font-weight-bold">Vote Count Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar" style="max-height: 300px;">
                                    <canvas id="myBarChart" aria-label="Vote Count Chart" role="img"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="chartData" data-chart-data="{{ json_encode($candidateVoteData) }}" style="display: none;">
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('template/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('template/js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('template/vendor/chart.js/Chart.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('template/js/demo/chart-area-demo.js') }}></script>
    <script src={{ asset('template/js/demo/chart-pie-demo.js') }}></script>
    <script src={{ asset('template/js/demo/chart-bar-demo.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('template/js/demo/datatables-demo.js') }}></script>

</body>

</html>
