
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Task All</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    {{--
        ************************************
        ************************************ 
        **Task 1: Class Inheritance** 
     
     ************************************
     ************************************
        --}}

    <div class="ml-5">
        <h1>**Task 1: Class Inheritance** </h1>
        @php
        class Rectangle {
            private $length;
            private $width;

            public function __construct($length, $width) {
                $this->length = $length;
                $this->width = $width;
            }

            public function getArea() {
                return $this->length * $this->width;
            }

            public function getPerimeter() {
                return 2 * ($this->length + $this->width);
            }
        }

            $rectangle = new Rectangle(12, 9);
            echo "Area: " . $rectangle->getArea() . "</br>";
            echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";
        @endphp

    </div>
    {{--
        ************************************
        ************************************ 
        **Task 1: END** 
     
     ************************************
     ************************************
        --}}
    {{--
        ************************************
        ************************************ 
       **Task 2: Interface Implementation**
     
     ************************************
     ************************************
        --}}

        <div class="ml-5">
            <h1>**Task 2: Interface Implementation**</h1>
            <h5>Incomplete ! </h5>
    
        </div>
        {{--
            ************************************
            ************************************ 
            **Task 2: END** 
         
         ************************************
         ************************************
            --}}
    {{--
        ************************************
        ************************************ 
      **Task 3: Encapsulation**
     
     ************************************
     ************************************
        --}}

        <div class="ml-5">
            <h1>**Task 3: Encapsulation***</h1>
           @php
           
            class Car {
                private $brand;
                private $model;
                private $year;

                public function __construct($brand, $model, $year) {
                    $this->brand = $brand;
                    $this->model = $model;
                    $this->year = $year;
                }

                public function getBrand() {
                    return $this->brand;
                }

                public function getModel() {
                    return $this->model;
                }

                public function getYear() {
                    return $this->year;
                }

                public function setYear($year) {
                    $this->year = $year;
                }
            }

        $car = new Car("Toyota", "Camry", 2020);

        echo "<pre>";
        echo "Brand: " . $car->getBrand() . "\n";
        echo "Model: " . $car->getModel() . "\n";
        echo "Year: " . $car->getYear() . "\n";


        echo "\n"."Updated Year: " . Date('Y');
    @endphp

    
        </div>
        {{--
            ************************************
            ************************************ 
            **Task 3: END** 
         
         ************************************
         ************************************
            --}}
    {{--
        ************************************
        ************************************ 
     **Task 4: Polymorphism**
     
     ************************************
     ************************************
        --}}

        <div class="ml-5">
            <h1>**Task 4: Polymorphism**</h1>
           @php
             class student {
                protected function name(){
                    echo "My Name Is ALMAMOON.";
                }
             }

             class student2 extends student{
                public function name2(){
                    return $this->name();
                }
             }
             $new = new student2();
             $new->name2();
           @endphp
        </div>
        {{--
            ************************************
            ************************************ 
            **Task 4: END** 
         
         ************************************
         ************************************
            --}}
    {{--
        ************************************
        ************************************ 
    Task 5: To-Do Module** (Mandatory)
     
     ************************************
     ************************************
        --}}

        <div class="ml-5">
            <h1>Task 5: To-Do Module** (Mandatory)</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <button class="btn-sm btn btn-success"><a class="text-white mb-5" href="{{ route('employe.index') }}">Click An</a></button>
                    </div>
                </div>
            </div>
        </div>
        {{--
            ************************************
            ************************************ 
            **Task 5: END** 
         
         ************************************
         ************************************
            --}}

            

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">ALO ALO</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js')}}"></script>
</body>
</html>
