<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <a href={{url()->previous()}} class="text-blue-500">Go Back</a>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays <strong>{{ $job->salary }}</{strong}> per year.
    </p>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">
                Edit Job
            </x-button>
        </p>
    @endcan

</x-layout>
