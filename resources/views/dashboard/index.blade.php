<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0 text-gray-800">Dashboard</h4>
    </div>

    <!-- Card Row -->
    <div class="row">

        <!-- Total Voters -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-danger text-uppercase mb-1">
                                Total Voters</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalVoters }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-poll fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Voters Who Voted -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                Voted
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $votersWhoVoted }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Voters Not Voted -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                Not Voted
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $votersNotVoted }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times-circle fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Card Row -->

    <!-- Chart Row -->
    <div class="row">

        <!-- Bar Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-danger">Vote Count Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart" aria-label="Vote Count Chart" role="img"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Chart Row -->

    <div id="chartData" data-chart-data="{{ json_encode($candidateVoteData) }}" style="display: none;"></div>

</x-layout>
