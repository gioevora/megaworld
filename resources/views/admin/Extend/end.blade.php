 <!--   Core JS Files   -->
 <script src="{{asset('asset/js/core/popper.min.js')}}"></script>
 
 <script src="{{asset('asset/js/plugins/perfect-scrollbar.min.js')}}"></script>
 <script src="{{asset('asset/js/plugins/smooth-scrollbar.min.js')}}"></script>
 <script src="{{asset('asset/js/plugins/chartjs.min.js')}}"></script>

 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script>
     $(document).ready(function() {
         $('#dataTable').DataTable();
     });
 </script>
 <!-- <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script> -->

 <script>
     function previewImage(event) {
         var input = event.target;
         var preview = document.getElementById('imagePreview');

         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function(e) {
                 preview.src = e.target.result;
                 preview.style.display = 'block';
             };

             reader.readAsDataURL(input.files[0]);
         } else {
             preview.src = "";
             preview.style.display = 'none';
         }
     }
 </script>