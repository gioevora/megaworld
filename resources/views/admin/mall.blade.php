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
                                <h6 class="text-white text-capitalize ps-3 m-0">Hotel List</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                    Add Mall
                                </button>
                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mall</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mall as $bed)
                                        <tr data-hotel-id="{{$bed->id}}" data-hotel-name="{{$bed->name}}" data-hotel-location="{{$bed->location}}" data-hotel-hotel_brand="{{$bed->hotel_brand}}">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{asset('/storage/township_images/' . $bed->image) }}" alt="Township Image" style="max-width: 80px; max-height: 800px;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm mx-4">{{$bed->name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$bed->description}}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$bed->type}}</p>

                                            </td>


                                            <td class="align-middle" style="display: flex;">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <form action="{{ route('hotels.delete', ['id' => $bed->id]) }}" method="post" id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger" onclick="confirmDelete()"> <i class="fa-solid fa-trash"></i></button>
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

            <!-- Add Township Modal -->
            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add New Mall</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Admin/Add/Mall" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Mall</div>
                                    <input type="text" class="form-control" name="name" placeholder="Mega Mall..">
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Description</div>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Type</div>
                                    <select name="type" id="" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="Full-Scale">Full-Scale</option>
                                        <option value="Community">Community</option>
                                    </select>
                                </div>


                                <div class="form-group mb-3">
                                    <label for="image" class="label mb-2">Image</label>
                                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" class="form-control">
                                    <img id="imagePreview" src="" alt="Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Mall</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

           

            <script>
                $(document).ready(function() {
                    $('#editModalCenter').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget);
                        var hotelId = button.closest('tr').data('hotel-id');
                        var hotelName = button.closest('tr').data('hotel-name');
                        var hotelLocation = button.closest('tr').data('hotel-location');
                        var hotelBrand = button.closest('tr').data('hotel-hotel_brand');

                        var modal = $(this);
                        modal.find('#updateName').val(hotelName);
                        modal.find('#updateLocation').val(hotelLocation);
                        modal.find('#updateBrand').val(hotelBrand);

                        // Set the form action dynamically
                        var updateUrl = "{{ route('update.hotels', ':id') }}".replace(':id', hotelId);
                        modal.find('form').attr('action', updateUrl);
                    });
                });

                function confirmDelete() {
                    if (confirm('Are you sure you want to delete this township?')) {
                        // Submit the form if the user confirms
                        document.getElementById('deleteForm').submit();

                    }
                }
            </script>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Footer -->
            @include('admin.Extend.footer')

        </div>
    </main>

    @include('admin.Extend.end')

</body>

</html>