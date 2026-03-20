<x-layout>
  <x-slot:headings>
    Job Listing
  </x-slot:headings>
  
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="jobs/{{ $job['id'] }}">
          <strong>{{$job['title']}}:</strong><span> Pays {{$job['salary']}} per month.</span>
        </a>
      </li>
    @endforeach
  </ul>
  

</x-layout>