<template>
    <div class="container-fluid bg-dark mb-5">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-2 h1">Vue Sample</span>
                <div>
                    <router-link v-bind:to="{name: 'album.list'}">
                        <button class="btn btn-outline-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'album.create'}">
                        <button class="btn btn-success">ADD</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>
 
<script>
    export default {}
</script>