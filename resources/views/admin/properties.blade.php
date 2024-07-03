@include('admin.Extend.header')

<body class="g-sidenav-show  bg-gray-200">
    <!-- sidebar -->
    @include('admin.Extend.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.Extend.navbar')

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
                            <div class="border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center" style="background-color: #202A54;">
                                <h6 class="text-white text-capitalize ps-3 m-0">Visit Schedule</h6>

                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Number</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Time</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Message</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Status</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visit as $vis)
                                        <tr data-visit-id="{{ $vis->id }}" data-visit-name="{{ $vis->name }}" data-visit-number="{{ $vis->number }}">

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->name}}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->number}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->email}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->date}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->time}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$vis->message}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    @if($vis->status == 'Accepted')
                                                    <span class="badge bg-success">Accepted</span>
                                                    @else
                                                    <span class="badge bg-danger">Pending</span>
                                                    @endif
                                                </p>
                                            </td>


                                            <td class="align-middle" style="display: flex;">
                                                <form action="/update-status" method="post">
                                                    @csrf
                                                    <input type="hidden" name="item_id" value="{{ $vis->id }}">
                                                    <button type="submit" class="btn" style="margin-right: 10px; background-color: #f6d200" {{ $vis->status == 'Accepted' ? 'disabled' : '' }}>
                                                        Accept
                                                    </button>
                                                </form>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Footer -->
            @include('admin.Extend.footer')

        </div>
    </main>





    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif



    @include('admin.Extend.end')

</body>

</html>