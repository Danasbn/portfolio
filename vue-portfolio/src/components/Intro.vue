<template>
  <section class="intro">
    <h2 class="display-2 font-weight-bold mb-3" v-html="getMessage">
    </h2>
    <h3 ><p v-html="getSmallMessage"></p></h3>
    <div class="switch-container">
      <v-switch
        id="switchDarkMode"
        :style="style"
        v-model="$vuetify.theme.dark"
        inset
        label="Dark mode"
        color="indigo darken-3"
        @click=" hideSwitch(); "
        
      />
    </div>
    <v-responsive
      class="mx-auto mb-8"
      width="56"
    >
      <v-divider class="mb-1" />

      <v-divider />
    </v-responsive>

    <v-avatar
      class="elevation-12 mb-12"
      size="128"
    >
      <v-img src="../assets/profil_pic.jpg" />
    </v-avatar>

    <v-responsive>
      <v-btn
        color="grey"
        href="https://github.com/Danasbn"
        outlined
        large
        target="_blank"
      >
        <span class="grey--text text--lighter-1 font-weight-bold">
          Github
        </span>
      </v-btn>

      <v-btn
        color="blue"
        href="https://www.linkedin.com/in/danassaban/"
        outlined
        large
        target="_blank"
      >
        <span class="grey--text text--lighter-1 font-weight-bold">
          Linkedin
        </span>
      </v-btn>
    </v-responsive>
    <v-responsive
      class="mx-auto title font-weight-light mb-8"
      max-width="720"
    />
    <!--             <v-responsive class="mx-auto title font-weight-light mb-8"
          max-width="720">
              Désormais je souhaite continuer mon apprentissage du développement web en rejoignant une entreprise qui saura m'accompagner en CDI ou en contrat de professionnalisation.
          </v-responsive> -->
  </section>
</template>

<script>
export default {

    data() {
        return {
            lightMode: {
              message: "Ça pique<br/>les yeux ?",
              smallMessage: "Le but était d'attirer votre attention ! Activez le dark mode ci-dessous pour le bien de vos pupilles.",
            },
            darkMode: {
              message: "Allez, lisons la suite !",
              smallMessage: "Oui, j'ai enlevé le bouton, on n'est pas là pour s'amuser avec un switch !",
            },
            
            style: "display:inline-block",

        };

    },
    computed: {
      getMessage() {
        if(this.$vuetify.theme.isDark) {
          return this.darkMode.message;
        }
        else {
          return this.lightMode.message;
        }
        // return 'test';
        // console.log(this.$vuetify.theme.isDark);
      },
      getSmallMessage(){
          if(this.$vuetify.theme.isDark) {
          return this.darkMode.smallMessage;
        }
        else {
          return this.lightMode.smallMessage;
        }
      }
    },
    methods: {
       
        hideSwitch() {
            this.style = "display:none";
        },
   /*      changeSizes(){
            this.titleSize ="";
            this.smallerSize = "";
        } */
        /*     hideVisit(){

            if(this.post.site_url ==="https://dandev.fr"){
              alert("vous etes actuellement sur le site")
            }else{
              console.log("coucou")
            }
          } */

    },

};
</script>

<style lang="scss">

.intro {
  .switch-container {
    transform: scale(1.2);
    opacity: 1;
  }
}

.v-card-text {
    padding-top: 10px
}

.v-sheet.v-card {
    padding: auto;
    margin-top: 50px;
}

.more-link {
    display: none
}

span#Php {
    background: #777BB3 !important;
}

span#Bootstrap {
    background: #593688 !important;
}

span#Sql {
    background: #DE8A00 !important;
}

span#VueJs {
    background: #41B883 !important;
}

span#Vuetify {
    background: #1964BB !important;
}

span#WordPress {
    background: #227397 !important;
}

span#Axios {
    background: black !important;
}

span#APIRest {
    background: black !important;
}

span#Lumen {
    background: #E74430 !important;
}

h1 {
    text-align: center;
}


h3 {
    text-align: center;
    margin-bottom: 10px;
    padding-top: 5px
}
</style>>
