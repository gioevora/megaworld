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
                                <h6 class="text-white text-capitalize ps-3 m-0">ADD PROPERTIES</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <form action="/Admin/Add/for_sale_properties" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row px-4">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Properties Name</label>
                                            <input type="text" name="properties_name" class="form-control" placeholder="Megaworld Hotel...">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Location</label>
                                            <input type="text" name="location" class="form-control" placeholder="Makati City...">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="type" id="" class="form-control">
                                                <option value="Pre-Selling">Pre-Selling</option>
                                                <option value="RFO">Ready for Occupancy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Turn Over Year</label>
                                            <input type="text" name="TOY" class="form-control" placeholder="Tower A - July 31, 2024">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Number of Units</label>
                                            <input type="text" name="units" class="form-control" placeholder="1,432..">

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Square meters</label>
                                            <input type="text" name="meter" class="form-control" placeholder="7, 737">

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5" placeholder="add something about the properties.."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group" style="display: flex; flex-direction: column; align-items: center;">
                                            <label for="image">Properties Image</label>
                                            <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" class="form-control">
                                            <div style="display: flex; justify-content: center; align-items: center; max-width: 100%; max-height: 200px; margin-top: 10px;">
                                                <img id="imagePreview" src="" alt="Preview" style="max-width: 100%; max-height: 200px; display: none;">
                                            </div>
                                        </div>

                                    </div>
                                   
                                    <div class="col-md-3 mb-4">
                                        <button class="btn btn-primary form-control">Cancel</button>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <button type="submit" class="btn btn-success form-control">Save Properties</button>
                                    </div>


                                </div>
                            </form>
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
    @else
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif



    @include('admin.Extend.end')

</body>

</html>