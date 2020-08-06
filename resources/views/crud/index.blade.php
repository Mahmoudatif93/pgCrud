


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>
<br>
<div class="col-md-12 ">
    @if(Session::has('message'))
     <p class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable"> {{ Session::get('message') }}</p>
     @endif

</div>
<div class="container">
    <div class="col-xs-12">
        <form action="{{route('addcrud.store')}}" method="post" enctype="multipart/form-data">

    <div class="box-body">
        {{ csrf_field() }}
    <div class="form-group col-md-4" >

      <label for="name">name:-</label>
      <input  class="form-group" type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group col-md-4"  >
      <label for="phone">phone:-</label>
      <input class="form-group" type="text" class="form-control" name="phone"id="phone" placeholder="phone">
    </div>
    <div class="form-group col-md-4"  >
    <button type="submit" class="btn btn-primary">Add</button>
    </div>
</div>
  </form>
</div>

</div>


<div class="container">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Crud Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="exp1" class="table table-bordered table-striped example">
                                <thead>
                                    <tr class="info" role="row">
                                        <th>م </th>
                                        <th> name</th>
                                        <th>  phone>
                                        <th> controls </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1;?>
                                    @foreach($cruds as $row)
                                    <tr>
                                        <td><?php echo $x ; ?> </td>

                                        <td> <?php echo $row->name ?> </td>
                                        <td> <?php echo $row->phone  ; ?> </td>



                                        <td>

                                            <a class="btn btn-info btn-xs" href="{{url('editcrud',$row->id)}}">update<i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger btn-xs" href="{{url('deletecrud',$row->id)}}">delete<i class="fa fa-trash"></i></a>




                                        </td>

                                    </tr>
                                    <?php $x++;?>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- /.col -->
</div>
