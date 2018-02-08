
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
      <h2>Job Listing</h2>
      @can('new_job')
      <p><button type="button" class="btn btn-primary">Enter New Job</button></p>     
      @endcan      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            @can('approve_job')
            <th>Approve Job</th>
            @endcan
            @can('apply_job')
            <th>Apply for this Job</th>
            @endcan
        </tr>
    </thead>
    <tbody>
        @forelse ($jobs as $job)
        <tr>
            <td>{{ $job->title }}</td>
            @can('approve_job')
            <td> 
             <a href="">Approve this job</a>
         </td> 
         @endcan 
         @can('apply_job')
         <td> 
           <a href="">Apply</a>
       </td>
       @endcan
   </tr>
   @empty
   <p>No users</p>
   @endforelse


</tbody>
</table>
</div>

</body>
</html>

