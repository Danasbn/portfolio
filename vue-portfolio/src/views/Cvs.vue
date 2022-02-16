<template>
  <div class="cvs">
    <v-main>
      <div class="text-center">
        <h1>Curriculum Vitae</h1>
        <div>
          <iframe
            src="https://drive.google.com/file/d/1Rc8tDkku6fX_rsCUBgcVOrjRaFyfQBAs/preview"
            width="100%"
            height="800"
            allow="autoplay"
          />
        </div>
        <Footer />
      </div>
    </v-main>
  </div>
</template>

<script>
import axios from "axios";
import Footer from '@/components/Footer.vue'

export default {
    components: {
        Footer
    },
    methods: {
        getRecentMessages() {
            axios
                .get(this.postsUrl, {
                    params: this.queryOptions
                })
                .then((response) => {
                    this.posts = response.data;

                    //  console.log("Posts retrieved!");
                    console.log(this.posts);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.getRecentMessages();
    },
    data() {
        return {
            // Wordpress Posts Endpoint
            postsUrl: "http://localhost/portfolio/public/wp-json/wp/v2/cvs",
            queryOptions: {
                per_page: 10, // All blog posts.
                // page: 1, // Current page of the collection.
                _embed: true, //Response should include embedded resources.
            },
            // Returned Posts in an Array
            posts: [],
            tags: [],
        };
    },
};
</script>

<style></style>
