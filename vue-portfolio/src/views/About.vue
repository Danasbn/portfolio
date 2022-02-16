<template>
  <div class="about">
    <v-main>
      <div>
        <h1 style="text-align:center; padding-top:10px">
          Qui suis-je ?
        </h1>
        <v-responsive
          class="mx-auto title font-weight-light mb-8"
          max-width="720"
        >
          <p
            class="presentation"
            style="text-align:center"
          >
            Après plusieurs experiences professionnelles et personnelles, je me suis redirigé vers le monde dans lequel j'ai grandi, l'informatique !
            Je suis passé par différents métiers avant de trouver celui qui me plait : serveur, travail de la fibre de verre et des résines, dessinateur industriel, responsable vente adjoint d'une enseigne de l'automobile, vendeur conseiller en pièces techniques et enfin, développeur web.
          </p>
        </v-responsive>
        <v-card
          class="mx-auto"
          max-width="434"
          tile
        >
          <v-img
            height="100%"
            src="../assets/essai-bg-card.jpg"
          >
            <v-row
              align="end"
              class="fill-height"
            >
              <v-col
                align-self="start"
                class="pa-0"
                cols="12"
              >
                <v-avatar
                  class="profile"
                  size="164"
                  tile
                >
                  <v-img src="../assets/profil_pic.jpg" />
                </v-avatar>
              </v-col>
              <v-col class="py-0">
                <v-list-item
                  color="rgba(0, 0, 0, .4)"
                  dark
                >
                  <v-list-item-content>
                    <v-list-item-title class="title">
                      Dan Assaban
                    </v-list-item-title>
                    <v-list-item-subtitle>Développeur web à la recherche d'une entreprise</v-list-item-subtitle>
                  </v-list-item-content>
                </v-list-item>
              </v-col>
            </v-row>
          </v-img>
        </v-card>
        <v-timeline>
          <v-timeline-item color="red">
            Mars 2020 - Changement de voie professionnelle
          </v-timeline-item>
          <v-timeline-item
            class="text-right"
            color="orange"
          >
            Octobre 2020 - Debut de formation developpeur web (niveau bac+2) au sein de l'école O'clock
          </v-timeline-item>
          <v-timeline-item color="green">
            Avril 2021 - Fin de formation
          </v-timeline-item>
        </v-timeline>
      </div>
    </v-main>
    <Footer />
  </div>
</template>

<script>
import Footer from '@/components/Footer.vue'

export default {
    name: 'About',
    components: {
        Footer
    },

    data() {

        return {

        };

    },
    methods: {

    },

};
</script>
