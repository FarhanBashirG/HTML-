<?php include("layouts/header.php") ?>

<div class="container-fluid">
    <div class="row">
        <?php include('layouts/left-menu.php'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="pt-5 pb-5">Users List</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="" alt=""></th>
                                    <td>Mark</td>
                                    <td>Otto@m.com</td>
                                    <td>12121212121</td>
                                    <td>Male</td>
                                    <td>
                                        <a href="edit-book.php" class="btn btn-primary"> <i
                                                class="fa fa-pencil"></i></a>
                                        <a href="delete-book.php" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include("layouts/footer.php"); ?>