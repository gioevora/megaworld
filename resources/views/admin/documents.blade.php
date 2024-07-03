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
                                <h6 class="text-white text-capitalize ps-3 m-0">Corporate Governance Documents</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-right: 10px; background-color: #f6d200">
                                    Add Documents
                                </button>
                            </div>

                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DOCUMENTS</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Section</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($corporate as $docs)
                                        <tr data-doc-id="{{$docs->id}}" data-doc-file_names="{{$docs->files_name}}" data-doc-name="{{$docs->name}}" data-doc-section="{{$docs->section}}">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{asset('img/pdf-svgrepo-com.svg')}}" alt="Township Image" style="max-width: 30px; max-height: 30px;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm mx-4">{{$docs->files_name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$docs->section}}</p>

                                            </td>
                                            <td class="align-middle" style="display: flex;">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModalCenter" style="margin-right: 10px; background-color: #f6d200; display: inline-block;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <form action="{{ route('docs.delete', ['id' => $docs->id]) }}" method="post" id="deleteForm">
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
                            <h5 class="modal-title" id="exampleModalLongTitle">New Corporate Governance Documents</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Admin/Add/Documents" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Documents</div>
                                    <input type="file" class="form-control" name="files_name" placeholder="Megaworld Township..">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="label mb-2">Files Name</div>
                                    <input type="text" class="form-control" name="name" placeholder="Megaworld Township..">
                                </div>


                                <div class="form-group mb-3">
                                    <div class="label mb-2">Section</div>
                                    <select name="section" id="" class="form-control">
                                        <option value="Manual on Corporate Governance">Manual on Corporate Governance</option>
                                        <option value="Integrated ACGR">Integrated ACGR</option>
                                        <option value="Annual Corporate Governance Report">Annual Corporate Governance Report</option>
                                        <option value="Board Committe Charter">Board Committe Charter</option>
                                        <option value="Article">Article</option>
                                        <option value="By-Laws">By-Laws</option>
                                        <option value="GIS">GIS</option>
                                        <option value="Information Statements">Information Statements</option>
                                        <option value="Statement of Changes ">Statement of Changes</option>
                                        <option value="Prospectus">Prospectus</option>
                                        <option value="Annual Report">Annual Report</option>
                                        <option value="Quarterly Report">Quarterly Report</option>
                                        <option value="Current Report">Current Report</option>
                                        <option value="Minutes of the Meeting">Minutes of the Meeting</option>
                                        <option value="Notice">Notice</option>
                                        <option value="PSE Clarification on News Articles">PSE Clarification on News Articles</option>
                                        <option value="Public Ownership Reports">Public Ownership Reports</option>
                                        <option value="Share Information">Share Information</option>
                                        <option value="Presentation">Presentation</option>

                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Documents</button>

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
                                    <div class="label mb-2">Name of Hotel</div>
                                    <input type="text" class="form-control" id="updateName" name="updateName" value="{{ $docs->name }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Location</div>
                                    <select name="updateSection" id="updateSection" class="form-control">

                                        <option value="Manual on Corporate Governance " {{ $docs->section == 'Manual on Corporate Governance' ? 'selected' : '' }}">Manual on Corporate Governance</option>
                                        <option value="Integrated ACGR" {{ $docs->section == 'Integrated ACGR' ? 'selected' : '' }}>Integrated ACGR</option>
                                        <option value="Annual Corporate Governance Report" {{ $docs->section == 'Annual Corporate Governance Report' ? 'selected' : '' }}>Annual Corporate Governance Report</option>
                                        <option value="Board Committe Charter" {{ $docs->section == 'Board Committe Charter' ? 'selected' : '' }}>Board Committe Charter</option>
                                        <option value="Article" {{ $docs->section == 'Article' ? 'selected' : '' }}>Article</option>
                                        <option value="By-Laws" {{ $docs->section == 'By-Laws' ? 'selected' : '' }}>By-Laws</option>
                                        <option value="GIS" {{ $docs->section == 'GIS' ? 'selected' : '' }}>GIS</option>
                                        <option value="Information Statements" {{ $docs->section == 'Information Statements' ? 'selected' : '' }}>Information Statements</option>
                                        <option value="Statement of Changes" {{ $docs->section == 'Statement of Changes' ? 'selected' : '' }}>Statement of Changes</option>
                                        <option value="Prospectus" {{ $docs->section == 'Prospectus' ? 'selected' : '' }}>Prospectus</option>
                                        <option value="Annual Report" {{ $docs->section == 'Annual Report' ? 'selected' : '' }}>Annual Report</option>
                                        <option value="Quarterly Report" {{ $docs->section == 'Quarterly Report' ? 'selected' : '' }}>Quarterly Report</option>
                                        <option value="Current Report" {{ $docs->section == 'Current Report' ? 'selected' : '' }}>Current Report</option>
                                        <option value="Minutes of the Meeting" {{ $docs->section == 'Minutes of the Meeting' ? 'selected' : '' }}>Minutes of the Meeting</option>
                                        <option value="Notice" {{ $docs->section == '' ? 'selected' : '' }}>Notice</option>
                                        <option value="PSE Clarification on News Articles" {{ $docs->section == 'PSE Clarification on News Articles' ? 'selected' : '' }}>PSE Clarification on News Articles</option>
                                        <option value="Public Ownership Reports" {{ $docs->section == 'Public Ownership Reports' ? 'selected' : '' }}>Public Ownership Reports</option>
                                        <option value="Share Information" {{ $docs->section == 'Share Information' ? 'selected' : '' }}>Share Information</option>
                                        <option value="Presentation" {{ $docs->section == 'Presentation' ? 'selected' : '' }}>Presentation</option>

                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="label mb-2">Documents</div>
                                    <input type="file" class="form-control" name="files_name" placeholder="Megaworld Township..">
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
                        var docId = button.closest('tr').data('doc-id');
                        var docName = button.closest('tr').data('doc-name');
                        var docSection = button.closest('tr').data('doc-section');


                        var modal = $(this);
                        modal.find('#updateName').val(docName);
                        modal.find('#updateSection').val(docSection);


                        // Set the form action dynamically
                        var updateUrl = "{{ route('update.docs', ':id') }}".replace(':id', docId);
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