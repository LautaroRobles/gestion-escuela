<template>
    <v-app>
        <router-view name="navigation"></router-view>

        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-slide-x-transition mode="out-in">
                <router-view name="view"></router-view>
            </v-slide-x-transition>
        </v-main>

        <v-footer app>
            <!-- -->
        </v-footer>
    </v-app>
</template>

<script>
export default {
    created() {
        this.$vuetify.theme.dark = true;
    }
}
</script>

<style>

</style>
