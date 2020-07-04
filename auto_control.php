<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createTable(); ?>

<?php include "includes/header.php"; ?>

<div class="float-left" style="display: table;
    border: 20px solid white; 
    display: block; margin-top: 50px;
    margin-left: 200px;
    margin-bottom:50px;
    margin-right: auto; width: 40%;">
    <section>
        <img src="https://s-m.com.sa/images/logo.png" alt="no image" />
        <h1 class=" font-weight-bold w-auto p-3 mb-4 bg-white text-dark"> Auto Panel</h1>
    </section>

    <section>

        <div class="middle">
            <div class="container h-100">
                <div class="row">
                    <div class="col-md-12">
                        <form action="auto_control.php" method="post">
                            <!-- button Go-left -->
                            <div class="d-flex justify-content-start mt-6 p-2 input-group">
                                <button type="submit" name="left"
                                    class="btn btn-primary btn btn-outline-success input-group-prepend"
                                    style="font-size: 24px; color: black;">
                                    <i class="fa fa-arrow-left"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1" name="left">
                            </div>


                            <!-- button Go-Forward -->
                            <div class="d-flex justify-content-start mt-6 p-2 input-group ">

                                <button type="submit" name="forward" class=" btn btn-primary btn btn-outline-success
                                input-group-prepend" style="font-size: 24px; color: black;">
                                    <i class="fa fa-arrow-up"></i>

                                </button>
                                <input type="text" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1" name="forward">

                            </div>


                            <!-- Go-right -->
                            <div class="d-flex justify-content-start mt-6 p-2 input-group">
                                <button type="submit"
                                    class="btn btn-primary btn btn-outline-success input-group-prepend "
                                    style="font-size: 24px; color: black;">
                                    <i class=" fa fa-arrow-right"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1" name="right">
                            </div>

                            <div class="d-flex justify-content-around mt-6 p-2 input-group">
                                <button name="submit" type="submit" class="btn btn-dark btn  input-group-prepend "
                                    style="font-size: 24px; color: white ;">
                                    <i class="fa fa-save"></i>
                                </button>
                                <button name="delete" type="submit" class="btn btn-danger btn  input-group-prepend "
                                    style="font-size: 24px; color: black;">
                                    <?php deleteRows() ?>
                                    <i class=" fa fa-trash "></i>

                                </button>
                                <button name="start" type="submit" class="btn btn-success btn  input-group-prepend "
                                    style="font-size: 24px; color: black;">
                                    <i class="fa fa-hourglass-start"></i>
                                </button>



                            </div>

                    </div>
                </div>


            </div>
            <table class="table table-striped text-white">
                <thead>
                    <tr>



                        <th scope="col">left</th>
                        <th scope="col">Forward</th>
                        <th scope="col">right</th>

                    </tr>
                </thead>
                <tbody>


                    <?php ShowDate() ?>




                </tbody>
            </table>
        </div>



        </form>






</div>
</section>
<section style="display: table;
    border: 20px solid white; 
    display: block; margin-top: 50px;
    margin-left: 30px;
    margin-bottom:100px;
    margin-right: 30px; width: 40%;" class="float-right">
    <h1 class="  font-weight-bold w-auto p-3 mb-4 bg-white text-dark"> map </h1>
    <?php map() ?>
</section>

<?php include "includes/footer.php"; ?>