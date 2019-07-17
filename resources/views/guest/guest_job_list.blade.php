@foreach ($jobs as $job)
    <br/>
    <h4>{!!$job->job_name!!}</h4>
    <h6>{!!$job->company_name!!}</h6>
    <h6>{!!$job->company_address!!}</h6>
    <p>{!!str_limit($job->details,100)!!}</p>
@endforeach