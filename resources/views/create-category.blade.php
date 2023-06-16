<!DOCTYPE html>
<html lang="en">

<head>

    <title>Tambahkan Berita</title>
    @include('components.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('components.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <center>
                    <div class="card shadow mb-4 col-lg-6">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Create Categories</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ url('store-categories/') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="name" id="name"
                                            placeholder="Category Name" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Create
                                </button>
                                <hr>
                            </form>
                        </div>
                    </div>    
                </center>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('components.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('components.modal-logout')

    <!-- Bootstrap core JavaScript-->
    @include('components.script')
</body>

</html>