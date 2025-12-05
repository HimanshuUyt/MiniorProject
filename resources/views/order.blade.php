@include('adminnav')

<h1>Recent Orders</h1>
<hr>
<table class="table table-striped col-6">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>Pic</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Total amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->username}}</td>
                <td><img src="{{$item->ppic}}" height="100" width="100" ></td>
                <td>{{$item->pname}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->total}}</td>

            </tr>
        @endforeach

    </tbody>
</table>

@include('adminfooter')