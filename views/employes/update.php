<div class="card">
    <div class="card-header">
        Update employee
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="id" class="form-label">ID:</label></label>
              <input type="text" value="<?php echo $employed->id;?>"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" value="<?php echo $employed->name;?>" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Employee Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email"value="<?php echo $employed->email;?>" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Employee Email">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="number" value="<?php echo $employed->status;?>"class="form-control" name="status" id="status" aria-describedby="emailHelpId" placeholder="Employee Status">
            </div>
            <input class="btn btn-success" type="submit" value="Add Employed">
            <a href="?controller=employesController&action=home" class="btn btn-primary">Cancel</a>
        </form>
    </div>
</div>