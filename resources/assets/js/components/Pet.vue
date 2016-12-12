<template>
    <div class="pet">
        <img :src="img">
        <h2>{{ name }}</h2>

        <div class="btn-group">
            <a :href="url" class="btn btn-default">
                <i class="fa fa-eye"></i>
            </a>

            <a :href="url + '/edit'" class="btn btn-default" :style="rightBorder">
                <i class="fa fa-edit"></i>
            </a>

            <div v-if="status == 'Up to date'" style="display: inline">
                <a :href="url + '/pdf/download'" class="btn btn-default">
                    <i class="fa fa-download"></i>
                </a>
            </div>

        </div>

        <i class="fa fa-refresh" title="Queued for processing" v-show="displayStatus"></i>

    </div>
</template>

<script>
    export default {
        props: ['name', 'url', 'status', 'img'],

        computed: {
            displayStatus() {
                return this.status == 'Queued for processing' ? true : false;
            },

            rightBorder() {
                return this.status == 'Up to date' ? 'border-right: 0' : null;
            }
        }
    }
</script>
