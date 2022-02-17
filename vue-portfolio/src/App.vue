<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
      fixed
    >
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="title">
            Dan Assaban
          </v-list-item-title>
          <v-list-item-subtitle>
            Developpeur web
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider />

      <v-list
        dense
        nav
      >
        <v-list-item
          v-for="item in items"
          :key="item.title"
          :to="item.to"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
      <v-switch
        id="switchDarkMode"
        v-model="$vuetify.theme.dark"
        inset
        label="Dark mode"
        persistent-hint
      />
    </v-navigation-drawer>

    <v-app-bar app>
      <v-app-bar-nav-icon @click="drawer = !drawer" />

      <v-toolbar-title>Menu</v-toolbar-title>
    </v-app-bar>

    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
console.log('%c' + "Salut à toi jeune developpeur", 'color: #0bf; font-size: 2rem; background-color:#f0f');

console.log('%c' + "La reference : https://www.youtube.com/watch?v=5wGPtj3yD-k&ab_channel=JimRecord", 'color: #0bf; font-size: 1rem; background-color:#fff');
export default {

    data: () => ({
        drawer: false,
        items: [{
                title: 'Accueil',
                icon: 'mdi-home',
                to: '/'
            },
            {
                title: 'CV',
                icon: 'mdi-file-document',
                to: '/cvs'
            },
            /* { title: 'Réalisations', icon: 'mdi-web', to:'/realisations' }, */
            {
                title: 'A propos de moi',
                icon: 'mdi-information',
                to: '/about'
            },
        ],
    }),
}
</script>

<style lang="scss">
/* .v-card__title {
    font-family: 'Anton', sans-serif !important;
    letter-spacing: 2px !important;

} */
.v-application {
  transition: background-color 1s;
}

.v-application.theme--light {
  .intro {
    h2 {
      font-family: 'Anton', sans-serif !important;
      font-size: 6rem !important;
      text-align: center;
      display:inline-block;
      line-height: 8rem;
      color:#f0f;
      transform: rotate(-5deg);
    }
  }
}

.v-application.theme--dark {
  .intro {
    h2 {
      color: rgb(28, 190, 222);
      display:inline-block;
      font-family: 'Anton', sans-serif !important;
      font-size: 5rem !important;
      line-height: 7rem;
    }
  }
}

.v-application.theme--dark {
  .intro {
    .switch-container{
      display:none;
    }
  }
}





.v-input__control {
    margin-left: 16px;
}
</style>
