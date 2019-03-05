<?php
include "includes\data.inc.php";
include "includes\lib.inc.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <?php include "includes\head.inc.php"; ?>
    <!-- END HEAD -->
    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">
        <!--========== HEADER ==========-->
        <?php include "includes\header.inc.php"; ?>
        <!--========== END HEADER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <h1><?php echo $header; ?></h1>
                <!-- Область основного контента -->
                <?php
                    switch($id){
                        case 'about':
                            include 'about.php';
                            break;
                        case 'table':
                            include 'table.php';
                            break;
                        case 'calc':
                            include 'calc.php';
                            break;
                        case 'contact':
                            include 'contact.php';
                            break;
                        default:
                            include 'index.inc.php';
                    }
                ?>
                <!-- Область основного контента -->
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!--========== END PAGE LAYOUT ==========-->

        <?php include 'includes\footer.inc.php'; ?>

    </body>
    <!-- END BODY -->
</html>