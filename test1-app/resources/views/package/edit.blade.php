@include('adminnav')

<div class="container">
  <div class="row">
    <form  action="{{route('package.update', $package->_id)}}" method="POST" enctype="multipart/form-data" class="space-y-5">
      {{ csrf_field() }}
      @method('put')
      <div>
          <input type="text" value="{{$package->package_name}}" placeholder="Enter Package Name *" class="form-input"  name="package_name" />
          <span class="text-danger">
            @error('package_name')
                {{$message}}
            @enderror
          </span>
      </div>

      <div>
        <input type="text" value="{{$package->package_desc}}" placeholder="Enter Package Desc *" class="form-input"  name="package_desc" />
        <span class="text-danger">
          @error('package_desc')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="number" value="{{$package->package_price}}" placeholder="Enter Package Price *" class="form-input"  name="package_price" />
        <span class="text-danger">
          @error('package_price')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="number" value="{{$package->package_discount}}" placeholder="Enter Package Discount *" class="form-input"  name="package_discount" />
        <span class="text-danger">
          @error('package_discount')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <select name="destination" id="" class="form-input">
          @foreach ($categorys as $item)
          @if (strcmp($item->category_name,$package->destination)==0)
            <option value="{{$item->category_name}}" selected>{{$item->category_name}}</option>

            @else
            <option value="{{$item->category_name}}">{{$item->category_name}}</option>

              
          @endif
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
        <input type="text" value="{{$package->day_night}}" placeholder="Enter Day / Night *" class="form-input"  name="day_night" />
        <span class="text-danger">
          @error('day_night')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="text" value="{{$package->route}}" placeholder="Enter route *" class="form-input"  name="route" />
        <span class="text-danger">
          @error('route')
              {{$message}}
          @enderror
        </span>
      </div>

      <div>
        <input type="text" value="{{$package->detail_desc}}" placeholder="Enter Detail Desc *" class="form-input"  name="detail_desc" />
        <span class="text-danger">
          @error('detail_desc')
              {{$message}}
          @enderror
        </span>
      </div>
      <div class="!mt-2">
          <span class="text-white-dark text-[11px] inline-block">*Required Fields</span>
      </div>
      <button type="submit" class="btn btn-primary !mt-6">Update</button>
    </form>
  </div>
</div>
@include('adminfooter')
