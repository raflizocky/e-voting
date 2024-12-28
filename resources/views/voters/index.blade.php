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

    @include('components.alerts')

    @include('voters.components.table')

</x-layout>
