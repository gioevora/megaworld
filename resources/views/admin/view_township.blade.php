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
                                <h6 class="text-white text-capitalize ps-3 m-0">Township List</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                    Add Township
                                </button>


                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Township</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Division</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($township as $town)
                                        <tr data-township-id="{{ $town->id }}" data-township-name="{{ $town->name }}" data-township-location="{{ $town->location }}" data-township-division="{{ $town->division }}" data-township-type="{{ $town->type }}" data-township-image="{{ $town->image }}">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{asset('/storage/township_images/' . $town->image) }}" alt="Township Image" style="max-width: 60px; max-height: 60px;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm mx-4">{{$town->name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$town->location}}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$town->division}}</p>
                                            </td>

                                            <td class="align-middle" style="display: flex;">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                                    <i class="fa-solid fa-pen-to-square "></i>
                                                </button>
                                                <form action="{{ route('township.delete', ['id' => $town->id]) }}" method="post" id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="confirmDelete()"> <i class="fa-solid fa-trash"></i></button>
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
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-bs-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add New Township</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="/Admin/Add/Township" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Township</div>
                                    <input type="text" class="form-control" name="name" placeholder="Megaworld Township..">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Division</div>
                                    <select name="division" id="" class="form-control">
                                        <option value="Metro Manila">Metro Manila</option>
                                        <option value="Luzon">Luzon</option>
                                        <option value="Visayas">Visayas</option>
                                        <option value="Mindanao">Mindanao</option>
                                    </select>
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
                                        <option value="Taguig">Taguig</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Type</div>
                                    <select name="type" id="" class="form-control">
                                        <option value="Township">Township</option>
                                        <option value="">Integrated Lifestyle Community</option>
                                        <option value="">Other Projects</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="label mb-2">Image</label>
                                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" class="form-control">
                                    <img id="imagePreview" src="" alt="Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Township</button>
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
                            <h5 class="modal-title" id="editModalLongTitle">Update Township</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Township</div>
                                    <input type="text" class="form-control" id="updateName" name="updateName" value="{{ $town->name }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Division</div>
                                    <select name="updateDivision" id="updateDivision" class="form-control">
                                        <option value="Metro Manila" {{ $town->division == 'Metro Manila' ? 'selected' : '' }}>Metro Manila</option>
                                        <option value="Luzon" {{ $town->division == 'Luzon' ? 'selected' : '' }}>Luzon</option>
                                        <option value="Visayas" {{ $town->division == 'Visayas' ? 'selected' : '' }}>Visayas</option>
                                        <option value="Mindanao" {{ $town->division == 'Mindanao' ? 'selected' : '' }}>Mindanao</option>
                                    </select>
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Location</div>
                                    <select name="updateLocation" id="updateLocation" class="form-control">
                                        <option value="Bacolod" {{ $town->location == 'Bacolod' ? 'selected' : '' }}>Bacolod</option>
                                        <option value="Batangas" {{ $town->location == 'Batangas' ? 'selected' : '' }}>Batangas</option>
                                        <option value="Boracay" {{ $town->location == 'Boracay' ? 'selected' : '' }}>Boracay</option>
                                        <option value="Bulacan" {{ $town->location == 'Bulacan' ? 'selected' : '' }}>Bulacan</option>
                                        <option value="Cavite" {{ $town->location == 'Cavite' ? 'selected' : '' }}>Cavite</option>
                                        <option value="Cebu" {{ $town->location == 'Cebu' ? 'selected' : '' }}>Cebu</option>
                                        <option value="Davao" {{ $town->location == 'Davao' ? 'selected' : '' }}>Davao</option>
                                        <option value="Iloilo" {{ $town->location == 'Iloilo' ? 'selected' : '' }}>Iloilo</option>
                                        <option value="Laguna" {{ $town->location == 'Laguna' ? 'selected' : '' }}>Laguna</option>
                                        <option value="Las Pinas" {{ $town->location == 'Las Pinas' ? 'selected' : '' }}>Las Pinas</option>
                                        <option value="Manila" {{ $town->location == 'Manila' ? 'selected' : '' }}>Manila</option>
                                        <option value="Palawan" {{ $town->location == 'Palawan' ? 'selected' : '' }}>Palawan</option>
                                        <option value="Pampanga" {{ $town->location == 'Pampanga' ? 'selected' : '' }}>Pampanga</option>
                                        <option value="Paranaque" {{ $town->location == 'Paranaque' ? 'selected' : '' }}>Paranaque</option>
                                        <option value="Pasay" {{ $town->location == 'Pasay' ? 'selected' : '' }}>Pasay</option>
                                        <option value="Pasig" {{ $town->location == 'Pasig' ? 'selected' : '' }}>Pasig</option>
                                        <option value="Quezon City" {{ $town->location == 'Quezon City' ? 'selected' : '' }}>Quezon City</option>
                                        <option value="Rizal" {{ $town->location == 'Rizal' ? 'selected' : '' }}>Rizal</option>
                                        <option value="Taguig" {{ $town->location == 'Taguig' ? 'selected' : '' }}>Taguig</option>
                                    </select>
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Type</div>
                                    <select name="updateType" id="updateType" class="form-control">
                                        <option value="Township" {{ $town->type == 'Township' ? 'selected' : '' }}>Township</option>
                                        <option value="Integrated Lifestyle Community" {{ $town->type == 'Integrated Lifestyle Community' ? 'selected' : '' }}>Integrated Lifestyle Community</option>
                                        <option value="Other Projects" {{ $town->type == 'Other Projects' ? 'selected' : '' }}>Other Projects</option>
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


            <!-- Footer -->
            @include('admin.Extend.footer')

        </div>
    </main>


    <script>
        $(document).ready(function() {
            $('#editModalCenter').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var townshipId = button.closest('tr').data('township-id');
                var townshipName = button.closest('tr').data('township-name');
                var townshipLocation = button.closest('tr').data('township-location');
                var townshipDivision = button.closest('tr').data('township-division');
                var townshipType = button.closest('tr').data('township-type');

                var modal = $(this);
                modal.find('#updateName').val(townshipName);
                modal.find('#updateLocation').val(townshipLocation);
                modal.find('#updateDivision').val(townshipDivision);
                modal.find('#updateType').val(townshipType);


                // Set the form action dynamically
                var updateUrl = "{{ route('update.township', ':id') }}".replace(':id', townshipId);
                modal.find('form').attr('action', updateUrl);

            });
        });
    </script>

    <script>
        function confirmDelete() {
            if (confirm('Are you sure you want to delete this township?')) {
                // Submit the form if the user confirms
                form.submit();
            }
        }

    </script>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif



    @include('admin.Extend.end')

</body>

</html>