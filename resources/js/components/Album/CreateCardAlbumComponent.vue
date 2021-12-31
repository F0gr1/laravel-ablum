<template>
    <div>
        <p>タイトル：<input type="text" v-model="title" /></p>
            <button @click="uploadImage">アップロード</button>
        </p>
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
            images: {},
            confirmedImage: ""
        };
    },
    created: function() {
        this.getImage();
    },
    methods: {
        getImage() {
            axios
                .get("/api/albums/")
                .then(response => {
                    this.images = response.data;
                })
                .catch(err => {
                    this.message = err;
                });
        },
        confirmImage(e) {
            this.message = "";
            this.file = e.target.files[0];
            if (!this.file.type.match("image.*")) {
                this.message = "画像ファイルを選択して下さい";
                this.confirmedImage = "";
                return;
            }
            this.createImage(this.file);
        },
        createImage(file) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = e => {
                this.confirmedImage = e.target.result;
            };
        },
        uploadImage() {
            let data = new FormData();
            data.append("title", this.title);
 
            axios
                .post("/api/albums/", data)
                .then(response => {
                    this.getImage();
                    this.message = response.data.success;
                    this.confirmedImage = "";
                    this.title = "";
                    this.file = "";
 
                    //ファイルを選択のクリア
                    this.view = false;
                    this.$nextTick(function() {
                        this.view = true;
                    });
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