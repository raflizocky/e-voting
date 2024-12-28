    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Candidate Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Resume</th>
                            <th>Election Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>{{ $candidate->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/candidate-pictures/' . $candidate->picture) }}"
                                        alt="Candidate Picture" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('candidate.show', $candidate->id) }}" target="_blank"
                                        class="btn btn-primary btn-sm">Resume </a>
                                </td>
                                <td>{{ $candidate->election_number }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm btn-block mb-2" data-toggle="modal"
                                        data-target="#editCandidateModal" data-id="{{ $candidate->id }}"
                                        data-name="{{ $candidate->name }}"
                                        data-election_number="{{ $candidate->election_number }}"
                                        data-picture="{{ $candidate->picture }}" data-resume="{{ $candidate->resume }}"
                                        aria-label="Edit Candidate {{ $candidate->name }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('candidate.destroy', $candidate->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-block"
                                            onclick="return confirm('Are you sure you want to delete this data?')"
                                            aria-label="Delete Candidate {{ $candidate->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('candidate.components.modal')
