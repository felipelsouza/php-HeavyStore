<div class="page-header">
    <h3>Add New Album</h3>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="well well-sm">
            <form action="server/newAlbum.php" method="post" class="form-horizontal" novalidate>
                <fieldset>
                    <legend class="text-center">Insert Album's info</legend>
                    <div class="form-group">
                        <label for="name" class="col-md-12 control-label">Name</label>
                        <div class="col-md-12">
                            <input class="form-control" id="albumName" 
                                type="text" 
                                name="albumName"   
                                placeholder="Ex: Paranoid"  
                                required
                            >
                        </div>

                        <label for="name" class="col-md-12 control-label">Band</label>
                        <div class="col-md-12">
                            <input class="form-control" id="band" 
                                type="text" 
                                name="band"   
                                placeholder="Ex: Black Sabbath"  
                                required
                            >
                        </div>

                        <div class="col-md-6">
                            <label for="name" class="control-label">Release Date</label>
                            <input class="form-control" id="releaseDate" 
                                type="text" 
                                name="releaseDate"  
                                placeholder="Ex: 18/09/1970" 
                                onfocus="(this.type='date')"
                                required
                            >
                        </div>
                        
                        <div class="col-md-6">
                            <label for="name" class="control-label">Price</label>
                            <input class="form-control" id="price" 
                                type="number" 
                                name="price"   
                                placeholder="Ex: 1,000.00"  
                                required
                            >
                        </div>

                        <div class="col-md-12 text-right btn-padding">
                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        </div>
                    </div>

                    <?php
                        $success = isset($_GET['success']);
                        if($success) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Success!</strong>
                            Album added to list.
                        </div>
                    <?php } ?>

                    <?php 
                        $error = isset($_GET['error']);
                        if($error) {    
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error!</strong>
                            Error while adding Album's info.
                        </div>
                    <?php } ?>

                </fieldset>
            </form>
        </div>
    </div>
</div>