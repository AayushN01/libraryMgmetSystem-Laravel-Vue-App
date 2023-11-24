<template>
    <form action="" id="addCategory" v-on:submit.prevent="addCategory">

        <div class="form-group row">
            <div class="col-md-12">
                <label for="name" class="form-label">Name <span class="text text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" v-model="category.name" placeholder="Name">
                <div class="error" v-if="errors">
                    <span class="text text-danger">{{ errors }}</span>
                </div>
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
                        v-model="category.featured_image">
                </div>
                <img id="featuredImageHolder" style="margin-top:15px;max-height:100px;">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <label for="status" class="form-label">Staus</label>
                <select name="status" v-model="category.status">
                    <option value="0" selected>Draft</option>
                    <option value="1" selected>Publish</option>
                </select>
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
import axios from 'axios';

export default {
    name: "AddCategoryComponent",
    data() {
        return {
            category: {
                name: '',
                featured_image: '',
                status: 0
            },
            errors: [],
        };
    },
    methods: {
        addCategory() {
            this.errors = [];
            if (!this.category.name) {
                this.errors.push('Category Name is Required');
            }

            axios.post('/api/category', {
                name: this.category.name,
                featured_image: this.category.featured_image,
                status: this.category.status
            })
            .then(response => {
                console.log(response.data, 'Data added successfully!');
            })
            .catch(error => {
                if (error.response && error.response.data && error.response.data.errors) {
                    this.errors = error.response.data.errors;
                } else {
                    console.error('Error creating category:', error);
                }
            });
        }
    }
}
</script>
