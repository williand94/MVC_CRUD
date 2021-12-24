<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
     <?php foreach ($show as $employed) :
        
            foreach ($employed as $key) {
                # code...
        ?>
            <tr>
                <td><?php echo $key['id'] ;  ?></td>
                <td><?php echo $key['name'] ;?></td>
                <td><?php echo $key['email'];?></td>
                <td>update | delete</td>
            </tr>
       <?php } endforeach;?>
    </tbody>
</table>
