                <!-- Main content -->
                <section class="content">
                     <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Listagem de usuários</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Tipo Usuário</th>
                                            <th colspan="3">Categoria</th>
                                        </tr>
                                        <?php foreach ($usuarios as $usuario):?>
                                        <tr>
                                            <td><?=$usuario['nome']?></td>
                                            <td><?=$usuario['email']?></td>
                                            <td><?=$usuario['tipo_user']?></td>
                                            <td><a href="<?=URL?>usuarios/edit/<?=$usuario['id']?>" class="label label-primary">Editar</a></td>
                                            <td><a href="<?=URL?>usuarios/delete/<?=$usuario['id']?>" class="label label-danger delete">Deletar</a></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
<?php include 'application/views/elements/deletemodal.php';?>