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
                                <h6 class="text-white text-capitalize ps-3 m-0">List of Awards</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                    Add Awards
                                </button>
                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Awards</th>
                                           
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($award as $docs)
                                        <tr data-awards-id="{{$docs->id}}" data-awards-description="{{$docs->description}}" data-awards-type="{{$docs->type}}">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                         <img src="{{asset('/storage/township_images/' . $docs->image) }}" alt="Township Image" style="max-width: 50px; max-height: 50px;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm mx-4">{{$docs->description}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$docs->type}}</p>

                                            </td>
                                        
                    
                                            <td class="align-middle" style="display: flex; align-items: center; justify-content: center;">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #f6d200;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <form action="{{ route('awards.delete', ['id' => $docs->id]) }}" method="post" id="deleteForm">
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

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add New Board of Members</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Admin/Add/Awards" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                 <div class="form-group mb-3">
                                    <label for="image" class="label mb-2">Image</label>
                                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" class="form-control">
                                    <img id="imagePreview" src="" alt="Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Description</div>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Position</div>
                                    <select name="type" id="" class="form-control">
                                        <option value="">Awards</option>
                                        <option value="Best Awards">Best Awards</option>
                                        <option value="International Awards">International Awards</option>
                                        <option value="Philippines Awards">Philippines Awards</option>
                                        
                                    </select>
                                </div>
                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

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
                                    <div class="label mb-2">Description</div>
                                    <textarea name="updateDescription" id="updateDescription" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                              
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Position</div>
                                    <select name="updateType" id="updateType" class="form-control">
                                        <option value="">Awards</option>
                                        <option value="Best Awards"{{ $docs->type == 'Best Awards' ? 'selected' : '' }}>Best Awards</option>
                                        <option value="International Awards"{{ $docs->type == 'International Awards' ? 'selected' : '' }}>International Awards</option>
                                        <option value="Philippines Awards"{{ $docs->type == 'Philippines Awards' ? 'selected' : '' }}>Philippines Awards</option>
                                        
                                    </select>
                                </div>

                               


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update Documents</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#editModalCenter').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget);
                        var awardsId = button.closest('tr').data('awards-id');
                        var awardsDescription = button.closest('tr').data('awards-description');
                        var awardsType = button.closest('tr').data('awards-type');
                       


                        var modal = $(this);
                       
                        modal.find('#updateDescription').val(awardsDescription);
                        modal.find('#updateType').val(awardsType);


                        // Set the form action dynamically
                        var updateUrl = "{{ route('update.awards', ':id') }}".replace(':id', awardsId);
                        modal.find('form').attr('action', updateUrl);
                    });
                });

                function confirmDelete() {
                    if (confirm('Are you sure you want to delete this Documents?')) {
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