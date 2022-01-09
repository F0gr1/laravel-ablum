<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="uploadImage">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-control" id="title"  v-model="album">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            message: "",
            album: "",
            view: true,
        };
    },
    methods: {
        uploadImage() {
            let data = new FormData();
            data.append("album", this.album);
            axios
                .post("/api/albums/", data)
                .then(response => {
                    this.$router.push({name: 'album.list'});
                })
                .catch(err => {
                    this.message = err.response.data.errors;
                });
        }
    }
};
</script>
 
<style>
.img {
    width: 100px;
}
</style>