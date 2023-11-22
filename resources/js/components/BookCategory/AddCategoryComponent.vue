<template>
    <form action="" id="addCategory">
        <div class="form-group row">
            <div class="col-md-12">
                <label for="name" class="form-label">Name <span class="text text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" v-model="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="featured_image" class="form-label">Featured Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="featuredImage" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="featuredImageInput" class="form-control" type="text" name="featured_image"
                        v-model="featured_image">
                </div>
                <img id="featuredImageHolder" style="margin-top:15px;max-height:100px;">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-secondary ">Save</button>
            </div>
        </div>
    </form>
</template>
<script>
export default {
    name: "AddCategoryComponent"
}
</script>
