@foreach ($jobs as $job)
    <br/>
    <h4>Nama Pekerjaan</h4>
    <h4>{!!$job->job_name!!}</h4>
    <p>{!!str_limit($job->details,100)!!}</p>
    <a href="{{route('admin-jb.edit',$job->id)}}"class>Edit</a>
    <br/>
@endforeach  
