@include('admin.partials.head')

@include('admin.partials.sidebar')

@include('admin.partials.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <section class="content">
                    @yield('content')
                    </section>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin.partials.footer')