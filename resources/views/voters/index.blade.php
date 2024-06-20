<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Voters List</h1>
        <div class="d-flex justify-content-end">
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal"
                data-target="#addVotersModal">
                <i class="fas fa-plus fa-sm mr-1"></i> Add
            </a>
        </div>
    </div>

    <!-- Alert -->
    @if ($errors->any() || session('message'))
        <div class="alert alert-{{ $errors->any() ? 'danger' : 'success' }} alert-dismissible fade show mx-auto my-4"
            role="alert">
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
            @if (session('message'))
                {{ session('message') }}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

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

    <!-- Add Voters Modal -->
    <div class="modal fade" id="addVotersModal" tabindex="-1" aria-labelledby="addVotersModalLabel" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addVotersModalLabel">Add Voters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('voters.store') }}" method="post" id="addVotersForm">
                    @csrf
                    <div class="modal-body">
                        <!-- Form fields -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Voters Modal -->
    <div class="modal fade" id="editVotersModal" tabindex="-1" aria-labelledby="editVotersModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editVotersModalLabel">Edit Voters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editVotersForm" method="post"
                    action="{{ isset($voter) ? route('voters.update', $voter->id) : route('voters.update', '') }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <!-- Form fields -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="editname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="editEmail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" id="editPassword" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        $('#editVotersModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');

            $.ajax({
                url: '/voters/' + id + '/edit',
                type: 'GET',
                success: function(data) {
                    $('#editname').val(data.name);
                    $('#editEmail').val(data.email);
                    $('#editPassword').val('');

                    $('#editVotersForm').attr('action', '/voters/' + id);
                },
                error: function() {
                    alert('Error when fetching data.');
                }
            });
        });
    });

    $(document).ready(function() {
        fetchData();

        function fetchData() {
            $.ajax({
                url: '{{ route('voters.index') }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(voter) {
                        var statusElement = $('#status-' + voter.id);
                        var statusHtml = voter.status === 'Voted' ?
                            '<span class="badge badge-success"><i class="fas fa-check-circle"></i> Voted</span>' :
                            '<span class="badge badge-danger"><i class="fas fa-times-circle"></i> Not Voted</span>';
                        statusElement.html(statusHtml);
                    });
                },
                error: function() {
                    console.log('Error fetching voter status.');
                }
            });
        }

        setInterval(fetchData, 5000);
    });
</script>
