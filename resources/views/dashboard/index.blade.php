<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0 text-gray-800">Dashboard</h4>
    </div>

    @include('dashboard.components.card')

    @include('dashboard.components.chart')

</x-layout>
