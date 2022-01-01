<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controller=employesController&action=create" role="button">Add Employes </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes as $employed) : ?>
                    <tr>
                        <td><?php echo $employed->id;  ?></td>
                        <td><?php echo $employed->name; ?></td>
                        <td><?php echo $employed->email; ?></td>
                        <td><?php echo $employed->status; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a href="?controller=employesController&action=update&id=<?php echo $employed->id; ?>" class="btn btn-info">Update</a>
                                <a href="?controller=employesController&action=delete&id=<?php echo $employed->id; ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>