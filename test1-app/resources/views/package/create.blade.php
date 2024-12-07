@include('adminnav')

<div class="container">
  <div class="row">
    <form  action="{{route('package.store')}}" method="POST" enctype="multipart/form-data" class="space-y-5">
      {{ csrf_field() }}
      <div>
          <input type="text" placeholder="Enter Package Name *" class="form-input"  name="package_name" />
          <span class="text-danger">
            @error('package_name')
                {{$message}}
            @enderror
          </span>
      </div>

      <div>
        <input type="text" placeholder="Enter Package Desc *" class="form-input"  name="package_desc" />
        <span class="text-danger">
          @error('package_desc')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="number" placeholder="Enter Package Price *" class="form-input"  name="package_price" />
        <span class="text-danger">
          @error('package_price')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="number" placeholder="Enter Package Discount *" class="form-input"  name="package_discount" />
        <span class="text-danger">
          @error('package_discount')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <select name="destination" id="" class="form-input">
          @foreach ($categorys as $item)
            <option value="{{$item->category_name}}">{{$item->category_name}}</option>
          @endforeach
        </select>
        
        <span class="text-danger">
          @error('destination')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
          <input type="file" placeholder="Upload Images *" class="form-input" name="package_pic" />

          <span class="text-danger">
            @error('package_pic')
                {{$message}}
            @enderror
          </span>
      </div>

      <div>
        <input type="text" placeholder="Enter Day / Night *" class="form-input"  name="day_night" />
        <span class="text-danger">
          @error('day_night')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="text" placeholder="Enter route *" class="form-input"  name="route" />
        <span class="text-danger">
          @error('route')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="text" placeholder="Enter Detail Desc *" class="form-input"  name="detail_desc" />
        <span class="text-danger">
          @error('detail_desc')
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
