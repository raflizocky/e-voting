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
