<template>
  <div class="intro">
    <v-content>
      <v-container class="text-center">
        <h2 class="display-2 font-weight-bold mb-3">
          Ca pique ? C'était le but, attirer votre attention !
        </h2>
        <v-switch
          id="switchDarkMode"
          style="display:inline-block"
          v-model="$vuetify.theme.dark"
          inset
          label="Dark mode"
          persistent-hint
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
        <v-responsive
          class="mx-auto title font-weight-light mb-8"
          max-width="720"
        >
          Après plusieurs experiences professionnelles et personnelles, je me suis redirigé vers le monde dans lequel j'ai grandi, l'informatique !
          Je suis passé par différents métiers avant de trouver celui qui me plait : serveur, travail de la fibre de verre et des résines, dessinateur industriel, responsable vente adjoint d'une enseigne de l'automobile, vendeur conseiller en pièces techniques et enfin, développeur web.
        </v-responsive>
        <v-responsive
          class="mx-auto title font-weight-light mb-8"
          max-width="720"
        >
          Désormais je souhaite continuer mon apprentissage du développement web en rejoignant une entreprise qui saura m'accompagner en CDI ou en contrat de professionnalisation.
        </v-responsive>

        <div />

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
      </v-container>
    </v-content>
  </div>
</template>

<script>
export default {
name: 'Intro',

}
</script>

<style>

</style>