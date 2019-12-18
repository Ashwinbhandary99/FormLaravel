@include('inc.header');
<div class="container">
    <div class="row">
        <div class="col-md-6">
                <form class="form-horizontol" method="POST" action="{{ url('/edit',array($articles->id) )}}">
                  {{ csrf_field() }}
                        <fieldset>
                          <legend>Form</legend>
                          @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                              <div class="alert alert-danger">
                                {{$error}}
                              </div>
                            @endforeach
                          @endif
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $articles->title;?>" aria-describedby="emailHelp" placeholder="Title">
                              
                              <small id="emailHelp" class="form-text text-muted">Your title of post</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Description</label>
                              <textarea class="form-control" name="description"placeholder="description" >"<?php echo $articles->description;?>" </textarea>
                              </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{ url('/')}}" class="btn btn-primary">Back</a>
                        </fieldset>
                      </form>
        </div>
    </div>
</div>

@include('inc.footer')

            