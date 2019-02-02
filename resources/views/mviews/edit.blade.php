@extends('mlayout.master')
@section('body')
	  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Post 
      </h1> 
      
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-9" style="background-color: #161616">
              <div class="box">
                  <!-- form start -->
                  <form role="form" method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                  	@csrf
                    @method('put')
                    <div class="box-body">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" placeholder="{{$post->title}}" name="title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="pcode">Product Code</label>
                        <input type="text" name="pcode" class="form-control" placeholder="{{$post->pcode}}">

                        <p class="help-block">Product official codes</p>
                      </div>
                     <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" placeholder="{{$post->price}}" class="form-control">

                        <p class="help-block">Enter Ammount (in Rs.)</p>
                      </div>
                      <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="description" name="description" placeholder="{{$post->description}}" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="type">Type</label>
                        <input type="radio" name="type" value="Brand New">Brand New
                        <input type="radio" name="type" value="Used">Used
                      </div>

                      <div class="form-group">
                        <label for="specification">Specification</label>
                        <textarea name="specification" name="specification" placeholder="{{$post->specification}}" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  
                </div>
          </div>
          <div class="col-md-3" style="background-color: #161616">
              
              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Category</h3>
                  </div>
                  <div class="box-body">
                      <div class="radio">
                          <label>
                            <input type="radio" name="category" value="Mobile">
                            Mobile
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                            <input type="radio" name="category" value="Laptop">
                            Laptop
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                            <input type="radio" name="category" value="Ipad">
                            Ipad
                          </label>
                      </div>
                  </div>
              </div>

              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Feature Image</h3>
                  </div>
                  <div class="box-body text-center" style="overflow: hidden;">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        
                        
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                            <input type="file" name="image">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
       
    </form>
      <!-- ./row -->
    </section>
  </div>
@endsection