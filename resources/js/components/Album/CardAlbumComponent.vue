<template>
    <div>
        <div v-for="Album in Albums" :key="Album.id" class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ Album.album }}</h5>
                <router-link v-bind:to="{name: 'image.list' , params: { id : Album.id}}">
                        <button  class="btn btn-primary">-></button>
                </router-link>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            message: "",
            file: "",
            title: "",
            view: true,
            Albums: {},
            confirmedAlbum: ""
        };
    },
    created: function() {
        this.getAlbum();
    },
    methods: {
        getAlbum() {
            axios
                .get("/api/albums/")
                .then(response => {
                    this.Albums = response.data;
                })
                .catch(err => {
                    this.message = err;
                });
        },
    }
};
</script>
<style>
.img {
    width: 100px;
}
</style>