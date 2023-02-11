<?php
  require_once '../admin/config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['user']);

  if (isset($_GET['course'])) {
    $name = $_GET['course'];

    $name1 = str_replace('-', ' ', $name);
    $name = str_replace("/", "&apos;", $name1);

    // $get_course = getSingleCourse("$name");
	$sql = "SELECT * FROM courses WHERE course_name = '$name'";
	$query = mysqli_query($link, $sql);

	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		extract($row);
	} else {
		return false;
	}
}

?>
<?php require_once 'inc/header.php'; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="header-title m-t-0 m-b-20">Learn [<?= $course_name; ?>]</h4>
                </div>
            </div>


            <div class="row text-center">

                <?php 
                    $lessons = getCourseLesson($course_id);
                    if (!empty($lessons)) {
                        foreach ($lessons as $lesson) {
                            extract($lesson); ?>
                
                <div class="col-lg-4 mb-2">
                    <video style="width: inherit; height: 200px" controls src="../lesson_videos/<?= $video; ?>" controlsList="nodownload" title="Lesson player">
                    </video>
                </div>

                <!-- <iframe class="col-lg-4 mb-2" src="../lesson_videos/<?= $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                
                    <?php } } else { ?>
                        <div class="row">
                            <h2 class="col-12">No Lesson Yet!</h2>
                            <a href="">Contact Gentlecrypto</a>
                        </div>
                        <?php } ?>
            </div>
            <!-- end row -->


        </div> <!-- container -->


        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                "bDestroy": true;
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

        </script>

        <script>
            document.addEventListener('contextmenu', (e) => {
                e.preventDefault()
                alert('we are deeply sorry! But cannot right click on this page.')
            })
        </script>


        <?php require_once 'inc/footer.php'; ?>