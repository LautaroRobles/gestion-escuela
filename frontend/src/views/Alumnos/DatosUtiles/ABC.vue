<template>
    <div>
        
    </div>
</template>

<script>
import requester from '@/utils/requester'

export default {
    methods: {
        getListadoDeABC() {
            requester.get({handler: ""});
        }
    },
    mounted() {
        this.getListadoDeABC();
    }
}
</script>

<style>

</style>