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
                <div class="container-fluid">

                    @if ($candidates->isEmpty())
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-body text-center">
                                        <p class="lead">No candidates available at the moment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Candidate Card -->
                        <div class="row justify-content-center">
                            @foreach ($candidates as $candidate)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                {{ $candidate->election_number }} | {{ $candidate->name }}
                                            </h6>
                                        </div>
                                        <div class="card-body text-center">
                                            <div
                                                style="max-height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                                <img class="img-fluid"
                                                    style="max-width: 100%; max-height: 100%; object-fit: contain; transition: transform 0.3s ease-in-out;"
                                                    src="{{ asset('storage/candidate-pictures/' . $candidate->picture) }}"
                                                    alt="Candidate Picture"
                                                    onmouseover="this.style.transform='scale(1.1)'"
                                                    onmouseout="this.style.transform='scale(1)'">
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <a href="{{ route('voter.show', $candidate->id) }}" target="_blank"
                                                        class="btn btn-danger btn-user btn-block">Resume</a>
                                                </div>
                                                <div class="col">
                                                    <!-- Form Section -->
                                                    <form action="{{ route('voter.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="candidate_id"
                                                            value="{{ $candidate->id }}">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-user btn-block">Vote</button>
                                                    </form>
                                                    <!-- End Form Section -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- /.container-fluid -->

                <div style="height: 30px;"></div>

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

</body>

</html>
