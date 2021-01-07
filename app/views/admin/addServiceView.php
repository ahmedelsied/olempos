<div class="container">
    <form class="add-article" method="post" action="../../admin_hash_services/add" enctype="multipart/form-data">
        <div class="title-parent">
            <input name="title" class="form-control text-left" type="text" placeholder="Title In Arabic" required="required"/>
            <input name="titleGer" class="form-control text-left" type="text" placeholder="Title In Germany" required="required"/>
        </div>
        <div class="details-parent">
            <textarea name="details" class="form-control text-left details" placeholder="Details In Arabic" required="required"></textarea>
            <textarea name="detailsGer" class="form-control text-left details" placeholder="Details In Germany" required="required"></textarea>
        </div>
        <div class="images-article">
            <span class="custom-input btn btn-primary"><i class="fa fa-plus"></i>Add Image</span>
            <input class="images" type="file" name="images" accept="image/*"/>
        </div>
        <button class="btn btn-success pull-right" type="submit">Add<i class="fa fa-plus"></i></button>
    </form>
</div>