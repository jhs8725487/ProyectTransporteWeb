<script> src="https://code.jquery.com/jquery-3.6.0.min.js"</script>

<script src="<?php echo base_url(); ?>adminmart/assets/libs/jquery/dist/jquery-3.6.0.min.js"></script>
<?php
switch ($msg) {
    case '1':
?>
     
        <script>
            (function(){
                $(function(){
                    $('#insertarUsuario').modal()
                });
            }());
        </script>

<script>
        function miFuncion() {
          Swal.fire({
            icon: "error",
            title: 'OCURRIO ALGO!',
            text: 'NO SE PUEDE REGISTRAR AL USUARIO 2 VECES.',
            //timer: 2000,
            showClass: {
              popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
            }
          });
        }
        window.onload = miFuncion;
        history.pushState(null, "", "");
      </script>
      
<?php  
    break;
    case '0':
?>
  

<script>
        function miFuncion() {
          Swal.fire({
                icon: 'success',
                title: 'BIEN HECHO',
                text:   'REGISTRO EXITOSO.',
                showConfirmButton: true,
            //timer: 2000,
            showClass: {
              popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
            }
          });
        }
        window.onload = miFuncion;
        history.pushState(null, "", "");
      </script>

<?php

    break;
    default:
    break;
}
?>


<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center text-muted">
    All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
  
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="<?php echo base_url(); ?>adminmart/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url(); ?>adminmart/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url(); ?>adminmart/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="<?php echo base_url(); ?>adminmart/dist/js/app-style-switcher.js"></script>
<script src="<?php echo base_url(); ?>adminmart/dist/js/feather.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url(); ?>adminmart/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>adminmart/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<!-- themejs -->
<!--Menu sidebar -->
<script src="<?php echo base_url(); ?>adminmart/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url(); ?>adminmart/dist/js/custom.min.js"></script>
<!--This page plugins -->
<script src="<?php echo base_url(); ?>adminmart/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>adminmart/dist/js/pages/datatable/datatable-basic.init.js"></script>
<!-- This Page JS -->
<script src="<?php echo base_url(); ?>adminmart/assets/extra-libs/prism/prism.js"></script>
<!-- SWEETALERT -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
<!-- jQuery, Popper.js, Bootstrap JS 

<script src="<?php echo base_url(); ?>datatable/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>datatable/bootstrap/js/bootstrap.min.js"></script>-->

<!-- datatables JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>datatable/datatables/datatables.min.js"></script>

<!-- para usar botones en datatables JS -->
<script src="<?php echo base_url(); ?>datatable/datatables/Buttons-1.7.1/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>datatable/datatables/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>datatable/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>datatable/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>datatable/datatables/Buttons-1.7.1/js/buttons.html5.min.js"></script>

<!-- código JS propìo-->
<script type="text/javascript" src="<?php echo base_url(); ?>datatable/maindata.js"></script>

<!-- responsive -->
<script type="text/javascript" src="datatables/DataTables-1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>datatable/datatables/Responsive-2.2.9/js/dataTables.responsive.min.js"></script>
</body>

</html>