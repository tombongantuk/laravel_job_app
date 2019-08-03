@foreach ($jobs as $job)
    <br/>
    <div class="container">
        <h6>{!!$job->job_name!!}</h6>
    </div>
    <div class="container">
        <small>{!!$job->company_name!!}</small>
    </div>
    <div class="container">
            <a href="{{route('admin_jb.edit',$job->id)}}"class>Edit</a><hr/>
    </div>
@endforeach  
