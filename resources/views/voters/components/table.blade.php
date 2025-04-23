    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Voters Table</h6>
            <button id="deleteSelectedBtn" class="btn btn-danger btn-sm" disabled>
                <i class="fas fa-trash"></i> Delete Selected
            </button>
        </div>
        <div class="card-body">
            <form id="massDeleteForm" action="{{ route('voters.massDelete') }}" method="post">
                @csrf
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">
                                <input type="checkbox" id="selectAll">
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voters as $voter)
                            <tr>
                                <td>
                                    <input type="checkbox" name="selected_ids[]" value="{{ $voter->id }}" class="voter-checkbox">
                                </td>
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
                                        <i class="fas fa-edit" style="font-size: 0.875rem;"></i>
                                        <span>Edit</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
        </div>
    </div>

    @include('voters.components.modal')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllCheckbox = document.getElementById('selectAll');
            const voterCheckboxes = document.querySelectorAll('.voter-checkbox');
            const deleteSelectedBtn = document.getElementById('deleteSelectedBtn');
            const massDeleteForm = document.getElementById('massDeleteForm');
        
            // Toggle all checkboxes
            selectAllCheckbox.addEventListener('change', function() {
                const isChecked = this.checked;
                
                voterCheckboxes.forEach(checkbox => {
                    checkbox.checked = isChecked;
                });
                
                updateDeleteButtonState();
            });
        
            // Individual checkbox change handler
            voterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateDeleteButtonState();
                    
                    // Update "select all" checkbox state
                    const allChecked = Array.from(voterCheckboxes).every(cb => cb.checked);
                    const someChecked = Array.from(voterCheckboxes).some(cb => cb.checked);
                    
                    selectAllCheckbox.checked = allChecked;
                    selectAllCheckbox.indeterminate = someChecked && !allChecked;
                });
            });
        
            // Update delete button state based on selections
            function updateDeleteButtonState() {
                const hasSelection = Array.from(voterCheckboxes).some(cb => cb.checked);
                deleteSelectedBtn.disabled = !hasSelection;
            }
        
            // Handle delete selected button click
            deleteSelectedBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                const selectedCount = Array.from(voterCheckboxes).filter(cb => cb.checked).length;
                
                if (selectedCount > 0) {
                    if (confirm(`Are you sure you want to delete ${selectedCount} selected voter(s)?`)) {
                        massDeleteForm.submit();
                    }
                }
            });
        });
        </script>