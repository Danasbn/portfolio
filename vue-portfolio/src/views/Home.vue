<template>
  <div class="home">
    <v-main>
      <v-container class="text-center">
        <Intro />
        <Realisations />
      </v-container>
    </v-main>
    <Footer />
  </div>
</template>

<script>
  // @ is an alias to /src
  import Intro from '@/components/Intro.vue'
  import Footer from '@/components/Footer.vue'
  import Realisations from '@/components/Realisations.vue'

  export default {
    name: 'Home',
    components: {
      Intro,
      Footer,
      Realisations,

    }
  }
</script>

<style>

</style>