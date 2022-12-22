<template>
  <v-app>
    <v-layout row justify-center align-content-start>
      <v-container fluid>
        <v-toolbar dark color="blue-grey darken-1" class="hidden-xs-and-down">
          <v-toolbar-title>Tasks App</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-row justify="center" align="center">
            <v-toolbar-items>
              <v-col>
                <v-btn
                  exact
                  key="create"
                  to="/tasks/create"
                  title="create"
                  text
                >
                  create</v-btn
                >
              </v-col>
              <v-col>
                <v-btn exact key="index" to="/tasks" title="index" text>
                  tasks</v-btn
                >
              </v-col>
              <v-col>
                <v-btn
                  exact
                  key="statistics"
                  to="/statistics/top-ten"
                  title="statistics"
                  text
                >
                  statistics</v-btn
                >
              </v-col>
            </v-toolbar-items>
            <v-spacer></v-spacer>
          </v-row>
        </v-toolbar>
        <LoadingScreen v-if="loadingStatus" />
      </v-container>
      <v-container fluid my-5>
        <v-layout column align-center>
          <v-main style="width: 80%">
            <router-view />
          </v-main>
        </v-layout>
      </v-container>
    </v-layout>
  </v-app>
</template>

<script>
import { mapGetters } from "vuex";
import LoadingScreen from "./views/Loading.vue";
export default {
  name: "App",
  components: {
    LoadingScreen,
  },
  computed: {
    ...mapGetters(["loadingStatus"]),
  },
  data: () => ({
    //
  }),
};
</script>
<style scoped>
.v-application .my-5 {
  margin-top: 5% !important;
}
</style>
