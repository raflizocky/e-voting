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
