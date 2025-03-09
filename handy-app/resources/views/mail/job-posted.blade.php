<h2>{{$job->title}}</h2>
<p>Congrats, the Job is now added</p>

<p>
    <a href="{{url("/jobs/" . $job->id)}}">
        View you job
    </a>
</p>
