@foreach ($jobs as $job)
    <h4>{!!$job->job_name!!}</h4>
    <p>{!!str_limit($job->details,100)!!}</p>
    <a href="{{route('admin-jb.edit')}}">Edit</a>
@endforeach  