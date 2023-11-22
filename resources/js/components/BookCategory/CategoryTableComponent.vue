<template>
    <div class="table-responsive" id="dataTable">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Featured Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Biography</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/03/27/18/31/book-1283468_960_720.jpg" alt="category" width="75px"></td>
                    <td><span class="text text-success">Published</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Technology</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/03/27/18/31/book-1283468_960_720.jpg" alt="category" width="75px"></td>
                    <td><span class="text text-success">Published</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Science</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/03/27/18/31/book-1283468_960_720.jpg" alt="category" width="75px"></td>
                    <td><span class="text text-danger">Draft</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Fiction</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/03/27/18/31/book-1283468_960_720.jpg" alt="category" width="75px"></td>
                    <td><span class="text text-success">Published</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Programming</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/03/27/18/31/book-1283468_960_720.jpg" alt="category" width="75px"></td>
                    <td><span class="text text-success">Published</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name:"CategoryTableComponent",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
