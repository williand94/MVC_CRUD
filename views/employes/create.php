<div class="card">
    <div class="card-header">
        Add employed
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text"
                class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Employed Name">
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Employed Email">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="number" class="form-control" name="status" id="status" aria-describedby="emailHelpId" placeholder="Employed Email">
              </div>
              <input  class="btn btn-success" type="submit" value="Add Employed">  
              <a href="?controller=employesController&action=home" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>
</div>