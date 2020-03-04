<div class="container m-5 col-md-8">

    <div class="mt-5">
        <div style="text-align:center;">
            <i class="far fa-images image_icon"></i>
        </div>
        <div style="color:white; text-align:center;">
            <span>Select images to upload</span>
        </div>
        <form action="uploadPage.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm m-4">
                <input type="file" class="form-control border-0" name="imageToUpload[]" multiple="">
            </div>
            <div class="col-md-12 m-3 " style=" text-align:center;">
                <input class="btn" type="submit" value="Upload Image" name="submit"
                    style="width:150px; background-color:#f77042; color:white; font-weight:bold">
            </div>
        </form>

    </div>
</div>