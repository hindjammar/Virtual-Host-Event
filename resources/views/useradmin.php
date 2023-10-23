
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/styles/form.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
       
    <form method="post" action="{{ url('admin/home/save') }}">
       
         <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" >

            
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" >

        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Profession</label>|<span class="text-muted">    admin=>1 | user=>0 | manager=>2</span>
            <input type="number" name="is_admin" id="is_admin" class="form-control" placeholder="Profestion">

        
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" >

        </div>
        

        

        <div class="mb-3">
            <button type="submit" class="btn btn-success btn-submit">Add</button>
            <a href="{{url('admin/home')}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
</body>
