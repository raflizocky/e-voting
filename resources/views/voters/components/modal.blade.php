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
