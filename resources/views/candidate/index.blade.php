<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0 text-primary">Candidate List</h4>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal"
            data-target="#addCandidateModal">
            <i class="fas fa-plus fa-sm mr-1"></i> Add
        </a>
    </div>

    @include('components.alerts')

    @include('candidate.components.table')

</x-layout>
