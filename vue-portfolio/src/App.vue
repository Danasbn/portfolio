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

<style>
.v-input__control {
    margin-left: 16px;
}
</style>
