@include('Admin.inc.header source')
<div class="wrapper">
    @include('Admin.inc.adminHeader')
    <!-- Left side column. contains the logo and sidebar -->
    @include('Admin.inc.adminSideBar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section id="app"  class="content">
            <div style="max-width:800px;margin: 0 auto;padding:25px;background-color: #82cada">
                <div class="row">
                    <label> <strong style="font-size: 19px;">Name:</strong> {{$StudentProfile->name}}</label>
                    <label class="pull-right"><strong style="font-size: 19px;">Class:</strong> {{$StudentProfile->classname->semestername}} &nbsp;&nbsp;<strong style="font-size: 19px;">Roll:</strong> {{$StudentProfile->roll}} </label>
                </div>
            </div>
            <div  style="max-width:800px;margin: 0 auto;padding:25px;" class="bg-success">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Bangla:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">English:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Math:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Physics:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </section>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('Admin.inc.footersource')
</script>
</body>
</html>