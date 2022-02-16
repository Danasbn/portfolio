<template>
  <div id="realisations d-flex">
    <h1>Voici les differents projets sur lesquels j'ai travaillé</h1>
    <h3>Cette liste sera mise à jour au fur et à mesure</h3>
    <div class="row justify-space-around">
      <div
        class="col s4 m4 "
        v-for="(post, index) in posts"
        :key="index"
      >
        <v-card 
          class="mx-auto"
          max-width="400"
          min-height="435"
        >
          <v-img
            class="white--text align-end"
            height="200px"
            v-if="post._embedded['wp:featuredmedia']"
            :src="post._embedded['wp:featuredmedia'][0].source_url"
          />
          <v-card-title>{{ post.title.rendered }}</v-card-title>
          <v-card-subtitle class="pb-0">
            <v-chip
              text-color="white"
              small
              v-for="tag in post.tag_names"
              :key="tag"
              :id="tag"     
            >
              {{ tag }}
            </v-chip>  
          </v-card-subtitle> 
          <v-card-text
            class="text--primary"
            style="
    padding-top: 20px;"
          >
            <div v-html="post.excerpt.rendered" />
          </v-card-text>

          <v-card-actions class="justify-center ">
            <v-btn
              color="orange"
              outlined
              link
              :href="post.site_url"
              target="_blank"
            >
              Visiter
            </v-btn>
          </v-card-actions>
          <v-expansion-panels>
            <v-expansion-panel>
              <v-expansion-panel-header
                ripple
              >
                Plus d'informations
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <div v-html="post.content.rendered" />
              </v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-card>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
//import moment from "moment";
export default {
  name: 'Realisations',
  data() {
     return {
      // Wordpress Posts Endpoint
      postsUrl: "https://www.admin.dandev.fr/wp-json/wp/v2/posts",
      queryOptions: {
        per_page: 10, // All blog posts.
        // page: 1, // Current page of the collection.
        _embed: true //Response should include embedded resources.
      },
      // Returned Posts in an Array
      posts: [],
      tags:[],

    };
  
  },
  methods: {

    // Get Recent Posts From WordPress Site
    getRecentMessages() {
      axios
        .get(this.postsUrl, { params: this.queryOptions })
        .then(response => {
          this.posts = response.data;
          
        //  console.log("Posts retrieved!");
         console.log(this.posts);
        })
        .catch(error => {
          console.log(error);
        });
    },
    getPostTags(){
      axios
        .get(this.postsUrl, { params: this.queryOptions })
        .then(response => {
          this.posts = response.data;
           response.data.forEach(post=>{
             // console.log("post name : "  + post.title.rendered + " post tag : " + post.tag_names);
            // console.log(typeof post.tag_names);
             this.tags.push(post.tag_names);
             return post.tag_names;
          });
        })
    },
    
  },

   mounted() {
     this.getRecentMessages();
     this.getPostTags();
   }
};
</script>

<style>

.v-card-text {
  padding-top:10px
}
.v-sheet.v-card{
  padding: auto;
  margin-top:50px;
}
.more-link {
 display: none
}
span#Php {
  background:#777BB3 !important;
} 
span#Bootstrap {
  background:#593688 !important;
} 
span#Sql {
  background:#DE8A00 !important;
} 
span#VueJs {
  background:#41B883 !important;
} 
span#Vuetify {
  background:#1964BB !important;
}
span#WordPress {
  background:#227397 !important;
}
span#Axios {
  background:black !important;
}
span#APIRest {
  background:black !important;
}
span#Lumen {
  background:#E74430 !important;
}
h1{
  text-align:center;
}
h3{
  text-align:center;
  margin-bottom: 10px;
  padding-top:5px
}

</style>>
