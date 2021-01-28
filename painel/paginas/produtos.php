<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contato <small> - Página Contato</small></h1>            
                </div>
                <!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Contato</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">             
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>                                   

                                    <?php
                                    foreach ($dados as $dado) {
                                        ?>

                                        <tr>
                                            <td><?php echo $dado['id']; ?> </td>
                                            <td><?php echo $dado['nome']; ?> </td>
                                            <td><?php echo $dado['tipo']; ?> </td>
                                            <td><?php echo $dado['valor']; ?> </td>                                       
                                            <td>
                                                <a href="?pg=produtositens&id=<?php echo $dado ['id']; ?>" class="btn btn-outline-success"><span class="fa fa-eye"></span></a>
                                                <a href="#" class="btn btn-outline-warning"><span class="fa fa-edit"></span></a>
                                                <a href="#" class="btn btn-outline-danger"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                
            </div><!--/.container-fluid -->
        </section>
        <!--/.content -->
</div>
<!--/.content-wrapper -->
