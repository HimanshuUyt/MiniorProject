@include('adminnav')


<div class="container">
    <div class="pt-5">
        <div class="mb-6 grid grid-cols-1 gap-6 text-white sm:grid-cols-2 xl:grid-cols-4">
            <!-- Users Visit -->
            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                <div class="flex justify-between">
                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Revenue</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 hover:opacity-80">
                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                            </svg>
                        </a>
                        <ul x-cloak="" x-show="open" x-transition="" x-transition.duration.300ms="" class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 flex items-center">
                    <h4 class="card-title"></h4>
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $r }}</div>
                    <div class="badge bg-white/30">+ 2.35%</div>
                </div>
                <div class="mt-5 flex items-center font-semibold">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                        <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 44,700
                </div>
            </div>
    
            <!-- Sessions -->
            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">  
                <div class="flex justify-between">
                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1"><a href="/destination">Destination</a></div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 hover:opacity-80">
                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                            </svg>
                        </a>
                        <ul x-cloak="" x-show="open" x-transition="" x-transition.duration.300ms="" class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 flex items-center">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $c_count }}</div>
                    <div class="badge bg-white/30">- 2.35%</div>
                </div>
                <div class="mt-5 flex items-center font-semibold">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                        <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 84,709
                </div>
            </div>
    
            <!-- Time On-Site -->
            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                <div class="flex justify-between">
                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1"><a href="/package">Package</a></div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 hover:opacity-80">
                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                            </svg>
                        </a>
                        <ul x-cloak="" x-show="open" x-transition="" x-transition.duration.300ms="" class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 flex items-center">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $p_count }}</div>
                    <div class="badge bg-white/30">+ 1.35%</div>
                </div>
                <div class="mt-5 flex items-center font-semibold">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                        <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 37,894
                </div>
            </div>
    
            <!-- Bounce Rate -->
            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                <div class="flex justify-between">
                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1"><a href="/orders">Orders</a></div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 hover:opacity-80">
                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                            </svg>
                        </a>
                        <ul x-cloak="" x-show="open" x-transition="" x-transition.duration.300ms="" class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 flex items-center">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $o_count }}</div>
                    <div class="badge bg-white/30">- 0.35%</div>
                </div>
                <div class="mt-5 flex items-center font-semibold">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                        <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 50.01%
                </div>
            </div>

            <!-- Bounce Rate -->
            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                <div class="flex justify-between">
                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1"><a href="/users">Users</a></div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 hover:opacity-80">
                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                            </svg>
                        </a>
                        <ul x-cloak="" x-show="open" x-transition="" x-transition.duration.300ms="" class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 flex items-center">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $u_count }}</div>
                    <div class="badge bg-white/30">- 0.35%</div>
                </div>
                <div class="mt-5 flex items-center font-semibold">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                        <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 50.01%
                </div>
            </div>
        </div>
    </div>
</div>


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
            <th>Quantity</th>
            <th>Total amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->username}}</td>
                <td><img src="{{$item->ppic}}" height="50" width="50" ></td>
                <td>{{$item->pname}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->total}}</td>

            </tr>
        @endforeach

    </tbody>
</table>

@include('adminfooter')