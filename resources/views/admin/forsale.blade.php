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
                                <h6 class="text-white text-capitalize ps-3 m-0">FOR SALE</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                    Add Properties
                                </button>

                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Properties</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($township as $town)
                                        <tr data-residence-id="{{ $town->id }}" data-residence-name="{{ $town->name }}" data-residence-location="{{ $town->location }}" data-residence-status="{{ $town->status }}" data-residence-description="{{ $town->description }}">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{asset('/storage/township_images/' . $town->image) }}" alt="Township Image" style="max-width: 60px; max-height: 60px;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm mx-4">{{$town->properties_name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$town->location}}</p>
                                            </td>


                                            <td>

                                                <span class="badge <?php echo $town->type === 'Pre-Selling' ? 'bg-primary' : 'bg-secondary'; ?> text-white">
                                                    {{$town->type}}
                                                </span>
                                            </td>
                                            <td class="d-flex flex-row justify-content-center">

                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#amenitiesModal" style="margin-right: 10px; background-color: #202A54">
                                                    <i class="fa-solid fa-house-circle-check text-white"></i>
                                                </button>
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #EBF8A4">
                                                    <i class="fa-solid fa-list-check"></i>
                                                </button>
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <form action="{{ route('residence.delete', ['id' => $town->id]) }}" method="post" id="deleteForm">
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


            <!--Aminities Modal  -->
            <div class="modal fade" id="amenitiesModal" tabindex="-1" role="dialog" aria-labelledby="amenitiesModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="amenitiesModal">Add Aminities</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">In Door</label>

                                            @foreach($amenity as $amen)
                                            @if($amen->category == 'indoor')
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenity[]" value="{{$amen->id}}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{$amen->aminities_name}}
                                                </label>
                                            </div>
                                            @endif
                                            @endforeach

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Out Door</label>
                                          
                                            @foreach($amenity as $amen)
                                          
                                            @if($amen->category == 'outdoor')
                                            <div class="form-check">
                                               
                                                <input class="form-check-input" name="amenity[]" type="checkbox" value="{{$amen->id}}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{$amen->aminities_name}}
                                                </label>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>

                                    </div>
                                   
                                    <input type="text" class="form-control" id="sale_id" name="sale_id" value="{{ isset($town) && $town->id !== null ? $town->id : 'Default Value' }}" required>
                                  
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Aminities</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- Aminities Modal ends here -->

            <!-- Add Township Modal -->
            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Properties</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Admin/Add/for_sale_properties" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Properties</div>
                                    <input type="text" class="form-control" name="properties_name" placeholder="Megaworld ..">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Location</div>
                                    <input type="text" class="form-control" id="" name="location" placeholder="Makati City...">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Description</div>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Status</div>
                                    <select name="type" id="" class="form-control">
                                        <option value="Pre-Selling">Pre-Selling</option>
                                        <option value="RFO">Ready for Occupancy</option>
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
                                <button type="submit" class="btn btn-primary">Save Properties</button>
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
                            <h5 class="modal-title" id="editModalLongTitle">Update Residences</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Name of Residences</div>
                                    <input type="text" class="form-control" id="updateName" name="updateName" value="{{ isset($town) && $town->name !== null ? $town->name : 'Default Value' }}" required>

                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Status</div>
                                    <select name="updateStatus" id="updateStatus" class="form-control">
                                        <option value="Pre-Selling" {{ (isset($town) && $town->status == 'Pre-Selling') ? 'selected' : '' }}>Pre-Selling</option>
                                        <option value="rfo" {{ (isset($town) && $town->status == 'rfo') ? 'selected' : '' }}>Ready for Occupancy</option>
                                    </select>


                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Description</div>
                                    <textarea name="updateDescription" id="updateDescription" cols="30" rows="4" value="{{ isset($town) && $town->description !== null ? $town->description : 'Default Value' }}" required></textarea>
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
                var residenceId = button.closest('tr').data('residence-id');
                var residenceName = button.closest('tr').data('residence-name');
                var residenceLocation = button.closest('tr').data('residence-location');
                var residenceStatus = button.closest('tr').data('residence-status');
                var residenceDescription = button.closest('tr').data('residence-description');

                var modal = $(this);
                modal.find('#updateName').val(residenceName);
                modal.find('#updateLocation').val(residenceLocation);
                modal.find('#updateStatus').val(residenceStatus);
                modal.find('#updateDescription').val(residenceDescription);

                // Set the form action dynamically
                var updateUrl = "{{ route('update.residences', ':id') }}".replace(':id', residenceId);
                modal.find('form').attr('action', updateUrl);
            });
        });

        $(document).ready(function(){
            $('#amenitiesModal').on('show.bs.modal', function(event){
                var button = $(event.relatedTarget);
                // var residenceId = button.closest('tr').data('residence-id');
                var tr = button.parents()
                tr = tr[1]
                var residenceId = $(tr).data('residence-id')
                console.log(residenceId)

                var modal = $(this);
                modal.find('#sale_id').val(residenceId);

                var updateUrl = "{{ route('add.amenity') }}".replace(':id', residenceId);
                modal.find('form').attr('action', updateUrl);
            })
        });

        function confirmDelete() {
            if (confirm('Are you sure you want to delete this township?')) {
                // Submit the form if the user confirms
                document.getElementById('deleteForm').submit();

                // Show Toastr notification
                toastr.success('Township deleted successfully');
            }
        }
    </script>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


    @include('admin.Extend.end')

</body>

</html>