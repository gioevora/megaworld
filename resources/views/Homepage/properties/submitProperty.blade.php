@include('Homepage.layout.header')
<!-- Header End -->



<!-- Rooms Section Begin -->
<section class="submitproperty-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="personal-info">
                    <form action="/Admin/Add/for_lease_properties" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="tab">
                            <h4 class="personal-title">Personal Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" oninput="this.className = ''" placeholder="Juan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" oninput="this.className = ''" placeholder="Dela Cruz">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" oninput="this.className = ''" placeholder="+63 992 440 1097">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" oninput="this.className = ''" placeholder="juan.delacruz@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" oninput="this.className = ''" placeholder="Makati City, Manila Philippines">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Personal Information</h4>
                            <hr>
                            <div class="col-md-12 ">
                                <div class="container container-file">
                                    <div class="drop_box">
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="fileID" style="display:none;">
                                        <label for="fileID" class="file-label">
                                            <i class='bx bx-image-add'></i>
                                            <header>
                                                <h4>Select File here</h4>
                                            </header>
                                            <p class="supported">Files Supported: image, png, jpg, jpeg</p>
                                            <img id="previewImage" src="#" alt="Preview" style="display:none; max-width: 100%; max-height: 200px;">
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Properties Information</h4>
                            <hr>
                            <div class="row px-4">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Properties Name</label>
                                        <input type="text" name="lease_name" oninput="this.className = ''" placeholder="Megaworld Hotel...">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Division</label>
                                        <select name="division" id="" oninput="this.className = ''">
                                            <option value="">Select Division</option>
                                            <option value="Metro Manila">Metro Manila</option>
                                            <option value="Luzon">Luzon</option>
                                            <option value="Visayas">Visayas</option>
                                            <option value="Mindanao">Mindanao</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input type="text" name="location" placeholder="Makati City..." oninput="this.className = ''">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="type" id="" oninput="this.className = ''">
                                            <option value="">Select Category</option>
                                            <option value="Residentials">Residentials</option>
                                            <option value="Commercials">Commercials</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Unit Price</label>
                                        <input type="text" name="unit_price" placeholder="00.00" oninput="this.className = ''">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Unit Type</label>
                                        <select name="unit_type" id="">
                                            <option value="">Select Bed Room</option>
                                            <option value="N/A"> N/A</option>
                                            <option value="1BR">1 Bed Room</option>
                                            <option value="2BR">2 Bed Room</option>
                                            <option value="3BR">3 Bed Room</option>
                                            <option value="4BR">4 Bed Room</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30" rows="5" placeholder="add something about the properties.." oninput="this.className = ''"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group" style="display: flex; flex-direction: column; align-items: center;">
                                        <label for="image">Properties Image</label>
                                        <input type="file" id="image" name="image[]" accept="image/*" onchange="previewImage(event)" class="form-control" oninput="this.className = ''" multiple>
                                        <div style="display: flex; justify-content: center; align-items: center; max-width: 100%; max-height: 200px; margin-top: 10px;">
                                            <img id="imagePreview" src="" alt="Preview" style="max-width: 100%; max-height: 200px; display: none;">
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="status" value="Pending">

                            </div>

                        </div>



                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                <button type="submit" id="submitBtn">Submit</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>


                    </form>

                </div>


            </div>

        </div>




    </div>
</section>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "inline";
            
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<script>
    const dropArea = document.querySelector(".drop_box");
    const input = dropArea.querySelector("input");
    const dragText = dropArea.querySelector("header h4");
    const supported = dropArea.querySelector(".supported");
    const bx = dropArea.querySelector(".bx");
    const previewImage = dropArea.querySelector("#previewImage");

    input.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                previewImage.style.display = 'block';
                dragText.style.display = 'none';
                supported.style.display = 'none';
                bx.style.display = 'none';
                previewImage.src = reader.result;
            }
            reader.readAsDataURL(file);
        } else {
            previewImage.style.display = 'none';
            dragText.style.display = 'block';
            supported.style.display = 'block';
        }
    });
</script>




@include('Homepage.layout.end')

</body>

</html>