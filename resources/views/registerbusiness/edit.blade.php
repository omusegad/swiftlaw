 
 @extends('layouts.app')  
    @section('content')
    <form method="post" action="{{ route(''business-registration.update', $editbusiness->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" value={{ $editbusiness->share_name }} />
        </div>
        <div class="form-group">
          <label for="price">Share Price :</label>
          <input type="text" class="form-control" name="share_price" value={{ $editbusiness->share_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $editbusiness->share_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

  @endsection('content')