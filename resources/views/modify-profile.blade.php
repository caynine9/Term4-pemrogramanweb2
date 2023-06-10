<!DOCTYPE html>
<html lang="en">

<head>

    <title>Modify Profile</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Modify User</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ url('post-modify-profile/') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName"
                                            placeholder="Name" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"  id="exampleInputEmail"
                                        placeholder="Email Address" name="email" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save
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