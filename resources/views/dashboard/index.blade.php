<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0 text-gray-800">Dashboard</h4>
        <div class="d-flex">
            <button id="sendEmailsBtn" class="btn btn-sm btn-info shadow-sm mr-2">
                <i class="fas fa-envelope fa-sm text-white-50 mr-1"></i> Send Email
            </button>
            <a href="{{ route('dashboard.generate-pdf') }}" target="_blank" class="btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-file-pdf fa-sm text-white-50 mr-1"></i> Generate PDF
            </a>
        </div>
    </div>

    @include('dashboard.components.card')

    @include('dashboard.components.chart')

    <!-- mobile view -->
    <div class="d-block d-sm-none text-center mb-4">
        <div class="btn-group" role="group">
            <a href="{{ route('dashboard.generate-pdf') }}" target="_blank" class="btn btn-danger">
                <i class="fas fa-file-pdf mr-1"></i> PDF
            </a>
            <button id="sendEmailsBtnMobile" class="btn btn-info">
                <i class="fas fa-envelope mr-1"></i> Email
            </button>
        </div>
    </div>

    <!-- Email Confirmation Modal -->
    <div class="modal fade" id="emailConfirmationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Email Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="sendToAll" name="sendOption" class="custom-control-input"
                                value="all" checked>
                            <label class="custom-control-label" for="sendToAll">Send to all voters and admins</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="sendToSingle" name="sendOption" class="custom-control-input"
                                value="single">
                            <label class="custom-control-label" for="sendToSingle">Send to a specific email</label>
                        </div>
                    </div>

                    <div class="form-group d-none" id="singleEmailField">
                        <label for="singleEmail">Email address:</label>
                        <input type="email" class="form-control" id="singleEmail" placeholder="Enter email address">
                    </div>

                    <p id="confirmationText">This will send the voting report to all voters and admins. Proceed?</p>

                    <div class="progress d-none" id="emailProgress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: 0%"></div>
                    </div>
                    <div id="emailResult" class="mt-2"></div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmSendEmails">Send Emails</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Toggle single email input field visibility 
            $('input[name="sendOption"]').change(function() {
                if ($(this).val() === 'single') {
                    $('#singleEmailField').removeClass('d-none');
                    $('#confirmationText').text(
                        'This will send the voting report to the specified email. Proceed?');
                } else {
                    $('#singleEmailField').addClass('d-none');
                    $('#confirmationText').text(
                        'This will send the voting report to all voters and admins. Proceed?');
                }
            });

            $('#sendEmailsBtn, #sendEmailsBtnMobile').click(function() {
                $('#emailProgress').addClass('d-none');
                $('#emailResult').html('');
                $('#emailConfirmationModal').modal('show');
            });

            $('#confirmSendEmails').click(function() {
                $(this).prop('disabled', true);
                $('#emailProgress').removeClass('d-none');

                // Get email option and single email if applicable
                const sendOption = $('input[name="sendOption"]:checked').val();
                const singleEmail = $('#singleEmail').val();

                // Show processing indicator
                $('#emailProgress .progress-bar').css('width', '50%');
                $('#emailResult').html(`
            <div class="alert alert-info">
                Sending email(s)... Please wait.
            </div>
        `);

                $.ajax({
                    url: '{{ route('dashboard.send-report-emails') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        sendOption: sendOption,
                        singleEmail: singleEmail
                    },
                    success: function(response) {
                        // Complete the progress bar
                        $('#emailProgress .progress-bar').css('width', '100%');
                        $('#emailResult').html(`
                    <div class="alert alert-success">
                        ${response.message}
                    </div>
                `);
                        $('#confirmSendEmails').prop('disabled', false);
                    },
                    error: function(xhr) {
                        $('#emailProgress .progress-bar').css('width', '100%');
                        $('#emailResult').html(`
                    <div class="alert alert-danger">
                        Error: ${xhr.responseJSON?.message || 'Something went wrong'}
                    </div>
                `);
                        $('#confirmSendEmails').prop('disabled', false);
                    }
                });
            });
        });
    </script>
</x-layout>
