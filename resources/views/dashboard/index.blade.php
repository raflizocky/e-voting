<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0 text-gray-800">Dashboard</h4>
        <a href="{{ route('dashboard.generate-pdf') }}" target="_blank"
           class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
            <i class="fas fa-file-pdf fa-sm text-white-50 mr-1"></i> Generate PDF
        </a>
    </div>

    @include('dashboard.components.card')

    @include('dashboard.components.chart')

    <!-- mobile view -->
    <div class="d-block d-sm-none text-center mb-4">
        <a href="{{ route('dashboard.generate-pdf') }}" 
           target="_blank" class="btn btn-danger">
            <i class="fas fa-file-pdf mr-1"></i> Generate PDF
        </a>
    </div>

</x-layout>
