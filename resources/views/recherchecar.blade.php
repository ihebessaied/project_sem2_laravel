
 <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 </head>
 <form action="{{route('rentp.ind')}}" method="POST">
    @csrf
 <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date Get</label>
    <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" name="dateg" id="example-date-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date Return</label>
    <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" name="dater" id="example-date-input">
    </div>
  </div>
<button type="submit">lET Me see</button>
</form>
  
