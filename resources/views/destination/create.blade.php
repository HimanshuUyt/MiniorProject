@include('adminnav')

<div class="container">
  <div class="row">
    <form  action="{{route('destination.store')}}" method="POST" enctype="multipart/form-data" class="space-y-5">
      {{ csrf_field() }}
      <div>
          <input type="text" placeholder="Enter Full Name *" class="form-input"  name="category_name" />
          <span class="text-danger">
            @error('category_name')
                {{$message}}
            @enderror
          </span>
      </div>
      <div>
          <input type="file" placeholder="Upload Images *" class="form-input" name="category_pic" />

          <span class="text-danger">
            @error('category_pic')
                {{$message}}
            @enderror
          </span>
      </div>
      <div class="!mt-2">
          <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
      </div>
      <button type="submit" class="btn btn-primary !mt-6">ADD</button>
    </form>
  </div>
</div>
@include('adminfooter')
