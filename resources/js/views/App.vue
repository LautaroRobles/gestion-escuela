<template>
    <v-app>
        <router-view name="navigation"></router-view>

        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <router-view name="view"></router-view>
        </v-main>

        <v-footer app>
            <!-- -->
        </v-footer>
    </v-app>
</template>

<script>
export default {
    created() {
    }
}
</script>

<style>

</style>
