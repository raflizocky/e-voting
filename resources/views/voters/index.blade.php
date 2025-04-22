<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Voters List</h1>
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-sm btn-info mr-2" data-toggle="modal" data-target="#importVotersModal">
                <i class="fas fa-file-import fa-sm"></i>
                <span class="d-none d-sm-inline d-md-none">Import</span>
                <span class="d-none d-md-inline ml-1">Import</span>
            </a>
            <a href="{{ route('voters.export.excel') }}" target="_blank"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
                <i class="fas fa-file-excel fa-sm mr-1"></i> Export Excel
            </a>
            <a href="{{ route('voters.export.pdf') }}" target="_blank"
                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm mr-2">
                <i class="fas fa-file-pdf fa-sm mr-1"></i> Export PDF
            </a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal"
                data-target="#addVotersModal">
                <i class="fas fa-plus fa-sm mr-1"></i> Add
            </a>
        </div>
    </div>

    @include('components.alerts')

    @include('voters.components.table')

</x-layout>
