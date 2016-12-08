<template>
    <div class="pet">
        <img :src="img">
        <h2>{{ name }}</h2>

        <div class="btn-group">
            <a :href="url" class="btn btn-default">
                <i class="fa fa-eye"></i>
            </a>

            <a :href="url + '/edit'" class="btn btn-default">
                <i class="fa fa-edit"></i>
            </a>

            <a :href="url + '/pdf/download'" class="btn btn-default">
                <i class="fa fa-download"></i>
            </a>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['name', 'url', 'status', 'img']
    }
</script>
