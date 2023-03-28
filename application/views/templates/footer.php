<!-- Footer -->
<!--<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pustaka-Booking with Bootstrap SB Admin 2 <?= date('Y'); ?></span>
        </div>
    </div>
</footer>-->
<!-- End of Footer -->

<!--</div>-->
<!-- End of Content Wrapper -->

<!--</div>-->
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<!--<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>-->

<!-- Logout Modal-->
<!--<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika kamu yakin sudah selesai.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('autentifikasi/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>-->

<!-- Bootstrap core JavaScript-->
<!--<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<!-- Core plugin JavaScript-->
<!--<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for all pages-->
<!--<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/akses-role/'); ?>" + roleId;
            }
        });
    });
    $(document).ready(function() {
        $("#table-datatable").dataTable();
    });
    $('.alert-message').alert().delay(3500).slideUp('slow');
</script>

</body>


</html>-->

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="<?= base_url(); ?>assets/user/js/bootstrap.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
$('.alert').alert().delay(3000).slideUp('slow');
</script>
</body>

</html>