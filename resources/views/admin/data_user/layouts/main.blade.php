<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT HELPDESK</title>

    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" />

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144808195-1');
    </script>
    <!-- others css -->

    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <style type="text/css">
        .tebal {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- page container area start -->
    <div class="page-container">
        @include('admin.sidebars')
        @include('admin.header')
        <div class="main-content-inner">
            @yield('container')
        </div>
    </div>

    <!-- page container area end -->
    @yield('footer')

    <!-- modal input -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data User Baru</h4>
                </div>

                <form method="post" enctype="multipart/form-data" action="/KelolaUser/create">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Instansi</label>
                            <select class="form-control form-control-lg" name="perangkat_id" id="perangkat_id" required>
                                <option value="" selected>--Pilih Instansi--</option>
                                @foreach ($perangkat as $perangkat)
                                    <option value="{{ $perangkat->id }}">{{ $perangkat->instansi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Admin</label>
                            <input name="nama_admin" type="text" class="form-control" id="nama_admin"
                                placeholder="Nama Admin">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input name="nip" type="text" class="form-control" id="nip"
                                placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <br>
                            <label>Level</label><br>
                            <input type="radio" id="level" name="level" value=" Admin">
                            <label for="admin">Admin</label><br>
                            <input type="radio" id="level" name="level" value=" User">
                            <label for="user">User</label><br>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password"
                                id="password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div id="ModalEdit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Akun User</h4>
                </div>
                <form enctype="multipart/form-data" action="/KelolaUser/update/{{ $user->id }}" method="post">

                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="id" type="hidden" class="form-control" id="id"
                                value="">
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input name="instansi" type="text" class="form-control tebal" id="instansi"
                                value="" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Admin</label>
                            <input name="nama_admin" type="text" class="form-control" id="nama_admin"
                                value="">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input name="nip" type="text" class="form-control" id="nip"
                                value="">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="leveldb" id="leveldb"
                                value="{{ $us->level }}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <br>
                            <label>Level</label><br>
                            <input type="radio" id="level1" name="level" value=" Admin">
                            <label for="level1">Admin</label><br>
                            <input type="radio" id="level2" name="level" value=" User">
                            <label for="level2">User</label><br>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                value="">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input name="new_password" type="password" class="form-control" placeholder="Password"
                                id="new_password">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input name="confirm_password" type="password" class="form-control" placeholder="Konfirmasi Password"
                                id="confirm_password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('input').on('keydown', function(event) {
                if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event
                        .shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
                    var $t = $(this);
                    event.preventDefault();
                    var char = String.fromCharCode(event.keyCode);
                    $t.val(char + $t.val().slice(this.selectionEnd));
                    this.setSelectionRange(1, 1);
                }
            });
        });


        $(document).ready(function() {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>

    <!-- jquery latest version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js')}}"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js')}}"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ asset('assets/js/line-chart.js') }}"></script>
    <!-- all pie chart -->
    <script src="{{ asset('assets/js/pie-chart.js') }}"></script>
    <!-- others plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
        $('#ModalEdit').on('show.bs.modal', function(event) {

            console.log('Modal Open');
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var instansi = button.data('instansi')
            var nama_admin = button.data('nama_admin')
            var nip = button.data('nip')
            var level = button.data('level')
            var username = button.data('username')

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #instansi').val(instansi);
            modal.find('.modal-body #nama_admin').val(nama_admin);
            modal.find('.modal-body #nip').val(nip);
            modal.find('.modal-body #level').val(level);
            modal.find('.modal-body #username').val(username);
        })
    </script>
    <script>
        $(document).ready(function() {
            if ($("input[id='leveldb']").val() == "Admin") {
                $("input[id=level1]").prop('checked', true)
            } else if ($("input[id='leveldb']").val() == "User") {
                $("input[id=level2]").prop('checked', true)
            }
        });
    </script>
</body>

</html>
