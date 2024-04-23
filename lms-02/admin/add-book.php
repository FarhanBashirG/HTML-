<?php include("layouts/header.php") ?>

<div class="container-fluid">
    <div class="row">
        <?php include('layouts/left-menu.php'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="pt-5 pb-5 text-center">Add New Book</h2>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="">
                        <div class="form-group mb-4">
                            <label for=""><strong>Book Title</strong></label>
                            <input type="text" class="form-control" placeholder="Enter Title Here" name="book-title">
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Book Image</strong></label>
                            <input type="file" class="form-control" name="book-image">
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Book Author</strong></label>
                            <input type="text" class="form-control" name="book-author">
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Book Release Date</strong></label>
                            <input type="text" class="form-control" name="book-author" id="date-picker" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Book Description</strong></label>
                            <textarea name="description" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Floor</strong></label>
                            <input type="number" class="form-control" name="floor">
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Row</strong></label>
                            <input type="number" class="form-control" name="row">
                        </div>
                        <div class="form-group mb-4">
                            <label for=""><strong>Rack</strong></label>
                            <input type="number" class="form-control" name="rack">
                        </div>
                        <input type="submit" value="Add Book" class="btn btn-success btn-block col-md-3">
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include("layouts/footer.php"); ?>