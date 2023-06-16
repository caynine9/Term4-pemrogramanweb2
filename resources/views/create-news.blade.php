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
                            <h6 class="m-0 font-weight-bold text-primary">Create News</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ url('store-news/') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="title" id="title"
                                            placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user"  id="content"
                                        placeholder="Content" name="content" required></textarea>
                                </div>
                                <div class="form-group">
                                        <select class="form-control-user"
                                            id="category_id" name="category_id" placeholder="Category" required>
                                            <option value="" disabled selected>Select a category</option>
                                            @foreach($categories as $category)
                                               <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Post
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