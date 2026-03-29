<x-layout>
  <x-slot:headings>
    Job Listing
  </x-slot:headings>
  
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="jobs/{{ $job['id'] }}">
          <strong>{{$job['title']}}:</strong><span> Click to see Offer!</span>
        </a>
      </li>
    @endforeach
  </ul>
  

</x-layout>