    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Voters Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voters as $voter)
                            <tr>
                                <td>{{ $voter->name }}</td>
                                <td>{{ $voter->email }}</td>
                                <td id="status-{{ $voter->id }}">
                                    @if ($voter->status === 'Voted')
                                        <span class="badge badge-success"><i class="fas fa-check-circle"></i>
                                            Voted</span>
                                    @else
                                        <span class="badge badge-danger"><i class="fas fa-times-circle"></i> Not
                                            Voted</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm btn-block mb-2" aria-label="Edit Voter"
                                        data-toggle="modal" data-target="#editVotersModal" data-id="{{ $voter->id }}"
                                        data-name="{{ $voter->name }}" data-email="{{ $voter->email }}"
                                        data-password="{{ $voter->password }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('voters.destroy', $voter->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-block" aria-label="Delete Voter"
                                            onclick="return confirm('Delete this data?')">
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

    @include('voters.components.modal')
