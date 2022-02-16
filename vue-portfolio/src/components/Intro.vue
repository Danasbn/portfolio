<template>
  <div>
    <h2 class="display-2 font-weight-bold mb-3">
      {{ message }}
    </h2>
    <p><small>{{ smallMessage }}</small></p>
    <v-switch
      id="switchDarkMode"
      :style="style"
      v-model="$vuetify.theme.dark"
      inset
      label="Dark mode"
      persistent-hint
      @click="newIntro(); hideSwitch()"
    />
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
  </div>
</template>

<script>
export default {

    data() {
        return {

            message: "Ca pique ?",
            smallMessage: "Le but était d'attirer votre attention ! Activez le dark mode ci dessous pour le bien de vos pupilles.",
            style: "display:inline-block",

        };

    },
    methods: {
        newIntro() {
            this.message = 'Allez, lisons la suite ! ';
            this.smallMessage = 'Oui, j\'ai enlevé le bouton, on est pas là pour s\'amuser avec un switch !';
        },
        hideSwitch() {
            this.style = "display:none";
        },
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

<style>
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
