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
                                    Add Hotel
                                </button>
                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hotel</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel Brand</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($hotel as $bed)
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
                                                <p class="text-xs font-weight-bold mb-0">{{$bed->location}}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$bed->hotel_brand}}</p>

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
                            <h5 class="modal-title" id="exampleModalLongTitle">Add New Residences</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Admin/Add/Hotel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Residences</div>
                                    <input type="text" class="form-control" name="name" placeholder="Megaworld Township..">
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Location</div>
                                    <select name="location" id="" class="form-control">
                                        <option value="Bacolod">Bacolod</option>
                                        <option value="Batangas">Batangas</option>
                                        <option value="Boracay">Boracay</option>
                                        <option value="Bulacan">Bulacan</option>
                                        <option value="Cavite">Cavite</option>
                                        <option value="Cebu">Cebu</option>
                                        <option value="Davao">Davao</option>
                                        <option value="Iloilo">Iloilo</option>
                                        <option value="Laguna">Laguna</option>
                                        <option value="Las Pinas">Las Pinas</option>
                                        <option value="Manila">Manila</option>
                                        <option value="Palawan">Palawan</option>
                                        <option value="Pampanga">Pampanga</option>
                                        <option value="Paranaque">Paranaque</option>
                                        <option value="Pasay">Pasay</option>
                                        <option value="Pasig">Pasig</option>
                                        <option value="Quezon City">Quezon City</option>
                                        <option value="Rizal">Rizal</option>
                                        <option value="Tagaytay">Tagaytay</option>
                                        <option value="Taguig">Taguig</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Hotel Brand</div>
                                    <select name="brand" id="" class="form-control">
                                        <option value="Belmont Hotels">Belmont Hotels</option>
                                        <option value="Richmonde Hotels">Richmonde Hotels</option>
                                        <option value="Savoy Hotels">Savoy Hotels</option>
                                        <option value="Other Homegrown Brands">Other Homegrown Brands</option>
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
                                <button type="submit" class="btn btn-primary">Save Hotel</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

            <!-- Update Modal -->
            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-bs-labelledby="editModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLongTitle">Update Hotel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Hotel</div>
                                    <input type="text" class="form-control" id="updateName" name="updateName" value="{{ $bed->name }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Location</div>
                                    <select name="updateLocation" id="updateLocation" class="form-control">
                                        <option value="Bacolod" {{ $bed->location == 'Bacolod' ? 'selected' : '' }}>Bacolod</option>
                                        <option value="Batangas" {{ $bed->location == 'Batangas' ? 'selected' : '' }}>Batangas</option>
                                        <option value="Boracay" {{ $bed->location == 'Boracay' ? 'selected' : '' }}>Boracay</option>
                                        <option value="Bulacan" {{ $bed->location == 'Bulacan' ? 'selected' : '' }}>Bulacan</option>
                                        <option value="Cavite" {{ $bed->location == 'Cavite' ? 'selected' : '' }}>Cavite</option>
                                        <option value="Cebu" {{ $bed->location == 'Cebu' ? 'selected' : '' }}>Cebu</option>
                                        <option value="Davao" {{ $bed->location == 'Davao' ? 'selected' : '' }}>Davao</option>
                                        <option value="Iloilo" {{ $bed->location == 'Iloilo' ? 'selected' : '' }}>Iloilo</option>
                                        <option value="Laguna" {{ $bed->location == 'Laguna' ? 'selected' : '' }}>Laguna</option>
                                        <option value="Las Pinas" {{ $bed->location == 'Las Pinas' ? 'selected' : '' }}>Las Pinas</option>
                                        <option value="Manila" {{ $bed->location == 'Manila' ? 'selected' : '' }}>Manila</option>
                                        <option value="Palawan" {{ $bed->location == 'Palawan' ? 'selected' : '' }}>Palawan</option>
                                        <option value="Pampanga" {{ $bed->location == 'Pampanga' ? 'selected' : '' }}>Pampanga</option>
                                        <option value="Paranaque" {{ $bed->location == 'Paranaque' ? 'selected' : '' }}>Paranaque</option>
                                        <option value="Pasay" {{ $bed->location == 'Pasay' ? 'selected' : '' }}>Pasay</option>
                                        <option value="Pasig" {{ $bed->location == 'Pasig' ? 'selected' : '' }}>Pasig</option>
                                        <option value="Quezon City" {{ $bed->location == 'Quezon City' ? 'selected' : '' }}>Quezon City</option>
                                        <option value="Rizal" {{ $bed->location == 'Rizal' ? 'selected' : '' }}>Rizal</option>
                                        <option value="Taguig" {{ $bed->location == 'Taguig' ? 'selected' : '' }}>Taguig</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Hotel Brand</div>
                                    <select name="updateBrand" id="updateBrand" class="form-control">

                                        <option value="Belmont Hotels" {{ $bed->hotel_brand == 'Belmont Hotels' ? 'selected' : '' }}>Belmont Hotels</option>
                                        <option value="Richmonde Hotels" {{ $bed->hotel_brand == 'Richmonde Hotels' ? 'selected' : '' }}>Richmonde Hotels</option>
                                        <option value="Savoy Hotels" {{ $bed->hotel_brand == 'Savoy Hotels' ? 'selected' : '' }}>Savoy Hotels</option>
                                        <option value="Other Homegrown Brands" {{ $bed->hotel_brand == 'Other Homegrown Brands' ? 'selected' : '' }}>Other Homegrown Brands</option>

                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="label mb-2">Image</label>
                                    <!-- <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" class="form-control"> -->
                                    <input type="file" class="form-control" id="updateImage" name="updateImage">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update Township</button>
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