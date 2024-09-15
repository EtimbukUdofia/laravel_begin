<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <a href="/jobs" class="text-blue-500">Go Back</a>
    
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        This job pays <strong>{{$job['salary']}}</{strong}> per year.
    </p>
</x-layout>
